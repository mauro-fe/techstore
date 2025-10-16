<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\View;
use App\Models\{Pedido, PedidoItem, Produto};
use Illuminate\Database\Capsule\Manager as DB;

class PedidoController extends Controller
{
    public function index($params)
    {
        $this->requireAuth();
        $status = $_GET['status'] ?? null;

        $q = Pedido::where('loja_id', $this->lojaId)
            ->orderBy('created_at', 'desc');

        if ($status) $q->where('status', $status);

        $pedidos = $q->limit(200)->get();
        View::render('admin/pedidos', compact('pedidos', 'status'));
    }

    public function show($params)
    {
        $this->requireAuth();
        $id = (int)$params['id'];

        $pedido = Pedido::where('loja_id', $this->lojaId)->find($id);
        if (!$pedido) {
            http_response_code(404);
            exit('Pedido não encontrado');
        }

        $itens = PedidoItem::where('pedido_id', $pedido->id)->get()->load('produto');
        View::render('admin/pedido_show', compact('pedido', 'itens'));
    }

    public function confirm($params)
    {
        $this->requireAuth();
        $id = (int)$params['id'];

        $pedido = Pedido::where('loja_id', $this->lojaId)->find($id);
        if (!$pedido) exit('Pedido não encontrado');

        if ($pedido->status === 'reserved') {
            $pedido->status = 'confirmed';
            $pedido->save();
        }

        header('Location: ' . base_url("{$params['loja']}/admin/pedidos/{$id}"));
    }

    public function markPaid($params)
    {
        $this->requireAuth();
        $id = (int)$params['id'];

        $pedido = Pedido::where('loja_id', $this->lojaId)->find($id);
        if (!$pedido) exit('Pedido não encontrado');

        // regra simples: 'paid' separado de 'completed' (entregue/retirado)
        if (in_array($pedido->status, ['reserved', 'confirmed'])) {
            $pedido->status = 'paid';
            $pedido->save();
        }

        header('Location: ' . base_url("{$params['loja']}/admin/pedidos/{$id}"));
    }

    public function cancel($params)
    {
        $this->requireAuth();
        $id = (int)$params['id'];

        DB::transaction(function () use ($id, $params) {
            $pedido = Pedido::where('loja_id', $this->lojaId)->lockForUpdate()->find($id);
            if (!$pedido) exit('Pedido não encontrado');

            // devolve estoque apenas se ainda não concluído
            if (!in_array($pedido->status, ['cancelled', 'expired', 'completed'])) {
                $itens = PedidoItem::where('pedido_id', $pedido->id)->get();

                foreach ($itens as $it) {
                    /** @var Produto $prod */
                    $prod = Produto::where('loja_id', $this->lojaId)->lockForUpdate()->find($it->produto_id);
                    if ($prod) {
                        $prod->quantidade += (int)$it->quantidade;
                        $prod->save();
                    }
                }
                $pedido->status = 'cancelled';
                $pedido->save();
            }
        });

        header('Location: ' . base_url("{$params['loja']}/admin/pedidos"));
    }
}
