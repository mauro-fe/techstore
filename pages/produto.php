<main class="container">
    <h1><?= htmlspecialchars($produto->nome) ?></h1>
    <p>R$ <?= number_format($produto->preco, 2, ',', '.') ?></p>
    <button class="btn-comprar" data-id="<?= $produto->id ?>" data-nome="<?= htmlspecialchars($produto->nome) ?>"
        data-shopee="<?= htmlspecialchars($produto->shopee_url ?? '') ?>"
        data-aceita-retirada="<?= (int)$produto->aceita_retirada ?>">
        Comprar
    </button>
</main>

<?php require __DIR__ . '/home.php'; /* reaproveita modal/JS */ ?>