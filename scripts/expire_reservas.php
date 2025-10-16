<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Core\Bootstrap;
use App\Models\{Pedido, PedidoItem, Produto};
use Illuminate\Database\Capsule\Manager as DB;

Bootstrap::init(dirname(__DIR__));

$ttl = (int)($_ENV['RESERVA_TTL_MINUTES'] ?? 180);
$limite = date('Y-m-d H:i:s', time() - ($ttl * 60));

$alvos = Pedido::where('status', 'reserved')
    ->where('created_at', '<', $limite)
    ->limit(500)->get();

foreach ($alvos as $pedido) {
    DB::transaction(function () use ($pedido) {
        $itens = PedidoItem::where('pedido_id', $pedido->id)->get();
        foreach ($itens as $it) {
            $prod = Produto::where('loja_id', $pedido->loja_id)->lockForUpdate()->find($it->produto_id);
            if ($prod) {
                $prod->quantidade += (int)$it->quantidade;
                $prod->save();
            }
        }
        $pedido->status = 'expired';
        $pedido->save();
    });
}

echo "Expirados: " . $alvos->count() . PHP_EOL;
