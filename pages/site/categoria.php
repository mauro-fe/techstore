<h2 class="text-center fw-bold section-title"><?= htmlspecialchars($categoria->nome) ?></h2>

<div class="row g-4 mt-4">
    <?php foreach ($produtos as $p): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?= BASE_URL ?>/uploads/<?= $p->imagens[0] ?? 'sem-imagem.jpg' ?>" class="card-img-top"
                    alt="<?= $p->nome ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($p->nome) ?></h5>
                    <p class="card-text text-muted">R$ <?= number_format($p->preco, 2, ',', '.') ?></p>
                    <a href="<?= BASE_URL ?>/produto/<?= $p->slug ?>" class="btn btn-primary w-100">
                        <i class="fas fa-info-circle me-1"></i> Detalhes
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>