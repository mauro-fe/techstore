<main class="container" style="padding:18px 16px;color:#e8f3f0">
    <h2 style="margin:0 0 14px 0">Dashboard</h2>

    <!-- Cards -->
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:12px;">
        <div style="background:#0F1418;border:1px solid #1f2a2a;border-radius:12px;padding:14px;">
            <div style="opacity:.7;font-size:12px">Produtos cadastrados</div>
            <div style="font-size:24px;font-weight:700;"><?= $totalProdutos ?></div>
        </div>

        <div style="background:#0F1418;border:1px solid #1f2a2a;border-radius:12px;padding:14px;">
            <div style="opacity:.7;font-size:12px">Estoque total</div>
            <div style="font-size:24px;font-weight:700;"><?= $estoqueTotal ?></div>
        </div>

        <div style="background:#0F1418;border:1px solid #1f2a2a;border-radius:12px;padding:14px;">
            <div style="opacity:.7;font-size:12px">Pedidos hoje</div>
            <div style="font-size:24px;font-weight:700;"><?= $pedidosHoje ?></div>
        </div>

        <div style="background:#0F1418;border:1px solid #1f2a2a;border-radius:12px;padding:14px;">
            <div style="opacity:.7;font-size:12px">Faturamento hoje</div>
            <div style="font-size:24px;font-weight:700;">R$ <?= number_format($faturamentoHoje, 2, ',', '.') ?></div>
        </div>
    </div>

    <!-- Status dos pedidos -->
    <div style="margin-top:18px;background:#0F1418;border:1px solid #1f2a2a;border-radius:12px;padding:14px;">
        <h3 style="margin:0 0 10px 0;font-size:16px;">Pedidos por status</h3>
        <div style="display:flex;gap:10px;flex-wrap:wrap">
            <?php
            $labels = ['reserved' => 'Reservados', 'confirmed' => 'Confirmados', 'paid' => 'Pagos', 'completed' => 'Concluídos', 'cancelled' => 'Cancelados', 'expired' => 'Expirados'];
            foreach ($labels as $k => $label):
                $v = $statusCounts[$k] ?? 0;
            ?>
            <div
                style="background:#0b1113;border:1px solid #1f2a2a;border-radius:10px;padding:10px 12px;min-width:140px;">
                <div style="opacity:.7;font-size:12px"><?= $label ?></div>
                <div style="font-size:18px;font-weight:700;"><?= $v ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Últimos pedidos + Baixo estoque -->
    <div style="display:grid;grid-template-columns:1.3fr .7fr;gap:12px;margin-top:18px;">
        <div style="background:#0F1418;border:1px solid #1f2a2a;border-radius:12px;padding:14px;">
            <h3 style="margin:0 0 10px 0;font-size:16px;">Últimos pedidos</h3>
            <table width="100%" cellpadding="8" style="font-size:14px;border-collapse:collapse">
                <thead style="opacity:.7">
                    <tr>
                        <th align="left">Código</th>
                        <th align="left">Cliente</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ultimosPedidos as $p): ?>
                    <tr style="border-top:1px solid #1f2a2a">
                        <td><a href="<?= base_url('admin/pedidos/' . $p->id) ?>"
                                style="color:#9fead3"><?= $p->codigo ?></a></td>
                        <td><?= htmlspecialchars($p->nome_cliente) ?></td>
                        <td><?= $p->status ?></td>
                        <td>R$ <?= number_format($p->total, 2, ',', '.') ?></td>
                        <td><?= date('d/m H:i', strtotime($p->created_at)) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div style="background:#0F1418;border:1px solid #1f2a2a;border-radius:12px;padding:14px;">
            <h3 style="margin:0 0 10px 0;font-size:16px;">Alerta de baixo estoque (≤3)</h3>
            <?php if (count($baixoEstoque) === 0): ?>
            <div style="opacity:.8">Tudo certo por aqui 😎</div>
            <?php else: ?>
            <ul style="margin:0;padding-left:16px;">
                <?php foreach ($baixoEstoque as $prod): ?>
                <li>
                    <?= htmlspecialchars($prod->nome) ?> — <b><?= $prod->quantidade ?></b> un.
                    <small style="opacity:.6">SKU: <?= htmlspecialchars($prod->sku) ?></small>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</main>