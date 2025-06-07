<link rel="stylesheet" href="./assets/css/celulares.css">


<main class="py-5">
    <div class="container">
        <div class="row g-5 cards-container mt-1">
            <h2 class="text-center fw-bold section-title">Realme</h2>

            <?php foreach ($realmes as $realme): ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center" data-aos="fade-up"
                    data-aos-delay="150">
                    <div class="card-flip">
                        <div class="card-inner">
                            <!-- Frente -->
                            <div class="card-front card border-0 shadow-sm">
                                <h5 class="card-title fw-semibold text-center"><?= $realme->nome ?></h5>
                                <?php
                                $imagens = getImagesForModel($realme->pastaImagens);
                                $imagemPrincipal = $imagens[0] ?? $realme->imagem;
                                ?>

                                <img src="<?= $imagemPrincipal ?>" class="card-img-top" alt="<?= $realme->nome ?>">
                                <div class="card-body d-flex align-items-center">
                                    <button class="btn btn-enhanced btn-ver-detalhes">
                                        <i class="fas fa-info-circle "></i> Ver Detalhes
                                    </button>
                                    <button class="btn btn-enhanced btn-comprar" data-nome="<?= $realme->nome ?>"
                                        data-id="<?= $realme->id ?>">
                                        <i class="fas fa-shopping-cart"></i> Comprar
                                    </button>
                                </div>
                            </div>

                            <!-- Verso -->
                            <div class="card-back card border-0 shadow-sm">
                                <div
                                    class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                    <h5 class="fw-semibold mb-4"><?= $realme->nome ?></h5>

                                    <div class="w-100 spec-scroll">
                                        <div class="spec-item">
                                            <div class="spec-icon">
                                                <i class="fas fa-microchip"></i>
                                            </div>
                                            <div class="text-start">
                                                <strong>Processador</strong><br>
                                                <small><?= $realme->especificacoes['Processador'] ?? 'N/A' ?></small>
                                            </div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-icon">
                                                <i class="fas fa-camera"></i>
                                            </div>
                                            <div class="text-start">
                                                <strong>Câmera</strong><br>
                                                <small><?= $realme->especificacoes['camera'] ?? 'N/A' ?></small>
                                            </div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-icon">
                                                <i class="fas fa-battery-full"></i>
                                            </div>
                                            <div class="text-start">
                                                <strong>Bateria</strong><br>
                                                <small><?= $realme->especificacoes['Bateria'] ?? 'N/A' ?></small>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-enhanced btn-voltar mt-4">
                                        <i class="fas fa-arrow-left me-2"></i>
                                    </button>

                                </div>
                                <div class="card-body d-flex align-items-center">
                                    <button class="btn btn-enhanced btn-ver-detalhes p-2">
                                        <i class="fas fa-info-circle"></i> Ver mais detalhes
                                    </button>
                                    <button class="btn btn-enhanced btn-comprar p-2" data-nome="<?= $realme->nome ?>"
                                        data-id="<?= $realme->id ?>">
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

    <!-- Modal Melhorado -->
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
                                <option value="Preto">🖤 Preto</option>
                                <option value="Branco">🤍 Branco</option>
                                <option value="Azul">💙 Azul</option>
                                <option value="Dourado">💛 Dourado</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="fas fa-hdd me-2"></i>Armazenamento
                            </label>
                            <select class="form-select" id="armazenamentoProduto" required>
                                <option value="">Selecione o armazenamento</option>
                                <option value="128GB">📱 128GB</option>
                                <option value="256GB">📱 256GB</option>
                                <option value="512GB">📱 512GB</option>
                                <option value="1TB">📱 1TB</option>
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
<script src="./assets/js/celulares.js"></script>