<?php

namespace App\Controllers;

use App\Models\Loja;

abstract class Controller
{
    protected int $lojaId;
    protected ?int $userId;

    protected function resolveDefaultLoja(): void
    {
        $slug = $_ENV['DEFAULT_LOJA_SLUG'] ?? null;
        $loja = $slug ? Loja::where('slug', $slug)->first()
            : Loja::orderBy('id', 'asc')->first();
        if (!$loja) die('Loja não encontrada');
        $this->lojaId = (int)$loja->id;
    }

    protected function requireAuth(): void
    {
        if (empty($_SESSION['user_id']) || empty($_SESSION['loja_id'])) {
            header('Location: ' . base_url('login'));
            exit;
        }
        $this->userId = (int)$_SESSION['user_id'];
        $this->lojaId = (int)$_SESSION['loja_id'];
    }
}
