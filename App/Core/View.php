<?php

namespace App\Core;

class View
{
    public static function render(string $view, array $data = [], bool $layout = true): void
    {
        extract($data, EXTR_OVERWRITE);

        $viewPath = BASE_PATH . '/pages/' . $view . '.php';
        if (!file_exists($viewPath)) {
            http_response_code(500);
            exit("View não encontrada: {$view}");
        }

        if ($layout) {
            include BASE_PATH . '/pages/Partials/header.php';
            include $viewPath;
            include BASE_PATH . '/pages/Partials/footer.php';
        } else {
            include $viewPath;
        }
    }
}
