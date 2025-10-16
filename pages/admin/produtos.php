<main class="container">
    <h2>Produtos</h2>

    <form method="POST" action="">
        <input type="hidden" name="_route" value="store">
        <div style="display:grid;grid-template-columns:repeat(6,1fr);gap:8px;">
            <input name="sku" placeholder="SKU">
            <input name="nome" placeholder="Nome" required>
            <input name="preco" placeholder="Preço" type="number" step="0.01" required>
            <input name="quantidade" placeholder="Qtd" type="number" min="0" value="0">
            <input name="shopee_url" placeholder="Link Shopee">
            <label style="display:flex;align-items:center;gap:6px;">
                <input type="checkbox" name="aceita_retirada" checked> Retirada
            </label>
            <label style="display:flex;align-items:center;gap:6px;">
                <input type="checkbox" name="ativo" checked> Ativo
            </label>
            <textarea name="descricao" placeholder="Descrição" style="grid-column:1/-1"></textarea>
            <button class="btn"
                style="grid-column:1/-1;padding:10px;border:0;border-radius:10px;background:#2ecc71;">Cadastrar</button>
        </div>
    </form>

    <hr>

    <table width="100%" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>SKU</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Qtd</th>
                <th>Retirada</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $p): ?>
                <tr>
                    <td><?= $p->id ?></td>
                    <td><?= htmlspecialchars($p->sku) ?></td>
                    <td><?= htmlspecialchars($p->nome) ?></td>
                    <td>R$ <?= number_format($p->preco, 2, ',', '.') ?></td>
                    <td><?= $p->quantidade ?></td>
                    <td><?= $p->aceita_retirada ? 'Sim' : 'Não' ?></td>
                    <td><?= $p->ativo ? 'Sim' : 'Não' ?></td>
                    <td>
                        <form method="POST" action="<?= base_url($_GET['route'] ?? '') ?>" style="display:inline"
                            onsubmit="return confirm('Excluir?')">
                            <input type="hidden" name="_route" value="del<?= $p->id ?>">
                            <button
                                formaction="<?= base_url($GLOBALS['__route_prefix'] . "/admin/produtos/{$p->id}/del") ?>"
                                class="btn"
                                style="background:#e74c3c;border:0;color:#fff;padding:6px 10px;border-radius:6px;">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>