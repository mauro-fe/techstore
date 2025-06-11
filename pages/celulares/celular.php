<?= BASE_URL ?>

<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/celulares.css">
<script src="https://cdn.jsdelivr.net/npm/fslightbox/index.js"></script>

<?php
require_once __DIR__ . '/../../Pages.php';

?>
<main class="py-5">
    <div class="container">
        <div class="row g-5 cards-container mt-1">
            <h2 class="text-center fw-bold section-title"><?= ucfirst($marca) ?></h2>

            <?php foreach ($produtos as $p): ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center" data-aos="fade-up"
                    data-aos-delay="150">
                    <div class="card-flip">
                        <div class="card-inner">
                            <!-- Frente -->
                            <div class="card-front card border-0 shadow-sm">
                                <h5 class="card-title fw-semibold text-center"><?= $p->nome ?></h5>
                                <?php
                                $imagens = getImagesForModel($p->pastaImagens);
                                $imagemPrincipal = $imagens[0] ?? $p->imagem;
                                ?>

                                <img src="<?= $imagemPrincipal ?>" class="card-img-top" alt="<?= $p->nome ?>">
                                <div class="card-body d-flex align-items-center justify-content-around">
                                    <button class="btn btn-enhanced btn-ver-detalhes">
                                        <i class="fas fa-info-circle "></i> Ver Detalhes
                                    </button>
                                    <button class="btn btn-enhanced btn-comprar" data-nome="<?= $p->nome ?>"
                                        data-id="<?= $p->id ?>" data-cor="<?= $p->especificacoes['cor'] ?? '' ?>"
                                        data-armazenamento="<?= $p->especificacoes['armazenamento'] ?? '' ?>">
                                        <i class="fas fa-shopping-cart"></i> Comprar
                                    </button>
                                </div>
                            </div>

                            <!-- Verso -->
                            <div class="card-back card border-0 shadow-sm">
                                <div
                                    class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                    <h5 class="fw-semibold mb-4"><?= $p->nome ?></h5>

                                    <div class="w-100 spec-scroll">
                                        <div class="spec-item">
                                            <div class="spec-icon">
                                                <i class="fas fa-microchip"></i>
                                            </div>
                                            <div class="text-start">
                                                <strong>Tela</strong><br>
                                                <small><?= $p->especificacoes['tela'] ?? 'N/A' ?></small>
                                            </div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-icon">
                                                <i class="fas fa-camera"></i>
                                            </div>
                                            <div class="text-start">
                                                <strong>Câmera</strong><br>
                                                <small><?= $p->especificacoes['camera'] ?? 'N/A' ?></small>
                                            </div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-icon">
                                                <i class="fas fa-battery-full"></i>
                                            </div>
                                            <div class="text-start">
                                                <strong>Bateria</strong><br>
                                                <small><?= $p->especificacoes['Bateria'] ?? 'N/A' ?></small>
                                            </div>
                                        </div>
                                        <div class="spec-item">
                                            <div class="spec-icon">
                                                <i class="fas fa-hdd"></i>
                                            </div>
                                            <div class="text-start">
                                                <strong>Armazenamento</strong><br>
                                                <small><?= $p->especificacoes['armazenamento'] ?? 'N/A' ?></small>
                                            </div>
                                        </div>
                                        <div class="spec-item">
                                            <div class="spec-icon">
                                                <i class="fas fa-palette"></i>
                                            </div>
                                            <div class="text-start">
                                                <strong>Cores</strong><br>
                                                <small><?= $p->especificacoes['cor'] ?? 'N/A' ?></small>
                                            </div>
                                        </div>
                                        <div class="spec-item">
                                            <div class="spec-icon">
                                                <i class="fas fa-gear"></i>
                                            </div>
                                            <div class="text-start">
                                                <strong>Sistema operacional</strong><br>
                                                <small><?= $p->especificacoes['sistema-operacional'] ?? 'N/A' ?></small>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-enhanced btn-voltar">
                                        <i class="fas fa-arrow-left me-2"></i>
                                    </button>

                                </div>
                                <div class="card-body d-flex align-items-center">
                                    <button class="btn btn-enhanced btn-ver-detalhes"
                                        onclick="abrirGaleria('<?= $p->pastaImagens ?>', <?= $p->id ?>)">
                                        <i class="fas fa-images"></i> Ver imagens
                                    </button>

                                    <button class="btn btn-enhanced btn-comprar" data-nome="<?= $p->nome ?>"
                                        data-id="<?= $p->id ?>" data-cor="<?= $p->especificacoes['cor'] ?? '' ?>"
                                        data-armazenamento="<?= $p->especificacoes['armazenamento'] ?? '' ?>">
                                        <i class="fas fa-shopping-cart"></i> Comprar
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <!-- Modal comprar -->
    <div class="modal fade" id="modalComprar" tabindex="-1" aria-labelledby="modalComprarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalComprarLabel">
                        <i class="fas fa-shopping-cart me-2"></i>
                        Comprar <span id="nomeProduto"></span>
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <form id="formCompra">
                        <input type="hidden" id="produtoId">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="fas fa-palette me-2"></i>Cor
                            </label>
                            <select class="form-select" id="corProduto" required>
                                <option value="">Selecione uma cor</option>
                            </select>


                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="fas fa-hdd me-2"></i>Armazenamento
                            </label>
                            <select class="form-select" id="armazenamentoProduto" required>
                                <option value="">Selecione o armazenamento</option>
                            </select>

                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="fas fa-sort-numeric-up me-2"></i>Quantidade
                            </label>
                            <input type="number" id="quantidadeProduto" class="form-control" value="1" min="1" max="10">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#" id="linkWhatsapp" target="_blank" class="btn w-100">
                        <i class="fab fa-whatsapp me-2"></i>
                        Finalizar Compra no WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="<?= BASE_URL ?>/assets/js/celulares.js"></script>

<!-- Script dinâmico por produto -->

<script>
    const BASE_URL = "<?= BASE_URL ?>";


    function abrirGaleria(pasta, id) {
        const url = `${BASE_URL}getImagens.php?pasta=${encodeURIComponent(pasta)}`;
        console.log(url);

        fetch(url)
            .then(res => res.json())
            .then(imagens => {
                if (!Array.isArray(imagens) || imagens.length === 0) {
                    alert('Nenhuma imagem encontrada.');
                    return;
                }

                // Remove links antigos
                document.querySelectorAll(`[data-fslightbox="galeria-${id}"]`).forEach(e => e.remove());

                // Adiciona links invisíveis para fslightbox
                imagens.forEach((src, i) => {
                    const a = document.createElement('a');
                    a.href = src;
                    a.setAttribute('data-fslightbox', `galeria-${id}`);
                    if (i === 0) a.id = `primeira-imagem-${id}`;
                    a.style.display = 'none';
                    document.body.appendChild(a);
                });

                // Dispara clique na primeira imagem
                document.getElementById(`primeira-imagem-${id}`)?.click();
            })
            .catch(err => console.error('Erro ao carregar imagens:', err));
    }
</script>