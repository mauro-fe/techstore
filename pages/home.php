<main class="container">
    <h1><?= htmlspecialchars($loja->nome) ?></h1>
    <div class="grid" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:16px;">
        <?php foreach ($produtos as $p): ?>
            <div class="card" style="background:#111;padding:12px;border-radius:12px;">
                <h3 style="margin:0 0 6px 0;"><?= htmlspecialchars($p->nome) ?></h3>
                <p style="opacity:.8;margin:0 0 8px 0;">R$ <?= number_format($p->preco, 2, ',', '.') ?></p>
                <button data-id="<?= $p->id ?>" data-nome="<?= htmlspecialchars($p->nome) ?>"
                    data-shopee="<?= htmlspecialchars($p->shopee_url ?? '') ?>"
                    data-aceita-retirada="<?= (int)$p->aceita_retirada ?>" class="btn-comprar"
                    style="width:100%;padding:10px;border-radius:10px;border:0;background:#e67e22;color:#fff;">
                    Comprar
                </button>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<!-- Modal compra -->
<div id="modalCompra"
    style="display:none;position:fixed;inset:0;background:#0009;align-items:center;justify-content:center;">
    <div style="background:#1a1a1a;padding:20px;border-radius:14px;max-width:420px;width:92%;">
        <h3 id="mcTitulo" style="margin-top:0">Como você quer comprar?</h3>
        <div id="mcRetiradaBox" style="margin:8px 0;">
            <form id="formRetirar" method="POST">
                <input type="hidden" name="produto_id" id="mcProdutoId">
                <label>Nome</label>
                <input name="nome" required style="width:100%;margin:6px 0 10px 0;">
                <label>WhatsApp</label>
                <input name="telefone" required style="width:100%;margin:6px 0 10px 0;">
                <label>Quantidade</label>
                <input name="quantidade" type="number" value="1" min="1" style="width:100%;margin:6px 0 10px 0;">
                <button type="submit"
                    style="width:100%;padding:10px;border:0;border-radius:10px;background:#2ecc71;color:#000">Reservar e
                    retirar</button>
            </form>
        </div>
        <a id="mcShopee" href="#" target="_blank" rel="noopener"
            style="display:block;text-align:center;margin-top:8px;padding:10px;border-radius:10px;border:1px solid #444;text-decoration:none;color:#fff;">
            Comprar na Shopee
        </a>
        <button id="mcFechar"
            style="width:100%;margin-top:8px;padding:8px;background:#333;border:0;border-radius:10px;color:#ddd;">Fechar</button>
    </div>
</div>

<script>
    const base = '<?= rtrim(base_url("{$loja->slug}"), "/") ?>';
    const modal = document.getElementById('modalCompra');
    const mcShopee = document.getElementById('mcShopee');
    const mcTitulo = document.getElementById('mcTitulo');
    const mcProdutoId = document.getElementById('mcProdutoId');
    const mcRetiradaBox = document.getElementById('mcRetiradaBox');

    document.querySelectorAll('.btn-comprar').forEach(btn => {
        btn.addEventListener('click', () => {
            const nome = btn.dataset.nome;
            const id = btn.dataset.id;
            const shopee = btn.dataset.shopee;
            const aceita = btn.dataset.aceitaRetirada === '1';
            mcTitulo.textContent = `Comprar: ${nome}`;
            mcProdutoId.value = id;
            if (shopee) {
                mcShopee.href = shopee;
                mcShopee.style.display = 'block';
            } else mcShopee.style.display = 'none';
            mcRetiradaBox.style.display = aceita ? 'block' : 'none';
            modal.style.display = 'flex';
        });
    });

    document.getElementById('mcFechar').onclick = () => modal.style.display = 'none';

    document.getElementById('formRetirar').addEventListener('submit', async (e) => {
        e.preventDefault();
        const fd = new FormData(e.target);
        const r = await fetch(`${base}/pedido/retirar`, {
            method: 'POST',
            body: fd
        });
        const txt = await r.text();
        alert(txt);
        modal.style.display = 'none';
        e.target.reset();
    });
</script>