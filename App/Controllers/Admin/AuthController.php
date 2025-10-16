<?php

namespace App\Controllers\Admin;

use App\Core\View;
use App\Models\Loja;
use App\Models\Usuario;
use App\Controllers\Controller;

class AuthController extends Controller
{
    private function getDefaultLoja()
    {
        $slug = $_ENV['DEFAULT_LOJA_SLUG'] ?? null;
        if ($slug) {
            $loja = Loja::where('slug', $slug)->first();
            if ($loja) return $loja;
        }
        // fallback: primeira loja
        return Loja::orderBy('id', 'asc')->first();
    }

    public function loginForm($params)
    {
        $loja = $this->getDefaultLoja();
        if (!$loja) {
            http_response_code(500);
            exit('Nenhuma loja cadastrada.');
        }

        // guarda loja na sessão para o fluxo do admin
        $_SESSION['current_loja_id'] = (int)$loja->id;

        $lojaNome = $loja->nome;
        $error   = flash_get('error') ?? null;
        $success = flash_get('success') ?? null;

        View::render('admin/auth/login', compact('lojaNome', 'error', 'success'), false);
    }

    public function login($params)
    {
        $loja = $this->getDefaultLoja();
        if (!$loja) {
            flash_set('error', 'Loja não encontrada.');
            header('Location: ' . base_url('login'));
            return;
        }

        // CSRF
        if (!csrf_check($_POST['_csrf'] ?? '')) {
            flash_set('error', 'Requisição inválida. Atualize a página.');
            header('Location: ' . base_url('login'));
            return;
        }

        $email = trim($_POST['email'] ?? '');
        $senha = $_POST['senha'] ?? '';

        if (!$email || !$senha) {
            flash_set('error', 'Informe e-mail e senha.');
            header('Location: ' . base_url('login'));
            return;
        }

        $user = Usuario::where('email', $email)
            ->where('loja_id', $loja->id)
            ->first();

        if (!$user || !password_verify($senha, $user->senha_hash) || !$user->is_active) {
            flash_set('error', 'Credenciais inválidas.');
            header('Location: ' . base_url('login'));
            return;
        }

        $_SESSION['user_id'] = (int)$user->id;
        $_SESSION['loja_id'] = (int)$loja->id;

        header('Location: ' . base_url('admin'));
    }

    public function logout($params)
    {
        $_SESSION = [];
        if (ini_get('session.use_cookies')) {
            $p = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
        }
        session_destroy();
        header('Location: ' . base_url('login'));
    }
}
