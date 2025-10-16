<?php

namespace App\Controllers\Site;

use App\Controllers\Controller;
use App\Core\View;
use App\Models\{Produto, Categoria};

class ProductController extends Controller
{
    public function index($params)
    {
        $slug = $params['slug'] ?? null;

        // Busca categoria pelo slug
        $categoria = Categoria::where('slug', $slug)->first();
        if (!$categoria) {
            http_response_code(404);
            View::render('errors/404', ['mensagem' => 'Categoria não encontrada']);
            return;
        }

        // Busca produtos ativos dessa categoria
        $produtos = Produto::where('categoria_id', $categoria->id)
            ->where('ativo', 1)
            ->orderBy('nome', 'asc')
            ->get();

        View::render('site/categoria', [
            'categoria' => $categoria,
            'produtos'  => $produtos,
        ]);
    }

    public function show($params)
    {
        $slug = $params['slug'] ?? null;
        $produto = Produto::where('slug', $slug)->where('ativo', 1)->first();

        if (!$produto) {
            http_response_code(404);
            View::render('errors/404', ['mensagem' => 'Produto não encontrado']);
            return;
        }

        View::render('site/produto', ['produto' => $produto]);
    }
}
