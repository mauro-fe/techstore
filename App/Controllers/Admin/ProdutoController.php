<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\View;
use App\Models\Produto;

class ProdutoController extends Controller
{

    public function index($params)
    {
        $this->requireAuth();
        $produtos = Produto::where('loja_id', $this->lojaId)->orderBy('id', 'desc')->get();
        View::render('admin/produtos', compact('produtos'));
    }

    public function store($params)
    {
        $this->requireAuth();
        $nome = trim($_POST['nome'] ?? '');
        $preco = (float)($_POST['preco'] ?? 0);
        $qtd = (int)($_POST['quantidade'] ?? 0);
        $slug = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $nome));

        if (!$nome || $preco <= 0) {
            exit('Dados inválidos');
        }

        Produto::create([
            'loja_id' => $this->lojaId,
            'sku' => $_POST['sku'] ?? null,
            'nome' => $nome,
            'slug' => $slug,
            'descricao' => $_POST['descricao'] ?? null,
            'preco' => $preco,
            'quantidade' => $qtd,
            'aceita_retirada' => isset($_POST['aceita_retirada']) ? 1 : 0,
            'shopee_url' => $_POST['shopee_url'] ?? null,
            'ativo' => isset($_POST['ativo']) ? 1 : 0
        ]);

        header('Location: ' . base_url("{$params['loja']}/admin/produtos"));
    }

    public function update($params)
    {
        $this->requireAuth();
        $id = (int)$params['id'];
        $p = Produto::where('loja_id', $this->lojaId)->find($id);
        if (!$p) exit('Produto não encontrado');

        $nome = trim($_POST['nome'] ?? $p->nome);
        $slug = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $nome));

        $p->update([
            'sku' => $_POST['sku'] ?? $p->sku,
            'nome' => $nome,
            'slug' => $slug,
            'descricao' => $_POST['descricao'] ?? $p->descricao,
            'preco' => (float)($_POST['preco'] ?? $p->preco),
            'quantidade' => (int)($_POST['quantidade'] ?? $p->quantidade),
            'aceita_retirada' => isset($_POST['aceita_retirada']) ? 1 : 0,
            'shopee_url' => $_POST['shopee_url'] ?? $p->shopee_url,
            'ativo' => isset($_POST['ativo']) ? 1 : 0
        ]);

        header('Location: ' . base_url("{$params['loja']}/admin/produtos"));
    }

    public function destroy($params)
    {
        $this->requireAuth();
        $id = (int)$params['id'];
        $p = Produto::where('loja_id', $this->lojaId)->find($id);
        if ($p) $p->delete();
        header('Location: ' . base_url("{$params['loja']}/admin/produtos"));
    }
}
