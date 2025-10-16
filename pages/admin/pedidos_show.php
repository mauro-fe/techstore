<main class="container">
    <h2>Pedido #<?= $pedido->id ?> • <?= $pedido->codigo ?></h2>
    <p><b>Status:</b> <?= $pedido->status ?></p>
    <p><b>Cliente:</b> <?= htmlspecialchars($pedido->nome_cliente) ?> • <?= htmlspecialchars($pedido->telefone) ?></p>
    <p><b>Total:</b> R$ <?= number_format($pedido->total, 2, ',', '.') ?></p>

    <h3>Itens</h3>
    <ul>
        <?php foreach ($itens as $it): ?>
            <li><?= $it->quantidade ?>x <?= htmlspecialchars($it->produto->nome ?? 'Produto') ?>
                — R$ <?= number_format($it->preco_unit, 2, ',', '.') ?></li>
        <?php endforeach; ?>
    </ul>

    <div style="display:flex;gap:8px;margin-top:14px">
        <?php if ($pedido->status === 'reserved'): ?>
            <form method="POST"
                action="<?= base_url("{$GLOBALS['__route_prefix']}/admin/pedidos/{$pedido->id}/confirm") ?>">
                <button class="btn"
                    style="background:#2980b9;color:#fff;border:0;padding:8px 12px;border-radius:8px">Confirmar</button>
            </form>
        <?php endif; ?>

        <?php if (in_array($pedido->status, ['reserved', 'confirmed'])): ?>
            <form method="POST" action="<?= base_url("{$GLOBALS['__route_prefix']}/admin/pedidos/{$pedido->id}/paid") ?>">
                <button class="btn" style="background:#27ae60;color:#fff;border:0;padding:8px 12px;border-radius:8px">Marcar
                    como Pago</button>
            </form>
        <?php endif; ?>

        <?php if (!in_array($pedido->status, ['cancelled', 'expired', 'completed'])): ?>
            <form method="POST" action="<?= base_url("{$GLOBALS['__route_prefix']}/admin/pedidos/{$pedido->id}/cancel") ?>"
                onsubmit="return confirm('Cancelar e devolver estoque?')">
                <button class="btn"
                    style="background:#e74c3c;color:#fff;border:0;padding:8px 12px;border-radius:8px">Cancelar</button>
            </form>
        <?php endif; ?>
    </div>

    <p style="margin-top:16px"><a href="<?= base_url("{$GLOBALS['__route_prefix']}/admin/pedidos") ?>">← Voltar</a></p>
</main>