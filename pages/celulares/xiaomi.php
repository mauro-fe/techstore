<link rel="stylesheet" href="./assets/css/celulares.css">


<main class="py-5">
    <div class="container">
        <div class="row g-5 cards-container mt-1">
            <h2 class="text-center fw-bold section-title">Xiaomi</h2>

            <?php foreach ($xiaomis as $xiaomi): ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center" data-aos="fade-up"
                data-aos-delay="150">
                <div class="card-flip">
                    <div class="card-inner">
                        <!-- Frente -->
                        <div class="card-front card border-0 shadow-sm">
                            <h5 class="card-title fw-semibold text-center"><?= $xiaomi->nome ?></h5>
                            <?php
                                $imagens = getImagesForModel($xiaomi->pastaImagens);
                                $imagemPrincipal = $imagens[0] ?? $xiaomi->imagem;
                                ?>

                            <img src="<?= $imagemPrincipal ?>" class="card-img-top" alt="<?= $xiaomi->nome ?>">
                            <div class="card-body d-flex align-items-center justify-content-around">
                                <button class="btn btn-enhanced btn-ver-detalhes">
                                    <i class="fas fa-info-circle "></i> Ver Detalhes
                                </button>
                                <button class="btn btn-enhanced btn-comprar" data-nome="<?= $xiaomi->nome ?>"
                                    data-id="<?= $xiaomi->id ?>" data-cor="<?= $xiaomi->especificacoes['cor'] ?? '' ?>"
                                    data-armazenamento="<?= $xiaomi->especificacoes['armazenamento'] ?? '' ?>">
                                    <i class="fas fa-shopping-cart"></i> Comprar
                                </button>
                            </div>
                        </div>

                        <!-- Verso -->
                        <div class="card-back card border-0 shadow-sm">
                            <div
                                class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                <h5 class="fw-semibold mb-4"><?= $xiaomi->nome ?></h5>

                                <div class="w-100 spec-scroll">
                                    <div class="spec-item">
                                        <div class="spec-icon">
                                            <i class="fas fa-microchip"></i>
                                        </div>
                                        <div class="text-start">
                                            <strong>Tela</strong><br>
                                            <small><?= $xiaomi->especificacoes['tela'] ?? 'N/A' ?></small>
                                        </div>
                                    </div>

                                    <div class="spec-item">
                                        <div class="spec-icon">
                                            <i class="fas fa-camera"></i>
                                        </div>
                                        <div class="text-start">
                                            <strong>Câmera</strong><br>
                                            <small><?= $xiaomi->especificacoes['camera'] ?? 'N/A' ?></small>
                                        </div>
                                    </div>

                                    <div class="spec-item">
                                        <div class="spec-icon">
                                            <i class="fas fa-battery-full"></i>
                                        </div>
                                        <div class="text-start">
                                            <strong>Bateria</strong><br>
                                            <small><?= $xiaomi->especificacoes['Bateria'] ?? 'N/A' ?></small>
                                        </div>
                                    </div>
                                    <div class="spec-item">
                                        <div class="spec-icon">
                                            <i class="fas fa-hdd"></i>
                                        </div>
                                        <div class="text-start">
                                            <strong>Armazenamento</strong><br>
                                            <small><?= $xiaomi->especificacoes['armazenamento'] ?? 'N/A' ?></small>
                                        </div>
                                    </div>
                                    <div class="spec-item">
                                        <div class="spec-icon">
                                            <i class="fas fa-palette"></i>
                                        </div>
                                        <div class="text-start">
                                            <strong>Cores</strong><br>
                                            <small><?= $xiaomi->especificacoes['cor'] ?? 'N/A' ?></small>
                                        </div>
                                    </div>
                                    <div class="spec-item">
                                        <div class="spec-icon">
                                            <i class="fas fa-gear"></i>
                                        </div>
                                        <div class="text-start">
                                            <strong>Sistema operacional</strong><br>
                                            <small><?= $xiaomi->especificacoes['sistema-operacional'] ?? 'N/A' ?></small>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-enhanced btn-voltar">
                                    <i class="fas fa-arrow-left me-2"></i>
                                </button>

                            </div>
                            <div class="card-body d-flex align-items-center">
                                <button class="btn btn-enhanced btn-ver-detalhes" data-bs-toggle="modal"
                                    data-bs-target="#modalDetalhes" data-nome="<?= $xiaomi->nome ?>"
                                    data-id="<?= $xiaomi->id ?>" data-pasta="<?= $xiaomi->pastaImagens ?>"
                                    data-processador="<?= $xiaomi->especificacoes['Processador'] ?? '' ?>"
                                    data-camera="<?= $xiaomi->especificacoes['camera'] ?? '' ?>"
                                    data-bateria="<?= $xiaomi->especificacoes['Bateria'] ?? '' ?>">
                                    <i class="fas fa-info-circle"></i> Ver mais detalhes
                                </button>

                                <button class="btn btn-enhanced btn-comprar" data-nome="<?= $xiaomi->nome ?>"
                                    data-id="<?= $xiaomi->id ?>" data-cor="<?= $xiaomi->especificacoes['cor'] ?? '' ?>"
                                    data-armazenamento="<?= $xiaomi->especificacoes['armazenamento'] ?? '' ?>">
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



    <!-- Modal Bonito com Detalhes do Produto -->
    <div class="modal fade" id="modalDetalhes" tabindex="-1" aria-labelledby="modalDetalhesLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDetalhesLabel">Detalhes do Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Carousel de imagens -->

                            <div id="carouselDetalhes" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" id="carouselDetalhesInner">
                                </div>

                                <?php if (count($imagens) > 1): ?>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselDetalhes"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Anterior</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselDetalhes"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Próximo</span>
                                </button>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 id="detalheTitulo"></h4>
                            <ul class="list-group list-group-flush mt-3" id="listaEspecificacoes">
                                <!-- Especificações adicionadas dinamicamente -->
                            </ul>

                            <button class="btn btn-success w-100 mt-4" id="btnIrParaCompra">
                                <i class="fas fa-shopping-cart me-2"></i>Comprar Agora
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="./assets/js/celulares.js"></script>