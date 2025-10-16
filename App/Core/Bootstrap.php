<?php

namespace App\Core;

use Illuminate\Database\Capsule\Manager as Capsule;

class Bootstrap
{
    public static function init($basePath = null)
    {
        if (!$basePath) $basePath = dirname(__DIR__, 2);
        $config = require $basePath . '/config/config.php';

        // Configura Eloquent ORM
        $capsule = new Capsule;
        $capsule->addConnection($config['database']);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();

        // Inicia sessão
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        return $config;
    }
}
