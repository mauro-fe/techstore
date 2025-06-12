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
                                    <?php
                                    // Prepara as imagens para o JavaScript
                                    $todasImagens = getImagesForModel($p->pastaImagens);
                                    $imagensJson = htmlspecialchars(json_encode($todasImagens), ENT_QUOTES, 'UTF-8');
                                    ?>
                                    <!-- CORREÇÃO: Usar a função correta -->
                                    <button class="btn btn-enhanced btn-ver-detalhes"
                                        onclick='abrirGaleriaDirecta(<?= $imagensJson ?>)'>
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

<script>
    // Função para carregar imagens diretamente (RECOMENDADO)
    function abrirGaleriaDirecta(imagens) {
        if (imagens && imagens.length > 0) {
            const lightbox = new FsLightbox();
            lightbox.props.sources = imagens;
            lightbox.props.type = 'image';

            // Opções adicionais do fslightbox
            lightbox.props.showThumbsOnMount = true;
            lightbox.props.exitFullscreenOnClose = true;
            lightbox.props.loadOnlyCurrentSource = false;

            lightbox.open();
        } else {
            alert('Nenhuma imagem encontrada para este produto.');
        }
    }

    // Função alternativa para carregar via AJAX (se preferir)
    function abrirGaleriaAjax(pastaImagens, produtoId) {
        // Mostra um loader enquanto carrega
        const loader = document.createElement('div');
        loader.className = 'image-loading';
        loader.style.position = 'fixed';
        loader.style.top = '50%';
        loader.style.left = '50%';
        loader.style.transform = 'translate(-50%, -50%)';
        loader.style.zIndex = '9999';
        document.body.appendChild(loader);

        fetch(`<?= BASE_URL ?>/api/get-images.php?pasta=${pastaImagens}&id=${produtoId}`)
            .then(response => response.json())
            .then(data => {
                document.body.removeChild(loader);

                if (data.success && data.images.length > 0) {
                    const imageUrls = data.images.map(img => img.url);

                    const lightbox = new FsLightbox();
                    lightbox.props.sources = imageUrls;
                    lightbox.props.type = 'image';
                    lightbox.props.showThumbsOnMount = true;
                    lightbox.open();
                } else {
                    alert(data.message || 'Nenhuma imagem encontrada para este produto.');
                }
            })
            .catch(error => {
                document.body.removeChild(loader);
                console.error('Erro ao carregar imagens:', error);
                alert('Erro ao carregar as imagens. Tente novamente.');
            });
    }

    // Função para criar galeria com links HTML (melhor para SEO)
    function criarGaleriaHTML(containerId, imagens) {
        const container = document.getElementById(containerId);
        if (!container) return;

        container.innerHTML = '';

        imagens.forEach((img, index) => {
            const link = document.createElement('a');
            link.href = img;
            link.setAttribute('data-fslightbox', 'gallery-' + containerId);

            if (index === 0) {
                link.innerHTML = '<i class="fas fa-images"></i> Ver galeria';
                link.className = 'btn btn-enhanced btn-ver-detalhes';
            } else {
                link.style.display = 'none';
            }

            container.appendChild(link);
        });

        // Atualiza o fslightbox
        if (typeof refreshFsLightbox === 'function') {
            refreshFsLightbox();
        }
    }
</script>