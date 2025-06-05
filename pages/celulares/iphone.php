<style>
/* Variáveis e Base */
:root {
    --primary-color: #00abff;
    --dark-color: #212529;
    --light-color: #f8f9fa;
    --border-radius: 16px;
    --transition-fast: 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
    --transition-medium: 0.6s cubic-bezier(0.4, 0.0, 0.2, 1);
    --shadow-subtle: 0 4px 6px rgba(0, 0, 0, 0.07);
    --shadow-medium: 0 10px 25px rgba(0, 0, 0, 0.15);
    --shadow-strong: 0 20px 40px rgba(0, 0, 0, 0.2);
}

/* Título da Seção */
.section-title {
    position: relative;
    display: inline-block;
    /* background: linear-gradient(135deg, var(--primary-color) 0%, var(--light-color) 100%); */
    background-color: var(--primary-color);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: fadeInUp 1s ease-out;
}


.section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--light-color) 100%);
    border-radius: 2px;
    animation: expandWidth 1.2s ease-out 0.5s both;
}

/* Container de Cards */
.cards-container {
    animation: fadeIn 1s ease-out 0.3s both;
}

/* Card Flip Melhorado */
.card-flip {
    height: 100%;
    position: relative;
    perspective: 1000px;
    opacity: 0;
    transform: translateY(50px);
    animation: slideInUp 0.8s ease-out forwards;
}

.card-flip:nth-child(1) {
    animation-delay: 0.1s;
}

.card-flip:nth-child(2) {
    animation-delay: 0.2s;
}

.card-flip:nth-child(3) {
    animation-delay: 0.3s;
}

.card-flip:nth-child(4) {
    animation-delay: 0.4s;
}

.card-flip:nth-child(5) {
    animation-delay: 0.5s;
}

.card-flip:nth-child(6) {
    animation-delay: 0.6s;
}

.card-flip:nth-child(7) {
    animation-delay: 0.7s;
}

.card-flip:nth-child(8) {
    animation-delay: 0.8s;
}

.card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.8s cubic-bezier(0.4, 0.0, 0.2, 1);
    transform-style: preserve-3d;
    will-change: transform;
}

.card-inner.is-flipped {
    transform: rotateY(180deg);
}

.card-front,
.card-back {
    width: 100%;
    min-height: 420px;
    /* ou igual à .card */
    backface-visibility: hidden;
    border-radius: var(--border-radius);
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;
}

.card-front {
    background: white;
    transform: rotateY(0deg);
    box-shadow: var(--shadow-subtle);
    transition: all var(--transition-medium);
}

.card-back {
    position: absolute !important;
    background: linear-gradient(135deg, var(--dark-color) 0%, #495057 100%);
    color: white;
    transform: rotateY(180deg);
    box-shadow: var(--shadow-medium);
    box-sizing: border-box;
}

.card {
    max-width: 100%;
    width: 280px;
    min-height: 420px;
    margin: auto;
    border-radius: var(--border-radius);
    border: none !important;
    position: relative;
    overflow: hidden;
}

.card-body {
    width: 100%;
}

/* Efeito Hover na Card */
.card-flip:hover .card-front {
    transform: translateY(-10px) scale(1.02);
    box-shadow: var(--shadow-strong);
}

.card-flip:hover .card-front::before {
    opacity: 0.1;
}

.card-front::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
    opacity: 0;
    transition: opacity var(--transition-fast);
    pointer-events: none;
}

/* Título do Produto */
.card-title {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: var(--dark-color);
    position: relative;
    padding: 0 15px;
    margin-top: 15px;
}

/* Imagem do Produto */
.card-img-top {
    object-fit: contain;
    height: 260px;
    padding: 20px;
    transition: transform var(--transition-medium);
    background: linear-gradient(45deg, #f8f9fa, #e9ecef);
}

.card-flip:hover .card-img-top {
    transform: scale(1.1) rotate(5deg);
}

/* Botões Melhorados */
.btn-enhanced {
    border-radius: 12px;
    font-weight: 600;
    transition: all var(--transition-fast);
    position: relative;
    overflow: hidden;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 0.65rem;
}

.btn-enhanced::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.btn-enhanced:hover::before {
    left: 100%;
}

.btn-ver-detalhes {
    background: var(--dark-color);
    border: none;
    color: white;
}

.btn-ver-detalhes:hover {
    background: #495057;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(33, 37, 41, 0.3);
    color: white;
}



.btn-comprar:hover {
    background: var(--dark-color);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(33, 37, 41, 0.2);
}

.btn-comprar.loading {
    position: relative;
    color: transparent;
}

.btn-comprar.loading::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 20px;
    height: 20px;
    border: 2px solid #ccc;
    border-top: 2px solid var(--dark-color);
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

/* Card Back Specs */

.spec-scroll {
    max-height: 250px;
    /* 🔥 Define a altura máxima */
    overflow-y: auto;
    /* 🔥 Ativa o scroll vertical */
    padding-right: 5px;
    /* 🔥 Opcional: espaço pra não encostar na barra */
}

/* 🔥 Scroll mais bonito (opcional) */
.spec-scroll::-webkit-scrollbar {
    width: 6px;
}

.spec-scroll::-webkit-scrollbar-thumb {
    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 3px;
}

.spec-scroll::-webkit-scrollbar-track {
    background-color: transparent;
}


.spec-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    padding: 8px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    animation: slideInLeft 0.5s ease-out forwards;
    opacity: 0;
}

.card-inner.is-flipped .spec-item:nth-child(1) {
    animation-delay: 0.1s;
}

.card-inner.is-flipped .spec-item:nth-child(2) {
    animation-delay: 0.2s;
}

.card-inner.is-flipped .spec-item:nth-child(3) {
    animation-delay: 0.3s;
}

.card-inner.is-flipped .spec-item:nth-child(4) {
    animation-delay: 0.4s;
}

.spec-icon {
    width: 35px;
    height: 35px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12px;
    color: #667eea;
}

.btn-voltar {
    position: absolute;
    background: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: white;
    width: 30px;
    backdrop-filter: blur(10px);
    top: 20px;
    left: 20px;
    z-index: 2;
}

.btn-voltar:hover {
    background: rgba(255, 255, 255, 0.3);
    color: white;
    transform: translateY(-2px);
}

/* Modal Melhorado */
.modal-content {
    border-radius: var(--border-radius);
    border: none;
    box-shadow: var(--shadow-strong);
    overflow: hidden;
}

.modal-header {
    background: linear-gradient(135deg, #0d6efd 0%, #0d6efd 100%);
    color: white;
    border: none;
}

.modal-body {
    padding: 2rem;
}

.form-select,
.form-control {
    border-radius: 10px;
    border: 2px solid #e9ecef;
    padding: 12px 16px;
    transition: all var(--transition-fast);
}

.form-select:focus,
.form-control:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
}

.modal-footer {
    border: none;
    padding: 1.5rem 2rem;
}

#linkWhatsapp {
    background: #25d366;
    border: none;
    border-radius: 12px;
    padding: 15px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all var(--transition-fast);
    position: relative;
    overflow: hidden;
    color: #f8f9fa;
}

#linkWhatsapp:hover {
    background: #128c7e;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(37, 211, 102, 0.3);
}

#linkWhatsapp::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.6s;
}

#linkWhatsapp:hover::before {
    left: 100%;
}

/* Animações */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-30px);
    }

    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes expandWidth {
    from {
        width: 0;
    }

    to {
        width: 60px;
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

@keyframes spin {
    from {
        transform: translate(-50%, -50%) rotate(0deg);
    }

    to {
        transform: translate(-50%, -50%) rotate(360deg);
    }
}

@keyframes pulse {

    0%,
    100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.05);
    }
}

/* Responsividade */
@media (max-width: 768px) {
    .card {
        width: 100%;
        max-width: 300px;
    }

    .card-img-top {
        height: 220px;
    }

    .section-title {
        font-size: 2rem;
    }
}

@media (max-width: 576px) {
    .card-img-top {
        height: 200px;
    }

    .modal-body {
        padding: 1.5rem;
    }
}
</style>


<main class="py-5">
    <div class="container">
        <div class="row g-5 cards-container mt-2">
            <h2 class="text-center fw-bold section-title">iPhones</h2>

            <?php foreach ($iphones as $iphone): ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center" data-aos="fade-up"
                data-aos-delay="150">
                <div class="card-flip">
                    <div class="card-inner">
                        <!-- Frente -->
                        <div class="card-front card border-0 shadow-sm">
                            <h5 class="card-title fw-semibold text-center"><?= $iphone->nome ?></h5>
                            <?php
                                $imagens = getImagesForModel($iphone->pastaImagens);
                                $imagemPrincipal = $imagens[0] ?? $iphone->imagem;
                                ?>

                            <img src="<?= $imagemPrincipal ?>" class="card-img-top" alt="<?= $iphone->nome ?>">
                            <div class="card-body d-flex align-items-center">
                                <button class="btn btn-enhanced btn-ver-detalhes">
                                    <i class="fas fa-info-circle "></i> Ver Detalhes
                                </button>
                                <button class="btn btn-enhanced btn-comprar" data-nome="<?= $iphone->nome ?>"
                                    data-id="<?= $iphone->id ?>">
                                    <i class="fas fa-shopping-cart"></i> Comprar
                                </button>
                            </div>
                        </div>

                        <!-- Verso -->
                        <div class="card-back card border-0 shadow-sm">
                            <div
                                class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                <h5 class="fw-semibold mb-4"><?= $iphone->nome ?></h5>

                                <div class="w-100 spec-scroll">
                                    <div class="spec-item">
                                        <div class="spec-icon">
                                            <i class="fas fa-microchip"></i>
                                        </div>
                                        <div class="text-start">
                                            <strong>Processador</strong><br>
                                            <small><?= $iphone->especificacoes['Processador'] ?? 'N/A' ?></small>
                                        </div>
                                    </div>

                                    <div class="spec-item">
                                        <div class="spec-icon">
                                            <i class="fas fa-camera"></i>
                                        </div>
                                        <div class="text-start">
                                            <strong>Câmera</strong><br>
                                            <small><?= $iphone->especificacoes['camera'] ?? 'N/A' ?></small>
                                        </div>
                                    </div>

                                    <div class="spec-item">
                                        <div class="spec-icon">
                                            <i class="fas fa-battery-full"></i>
                                        </div>
                                        <div class="text-start">
                                            <strong>Bateria</strong><br>
                                            <small><?= $iphone->especificacoes['Bateria'] ?? 'N/A' ?></small>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-enhanced btn-voltar">
                                    <i class="fas fa-arrow-left me-2"></i>
                                </button>

                            </div>
                            <div class="card-body d-flex align-items-center">

                                <!-- Botão "Ver mais detalhes" (aciona o modal) -->

                                <button class="btn btn-enhanced btn-ver-detalhes" data-bs-toggle="modal"
                                    data-bs-target="#modalDetalhes" data-nome="<?= $iphone->nome ?>"
                                    data-id="<?= $iphone->id ?>" data-pasta="<?= $iphone->pastaImagens ?>"
                                    data-processador="<?= $iphone->especificacoes['Processador'] ?? '' ?>"
                                    data-camera="<?= $iphone->especificacoes['camera'] ?? '' ?>"
                                    data-bateria="<?= $iphone->especificacoes['Bateria'] ?? '' ?>">
                                    <i class="fas fa-info-circle"></i> Ver mais detalhes
                                </button>

                                <button class="btn btn-enhanced btn-comprar p-2" data-nome="<?= $iphone->nome ?>"
                                    data-id="<?= $iphone->id ?>">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Versão otimizada com melhor performance e tratamento de erros

class IPhoneStore {
    constructor() {
        this.modal = null;
        this.debounceTimer = null;
        this.init();
    }

    init() {
        this.initModal();
        this.initCardFlip();
        this.initPurchaseModal();
        this.initWhatsAppIntegration();
        this.preloadImages();
    }

    initModal() {
        try {
            this.modal = new bootstrap.Modal(document.getElementById('modalComprar'));
        } catch (error) {
            console.error('Erro ao inicializar modal:', error);
        }
    }

    initCardFlip() {
        // Usar delegação de eventos para melhor performance
        document.addEventListener('click', (e) => {
            if (e.target.closest('.btn-ver-detalhes')) {
                e.preventDefault();
                this.handleCardFlip(e.target);
            }

            if (e.target.closest('.btn-voltar')) {
                e.preventDefault();
                this.handleCardBack(e.target);
            }
        });
    }

    handleCardFlip(btn) {
        const cardInner = btn.closest('.card-flip')?.querySelector('.card-inner');
        if (!cardInner) return;

        cardInner.classList.add('is-flipped');
        this.vibrate(50);

        // Otimizar animações dos specs
        requestAnimationFrame(() => {
            setTimeout(() => {
                const specItems = cardInner.querySelectorAll('.spec-item');
                specItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.style.animation = 'slideInLeft 0.5s ease-out forwards';
                    }, index * 100);
                });
            }, 400);
        });
    }

    handleCardBack(btn) {
        const cardInner = btn.closest('.card-flip')?.querySelector('.card-inner');
        if (!cardInner) return;

        cardInner.classList.remove('is-flipped');
        this.vibrate(30);
    }

    initPurchaseModal() {
        document.addEventListener('click', (e) => {
            if (e.target.closest('.btn-comprar')) {
                e.preventDefault();
                this.handlePurchaseClick(e.target.closest('.btn-comprar'));
            }
        });
    }

    async handlePurchaseClick(btn) {
        if (btn.classList.contains('loading')) return;

        btn.classList.add('loading');

        try {
            // Simular carregamento (pode ser substituído por API call)
            await this.delay(800);

            const nome = btn.getAttribute('data-nome');
            const id = btn.getAttribute('data-id');

            this.openPurchaseModal(nome, id);
        } catch (error) {
            console.error('Erro ao processar compra:', error);
        } finally {
            btn.classList.remove('loading');
        }
    }

    openPurchaseModal(nome, id) {
        const nomeEl = document.getElementById('nomeProduto');
        const idEl = document.getElementById('produtoId');

        if (nomeEl && idEl) {
            nomeEl.textContent = nome;
            idEl.value = id;
            this.resetForm();
            this.modal?.show();
        }
    }

    resetForm() {
        const form = document.getElementById('formCompra');
        if (form) {
            form.reset();
            document.getElementById('quantidadeProduto').value = 1;
            document.getElementById('linkWhatsapp').href = '#';
        }
    }

    initWhatsAppIntegration() {
        const form = document.getElementById('formCompra');
        const linkWhatsapp = document.getElementById('linkWhatsapp');

        if (!form || !linkWhatsapp) return;

        // Debounce para otimizar performance
        form.addEventListener('input', () => {
            clearTimeout(this.debounceTimer);
            this.debounceTimer = setTimeout(() => {
                this.updateWhatsAppLink();
            }, 300);
        });

        form.addEventListener('change', () => this.updateWhatsAppLink());

        linkWhatsapp.addEventListener('click', (e) => {
            this.handleWhatsAppClick(e, linkWhatsapp);
        });
    }

    updateWhatsAppLink() {
        const nome = document.getElementById('nomeProduto')?.textContent;
        const cor = document.getElementById('corProduto')?.value;
        const armazenamento = document.getElementById('armazenamentoProduto')?.value;
        const quantidade = document.getElementById('quantidadeProduto')?.value;
        const linkWhatsapp = document.getElementById('linkWhatsapp');

        if (!linkWhatsapp) return;

        if (cor && armazenamento && nome) {
            const mensagem = this.buildWhatsAppMessage(nome, cor, armazenamento, quantidade);
            const numero = '5544998170770';
            const url = `https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`;

            linkWhatsapp.href = url;
            linkWhatsapp.style.opacity = '1';
            linkWhatsapp.style.transform = 'scale(1)';
        } else {
            linkWhatsapp.href = '#';
            linkWhatsapp.style.opacity = '0.6';
            linkWhatsapp.style.transform = 'scale(0.95)';
        }
    }

    buildWhatsAppMessage(nome, cor, armazenamento, quantidade) {
        return `Olá! Tenho interesse no *${nome}*.

        📱 Produto: *${nome}*
        🎨 Cor: *${cor}*
        💾 Armazenamento: *${armazenamento}*
        📦 Quantidade: *${quantidade}*

        Poderia me passar mais informações sobre disponibilidade e formas de pagamento?`;
    }

    handleWhatsAppClick(e, linkWhatsapp) {
        if (linkWhatsapp.href === '#' || linkWhatsapp.href.includes('#')) {
            e.preventDefault();
            this.showFormValidationFeedback();
        }
    }

    showFormValidationFeedback() {
        const linkWhatsapp = document.getElementById('linkWhatsapp');
        const cor = document.getElementById('corProduto');
        const armazenamento = document.getElementById('armazenamentoProduto');

        // Animação de erro no botão
        linkWhatsapp.style.animation = 'pulse 0.5s ease-in-out';

        // Highlight campos vazios
        [cor, armazenamento].forEach(field => {
            if (field && !field.value) {
                field.style.borderColor = '#dc3545';
                field.style.animation = 'pulse 0.5s ease-in-out';
            }
        });

        // Reset após animação
        setTimeout(() => {
            [cor, armazenamento, linkWhatsapp].forEach(el => {
                if (el) {
                    el.style.borderColor = '';
                    el.style.animation = '';
                }
            });
        }, 500);
    }

    async preloadImages() {
        const images = document.querySelectorAll('.card-img-top');
        const imagePromises = Array.from(images).map(img => {
            return new Promise((resolve, reject) => {
                const imageLoader = new Image();
                imageLoader.onload = resolve;
                imageLoader.onerror = reject;
                imageLoader.src = img.src;
            });
        });

        try {
            await Promise.allSettled(imagePromises);
            console.log('Imagens pré-carregadas com sucesso');
        } catch (error) {
            console.warn('Algumas imagens falharam ao pré-carregar:', error);
        }
    }

    vibrate(duration) {
        if (navigator.vibrate) {
            navigator.vibrate(duration);
        }
    }

    delay(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
}

// Inicialização
document.addEventListener('DOMContentLoaded', () => {
    new IPhoneStore();
});

// Service Worker para cache (opcional)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => console.log('SW registrado'))
            .catch(error => console.log('SW falhou:', error));
    });
}


// script para modal de mais detalhes
document.querySelectorAll('[data-bs-target="#modalDetalhes"]').forEach(btn => {
    btn.addEventListener('click', function() {
        const nome = this.getAttribute('data-nome');
        const id = this.getAttribute('data-id');
        const pasta = this.getAttribute('data-pasta'); // vem do PHP

        document.getElementById('detalheTitulo').textContent = nome;

        // Chama o PHP que retorna as imagens da pasta
        fetch(`getImages.php?pasta=${pasta}`)
            .then(res => res.json())
            .then(imagens => {
                const carouselInner = document.getElementById('carouselDetalhesInner');
                const carousel = document.getElementById('carouselDetalhes');

                // Adiciona imagens
                carouselInner.innerHTML = imagens.map((img, index) => `
                    <div class="carousel-item ${index === 0 ? 'active' : ''}">
                        <img src="${img}" class="d-block w-100 rounded" alt="${nome} imagem ${index + 1}">
                    </div>
                `).join('');

                // Adiciona botões de navegação se houver mais de uma imagem
                if (imagens.length > 1) {
                    carousel.insertAdjacentHTML('beforeend', `
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselDetalhes" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visuall    y-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselDetalhes" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    `);
                }

                // Atualiza especificações
                const specs = [{
                        label: 'Processador',
                        valor: this.getAttribute('data-processador') || 'N/A'
                    },
                    {
                        label: 'Câmera',
                        valor: this.getAttribute('data-camera') || 'N/A'
                    },
                    {
                        label: 'Bateria',
                        valor: this.getAttribute('data-bateria') || 'N/A'
                    }
                ];
                const listaSpecs = document.getElementById('listaEspecificacoes');
                listaSpecs.innerHTML = specs.map(spec =>
                    `    <li class="list-group-item"><strong>${spec.label}:</strong> ${spec.valor}</li>`
                ).join('');


                const modalDetalhesEl = document.getElementById('modalDetalhes');
                const modalComprarEl = document.getElementById('modalComprar');

                document.getElementById('btnIrParaCompra').onclick = () => {
                    const nome = document.getElementById('detalheTitulo').textContent;
                    const id = document.getElementById('produtoId').value;

                    // Força fechar o modal de detalhes corretamente
                    const modalDetalhes = bootstrap.Modal.getInstance(modalDetalhesEl);
                    if (modalDetalhes) {
                        modalDetalhes.hide();
                    }

                    // Aguarda evento de fechamento
                    modalDetalhesEl.addEventListener('hidden.bs.modal',
                        function abrirModalCompra() {
                            // Garante que não ficou nenhum backdrop visível
                            const backdrop = document.querySelector('.modal-backdrop');
                            if (backdrop) backdrop.remove();

                            document.body.classList.remove(
                                'modal-open'); // evita fundo travado

                            // Atualiza os dados antes de abrir
                            document.getElementById('produtoId').value = id;
                            document.getElementById('nomeProduto').textContent = nome;

                            // Abre o modal de compra
                            const modalComprar = new bootstrap.Modal(modalComprarEl);
                            modalComprar.show();

                            // Remove o listener para evitar chamadas duplicadas
                            modalDetalhesEl.removeEventListener('hidden.bs.modal',
                                abrirModalCompra);
                        }, {
                            once: true
                        });
                };

            })
            .catch(error => {
                console.error('Erro ao carregar imagens:', error);
                document.getElementById('carouselDetalhesInner').innerHTML = `
                    <div class="text-danger">Erro ao carregar imagens.</div>
                `;
            });
    });
});
</script>