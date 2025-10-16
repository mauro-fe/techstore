<?php

namespace App\Core;

use App\Services\CacheService;
use App\Services\LogService;
use App\Core\Exceptions\AuthException;
use App\Core\Exceptions\ValidationException;

class Router
{
    private static array $routes = [];

    public static function add(string $method, string $path, $callback, array $middlewares = []): void
    {
        self::$routes[] = [
            'method'      => strtoupper($method),
            'path'        => trim($path, '/'),
            'callback'    => $callback,
            'middlewares' => $middlewares,
        ];
    }

    public static function run(string $requestedPath, string $requestMethod): void
    {
        $routeContext = null;

        try {
            $request   = new Request();
            $match     = self::findMatchingRoute($requestedPath, $requestMethod);

            if ($match === null) {
                self::handleNotFound();
                return;
            }

            $routeContext = $match['route'];

            self::executeMiddlewares($routeContext['middlewares'], $request);
            self::executeCallback($routeContext, $match['params'], $request);
        } catch (AuthException | ValidationException $e) {
            self::handleAuthOrValidationException($e);
        } catch (\Throwable $e) {
            self::handleException($e, $routeContext);
        }
    }

    private static function findMatchingRoute(string $path, string $method): ?array
    {
        $path = $path === '' ? '/' : trim($path, '/');

        foreach (self::$routes as $route) {
            // captura nomes {id}, {slug}, etc.
            preg_match_all('/\{([a-zA-Z0-9_]+)\}/', $route['path'], $keys);
            $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_-]+)', $route['path']);
            $pattern = "#^" . trim($pattern, '/') . "$#";

            if ($method === $route['method'] && preg_match($pattern, $path, $matches)) {
                array_shift($matches); // remove full match
                $params = [];
                if (!empty($keys[1])) {
                    $params = array_combine($keys[1], $matches);
                }
                return ['route' => $route, 'params' => $params];
            }
        }

        return null;
    }

    private static function executeMiddlewares(array $middlewareNames, Request $request): void
    {
        if (empty($middlewareNames)) {
            return;
        }

        $registry = require BASE_PATH . '/App/Middlewares/RegistryMiddleware.php';

        foreach ($middlewareNames as $name) {
            if (!isset($registry[$name])) {
                throw new \Exception("Middleware '{$name}' não está registrado.");
            }

            $middlewareClass = $registry[$name];

            if ($name === 'ratelimit') {
                (new $middlewareClass(new CacheService()))->handle($request);
            } else {
                $middlewareClass::handle($request);
            }
        }
    }

    private static function executeCallback(array $route, array $params, Request $request): void
    {
        if (is_callable($route['callback'])) {
            // controllers/closures recebem ($params) como 1º argumento
            call_user_func($route['callback'], $params, $request);
            return;
        }

        if (is_string($route['callback'])) {
            [$controllerPath, $method] = explode('@', $route['callback']);
            $controllerNs = 'App\\Controllers\\' . str_replace('/', '\\', $controllerPath);

            if (!class_exists($controllerNs)) {
                LogService::error('Controlador não encontrado', [
                    'controller' => $controllerNs,
                    'rota'       => $route['path'],
                    'callback'   => $route['callback'],
                ]);
                throw new \Exception("Controlador '{$controllerNs}' não encontrado.");
            }

            $instance = new $controllerNs();

            if (!method_exists($instance, $method)) {
                LogService::error('Método não encontrado no controlador', [
                    'controller' => $controllerNs,
                    'metodo'     => $method,
                    'rota'       => $route['path'],
                    'callback'   => $route['callback'],
                ]);
                throw new \Exception("Método '{$method}' não encontrado no controlador '{$controllerNs}'.");
            }

            // passa APENAS um argumento com os params (array associativo)
            call_user_func([$instance, $method], $params);
            return;
        }

        throw new \Exception('Callback da rota inválido.');
    }

    private static function handleAuthOrValidationException(\Exception $e): void
    {
        if ($e instanceof AuthException) {
            header('Location: ' . BASE_URL . 'login'); // <-- aqui era admin/login
            exit;
        }

        if ($e instanceof ValidationException) {
            http_response_code($e->getCode() ?: 403);
            header('Content-Type: application/json'); // <-- fix do header
            echo json_encode([
                'status'  => 'error',
                'message' => $e->getMessage(),
                'errors'  => $e->getErrors(),
            ], JSON_UNESCAPED_UNICODE);
            exit;
        }
    }

    public static function handleException(\Throwable $e, ?array $routeContext): void
    {
        LogService::critical('Erro fatal no Router', [
            'erro' => $e->getMessage(),
            'rota' => $routeContext,
            'trace' => $e->getTraceAsString(),
        ]);

        $isDev = (($_ENV['APP_ENV'] ?? 'production') === 'development');

        http_response_code(500);

        if ($isDev) {
            echo '<h1>Erro na Aplicação</h1><pre>';
            echo '<strong>Mensagem:</strong> ' . htmlspecialchars($e->getMessage()) . "\n\n";
            echo '<strong>Arquivo:</strong> ' . $e->getFile() . ' (Linha ' . $e->getLine() . ")\n\n";
            echo '<strong>Trace:</strong>' . "\n" . htmlspecialchars($e->getTraceAsString());
            echo '</pre>';
        } else {
            include BASE_PATH . '/views/errors/500.php';
        }
        exit;
    }

    private static function handleNotFound(): void
    {
        http_response_code(404);
        $errorPage = BASE_PATH . '/pages/Errors/404.php';
        if (file_exists($errorPage)) {
            include $errorPage;
        } else {
            echo '<h2>Página não encontrada</h2>';
        }
        exit;
    }
}
