<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\View;
use App\Models\{Produto, Pedido};

class DashboardController extends Controller
{
    public function index($params)
    {
        $this->requireAuth(); // garante $_SESSION['user_id'] e $this->lojaId

        // Métricas básicas
        $totalProdutos   = Produto::where('loja_id', $this->lojaId)->count();
        $estoqueTotal    = Produto::where('loja_id', $this->lojaId)->sum('quantidade');

        $statusCounts = Pedido::selectRaw("status, COUNT(*) as qt")
            ->where('loja_id', $this->lojaId)
            ->groupBy('status')
            ->pluck('qt', 'status')
            ->toArray();

        // Hoje (00:00 → 23:59)
        $hojeIni = date('Y-m-d 00:00:00');
        $hojeFim = date('Y-m-d 23:59:59');

        $pedidosHoje  = Pedido::where('loja_id', $this->lojaId)
            ->whereBetween('created_at', [$hojeIni, $hojeFim])->count();

        $faturamentoHoje = Pedido::where('loja_id', $this->lojaId)
            ->whereBetween('created_at', [$hojeIni, $hojeFim])
            ->whereIn('status', ['paid', 'completed'])
            ->sum('total');

        // Últimos pedidos
        $ultimosPedidos = Pedido::where('loja_id', $this->lojaId)
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        // Baixo estoque (<= 3)
        $baixoEstoque = Produto::where('loja_id', $this->lojaId)
            ->where('quantidade', '<=', 3)
            ->orderBy('quantidade', 'asc')
            ->limit(10)
            ->get();

        View::render('admin/dashboard', [
            'totalProdutos'   => $totalProdutos,
            'estoqueTotal'    => $estoqueTotal,
            'statusCounts'    => $statusCounts,
            'pedidosHoje'     => $pedidosHoje,
            'faturamentoHoje' => $faturamentoHoje,
            'ultimosPedidos'  => $ultimosPedidos,
            'baixoEstoque'    => $baixoEstoque,
        ]);
    }
}
