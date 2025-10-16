<main class="container">
    <h2>Pedidos (Reservas)</h2>

    <form method="GET" style="margin:10px 0">
        <label>Status:</label>
        <select name="status" onchange="this.form.submit()">
            <option value="">Todos</option>
            <?php foreach (['reserved', 'confirmed', 'paid', 'completed', 'cancelled', 'expired'] as $s): ?>
            <option value="<?= $s ?>" <?= ($status === $s ? 'selected' : '') ?>><?= $s ?></option>
            <?php endforeach; ?>
        </select>
    </form>

    <table width="100%" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Cliente</th>
                <th>Telefone</th>
                <th>Status</th>
                <th>Total</th>
                <th>Quando</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos as $p): ?>
            <tr>
                <td><?= $p->id ?></td>
                <td><?= $p->codigo ?></td>
                <td><?= htmlspecialchars($p->nome_cliente) ?></td>
                <td><?= htmlspecialchars($p->telefone) ?></td>
                <td><?= $p->status ?></td>
                <td>R$ <?= number_format($p->total, 2, ',', '.') ?></td>
                <td><?= date('d/m H:i', strtotime($p->created_at)) ?></td>
                <td><a href="<?= base_url("{$GLOBALS['__route_prefix']}/admin/pedidos/{$p->id}") ?>" class="btn">Ver</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>