<?php

namespace App\Controllers\Site;

use App\Controllers\Controller;
use App\Core\View;
use App\Models\Loja;
use App\Models\Produto;

class HomeController extends Controller
{
    public function index($params)
    {
        $this->resolveLojaBySlug($params['loja']);
        $loja = Loja::find($this->lojaId);
        $produtos = Produto::where('loja_id', $this->lojaId)
            ->where('ativo', 1)
            ->orderBy('created_at', 'desc')
            ->limit(24)->get();
        View::render('home', compact('loja', 'produtos'));
    }
}
