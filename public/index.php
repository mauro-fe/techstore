<?php
// public/index.php — Front Controller

declare(strict_types=1);


// 1) Autoload
require __DIR__ . '/../vendor/autoload.php';

use App\Core\Bootstrap;
use App\Core\Router;

define('BASE_PATH', dirname(__DIR__));
define('PUBLIC_PATH', realpath(__DIR__));

// 2) Ambiente básico
mb_internal_encoding('UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');

// CORS básico (se não precisar, pode remover)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: Content-Type, Authorization');
    header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS');
    http_response_code(204);
    exit;
}

// 3) Bootstrap (.env + Eloquent + session)
//    -> Se o seu Bootstrap::init() já retorna o $config, use-o.
$config = Bootstrap::init(dirname(__DIR__));

// 4) Debug / Timezone
$debug = filter_var($config['app']['debug'] ?? true, FILTER_VALIDATE_BOOLEAN);
ini_set('display_errors', $debug ? '1' : '0');
error_reporting($debug ? E_ALL : E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

date_default_timezone_set($_ENV['APP_TZ'] ?? 'America/Sao_Paulo');

// 5) BASE_URL (auto se não vier do .env)
$baseUrl = rtrim($config['app']['base_url'] ?? '', '/');
if ($baseUrl === '') {
    $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
    $scheme  = $isHttps ? 'https' : 'http';
    $host    = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $dir     = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
    $baseUrl = $scheme . '://' . $host . ($dir ? $dir : '') . '/';
}

// 6) Handlers de erro/exceção
set_exception_handler(function (Throwable $e) use ($debug) {
    http_response_code(500);
    error_log('[500] ' . $e->getMessage() . "\n" . $e->getTraceAsString());
    if ($debug) {
        echo "<h1>Erro 500</h1><pre>{$e}</pre>";
    } else {
        $fallback = __DIR__ . '/../pages/Errors/500.php';
        if (is_file($fallback)) {
            require $fallback;
        } else {
            echo 'Erro interno do servidor.';
        }
    }
});

set_error_handler(function ($severity, $message, $file, $line) use ($debug) {
    if (!(error_reporting() & $severity)) return false;
    throw new ErrorException($message, 0, $severity, $file, $line);
});

// 7) Carrega rotas e despacha
// 7) Carrega rotas e despacha
require __DIR__ . '/../Routes/web.php';

// pega o caminho da URL (sem /public)
$uriPath     = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
$scriptDir   = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
$requested   = '/' . ltrim(preg_replace('#^' . $scriptDir . '#', '', $uriPath), '/');
$requested   = $requested === '' ? '/' : $requested;
$httpMethod  = $_SERVER['REQUEST_METHOD'] ?? 'GET';

\App\Core\Router::run(trim($requested, '/'), strtoupper($httpMethod));
