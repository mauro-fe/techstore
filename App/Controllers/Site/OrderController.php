<?php

namespace App\Controllers\Site;

use App\Controllers\Controller;
use App\Models\{Produto, Pedido, PedidoItem, Loja};
use App\Services\MailerService;
use Illuminate\Database\Capsule\Manager as DB;
use GUMP;

class OrderController extends Controller
{


    public function createPickup($params)
    {
        $this->resolveLojaBySlug($params['loja']);

        // --- validação (GUMP)
        $gump = new GUMP('pt-br');
        $data = [
            'nome'       => $_POST['nome']       ?? '',
            'telefone'   => $_POST['telefone']   ?? '',
            'produto_id' => $_POST['produto_id'] ?? '',
            'quantidade' => $_POST['quantidade'] ?? '1',
        ];

        $gump->validation_rules([
            'nome'       => 'required|min_len,2|max_len,150',
            'telefone'   => 'required|min_len,8|max_len,40',
            'produto_id' => 'required|integer|min_numeric,1',
            'quantidade' => 'required|integer|min_numeric,1|max_numeric,999',
        ]);

        $gump->filter_rules([
            'nome'       => 'trim|sanitize_string',
            'telefone'   => 'trim',
            'produto_id' => 'trim|sanitize_numbers',
            'quantidade' => 'trim|sanitize_numbers',
        ]);

        $data = $gump->run($data);
        if ($data === false) {
            http_response_code(422);
            exit(implode("\n", $gump->get_errors_array()));
        }

        $nome       = $data['nome'];
        $tel        = $data['telefone'];
        $produtoId  = (int)$data['produto_id'];
        $qtd        = (int)$data['quantidade'];

        // --- cria pedido e reserva estoque
        try {
            $pedido = DB::transaction(function () use ($produtoId, $qtd, $nome, $tel) {
                /** @var Produto $produto */
                $produto = Produto::lockForUpdate()
                    ->where('loja_id', $this->lojaId)
                    ->find($produtoId);

                if (!$produto || !$produto->ativo) {
                    http_response_code(400);
                    exit('Produto não disponível.');
                }
                if (!$produto->aceita_retirada) {
                    http_response_code(400);
                    exit('Este produto não permite retirada local.');
                }
                if ($produto->quantidade < $qtd) {
                    http_response_code(400);
                    $tip = $produto->shopee_url ? "\nSugestão: compre pela Shopee." : '';
                    exit('Sem estoque suficiente.' . $tip);
                }

                // cria pedido
                $order = Pedido::create([
                    'loja_id'       => $this->lojaId,
                    'codigo'        => 'P-' . date('YmdHis') . '-' . rand(100, 999),
                    'nome_cliente'  => $nome,
                    'telefone'      => $tel,
                    'status'        => 'reserved',
                    'total'         => (float)$produto->preco * $qtd,
                ]);

                // item
                PedidoItem::create([
                    'pedido_id'   => $order->id,
                    'produto_id'  => $produto->id,
                    'quantidade'  => $qtd,
                    'preco_unit'  => (float)$produto->preco,
                ]);

                // reserva estoque
                $produto->quantidade -= $qtd;
                $produto->save();

                return $order;
            });
        } catch (\Throwable $e) {
            http_response_code(500);
            exit('Erro ao criar a reserva. Tente novamente.');
        }

        // --- e-mail de notificação
        $loja = Loja::find($this->lojaId);
        if (!empty($loja->email_notificacoes)) {
            $html = "Nova reserva na loja <b>{$loja->nome}</b><br>"
                . "Código: <b>{$pedido->codigo}</b><br>"
                . "Cliente: " . htmlspecialchars($nome) . " (" . htmlspecialchars($tel) . ")<br>"
                . "Total: R$ " . number_format($pedido->total, 2, ',', '.');

            try {
                MailerService::send(
                    $loja->email_notificacoes,
                    "Nova reserva {$pedido->codigo}",
                    $html
                );
            } catch (\Throwable $e) {
                // não quebra o fluxo se o e-mail falhar
                // error_log('Falha ao enviar e-mail de reserva: ' . $e->getMessage());
            }
        }

        // --- resposta simples (texto) para o fetch/alert do front
        echo "Reserva criada! Código: {$pedido->codigo}";
    }
}
