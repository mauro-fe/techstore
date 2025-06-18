<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/home.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">


<!-- Container principal -->
<div class="home">
    <main class="">
        <div class="container-fluid">
            <div class="text-center teste" data-aos="zoom-in" data-aos-delay="100">
                <h2><strong><?= $iphones[1]->marca ?></strong></h2>

                <!-- Swiper container -->
                <div class="swiper mySwiperIphones">
                    <div class="swiper-wrapper">
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <div class="swiper-slide">
                                <h3><?= $iphones[$i]->nome ?></h3>
                                <img src="<?= $iphones[$i]->imagem ?>" alt="<?= $iphones[$i]->nome ?>" class="img-fluid">
                            </div>
                        <?php endfor; ?>
                    </div>
                    <!-- Paginação opcional -->
                    <div class="swiper-pagination mt-0"></div>
                </div>
                <p>Disponível agora com ofertas exclusivas.</p>
                <div class="btn-saiba-mais">
                    <a href="celulares/iphone">Saiba mais</a>
                </div>
            </div>

        </div>
</div>

<!-- Grid de produtos -->
<section class="cell row g-3 mb-3">
    <div class="col-md-6">
        <div class="cell-container" data-aos="fade-right" data-aos-delay="100">
            <h2><?= $xiaomis[8]->marca ?></h2>
            <h3><?= $xiaomis[8]->nome ?></h3>
            <img src="<?= $xiaomis[8]->imagem ?>" alt="<?= $xiaomis[8]->nome ?>" class="mt-2">
            <p class="m-3">A prova de água e resistente à queda.</p>
            <div class="btn-saiba-mais">
                <a href="celulares/xiaomi">Saiba mais</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="cell-container" data-aos="fade-left" data-aos-delay="100">
            <h2><?= $realmes[1]->marca ?></h2>
            <h3><?= $realmes[1]->nome ?></h3>
            <img src="<?= $realmes[1]->imagem ?>" alt="<?= $realmes[1]->nome ?>" class="mt-2">
            <p class="m-3">Com o processador Snapdragon 8 Elite.</p>
            <div class="btn-saiba-mais">
                <a href="celulares/realme">Saiba mais</a>
            </div>
        </div>
    </div>
</section>
<div class="home">
    <section class="hero d-flex align-items-center justify-content-center flex-column" data-aos="zoom-in"
        data-aos-delay="100">
        <h2><?= $samsungs[4]->marca ?></h2>
        <h3><?= $samsungs[4]->nome ?></h3>
        <img src="<?= $samsungs[4]->imagem ?>" alt="<?= $samsungs[4]->nome ?>">
        <p class="m-3">A câmera com o melhor zoom.</p>
        <div class="btn-saiba-mais">
            <a href="celulares/samsung">Saiba mais</a>
        </div>
    </section>
</div>
<div class="carousel home">
    <h2 class="text-center">Acessórios</h2>
    <!-- Swiper HTML -->
    <div class="swiper mySwiper" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper-wrapper">
            <?php foreach ($acessorios as $acessorio): ?>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="<?= $acessorio->imagem ?>" class="card-img-top" alt="<?= $acessorio->nome ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $acessorio->nome ?></h5>
                            <p class="card-text"><?= $acessorio->sobre ?></p>
                            <button type="button" class="btn-comprar" data-nome="<?= $acessorio->nome ?>"
                                data-id="<?= $acessorio->id ?>">
                                Comprar
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>

    </div>
</div>
<section class="assistencia-section">
    <div data-aos="fade-up" data-aos-delay="100">
        <h2>Assistência técnica especializada</h2>
        <p class="text-center text-muted m-2">Consertos rápidos, peças originais e garantia estendida para seu
            smartphone.</p>
    </div>
    <img src="./assets/img/assistencia-tecnica.png" alt="Assitência Tecnica" class="w-100" data-aos="fade-up"
        data-aos-delay="200">
    <div class="row g-4 details">
        <div class="col-md-4">
            <div class="assistencia-box text-center" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-tools"></i>
                <h5 class="mt-3">Reparos em celulares</h5>
                <p>Troca de tela, bateria, conector de carga, botão power entre outros serviços.</p>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="assistencia-box text-center">
                <i class="fas fa-shield-alt"></i>
                <h5 class="mt-3">Garantia e segurança</h5>
                <p>Peças com garantia de até 12 meses. Serviço com nota fiscal e suporte técnico.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="assistencia-box text-center" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-headset"></i>
                <h5 class="mt-3">Atendimento especializado</h5>
                <p>Equipe treinada e pronta para tirar dúvidas e oferecer o melhor suporte.</p>
            </div>
        </div>
    </div>
    <div class="btn-saiba-mais mt-4" data-aos="fade-up" data-aos-delay="350">
        <a href="assistencia-tecnica">Saiba mais</a>
    </div>
</section>
<!-- Swiper HTML -->
<section class="avaliacoes home">
    <h2 class="text-center mb-2" data-aos="fade-up" data-aos-delay="100">O que dizem nossos clientes</h2>
    <div class="swiper mySwiper avaliacoesSwiper" data-aos="fade-up" data-aos-delay="300">
        <div class="swiper-wrapper pt-5 pb-5">
            <!-- Avaliação 1 -->
            <?php foreach ($avaliacoes as $avaliacao): ?>
                <div class="swiper-slide">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="<?= $avaliacao->imagem ?>" class="avatar m-3" alt="<?= $avaliacao->nome ?>">
                            <div class="stars mb-2"><?= $avaliacao->estrela ?></div>
                            <p class="card-text"><?= $avaliacao->avaliacao ?></p>
                            <h5 class="card-title mt-3 mb-1"><?= $avaliacao->nome ?></h5>
                            <small class="text-muted"><?= $avaliacao->localizacao ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
</div>

<!-- Modal de compra -->
<div class="modal modal-comprar fade" id="modalComprar" tabindex="-1" aria-labelledby="modalComprarLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="modalComprarLabel">
                    <i class="fas fa-shopping-cart me-2"></i> Comprar <span id="nomeProduto"></span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <form id="formCompra">
                    <input type="hidden" id="produtoId">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-user me-2"></i> Nome:
                        </label>
                        <input type="text" id="nome" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-sort-numeric-up me-2"></i> Quantidade:
                        </label>
                        <input type="number" id="quantidadeProduto" class="form-control" value="1" min="1" max="10"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            💬 Alguma mensagem?
                        </label>
                        <input type="text" id="msg" class="form-control" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer p-4">
                <a href="#" id="linkWhatsapp" target="_blank" class="btn w-100">
                    <i class="fab fa-whatsapp me-2"></i> Finalizar compra no whatsapp
                </a>
            </div>
        </div>
    </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.scrollTo(0, 0);
            window.history.scrollRestoration = "manual";
        });

        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.mySwiperIphones', {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                slidesPerView: 1,
            });

            new Swiper('.mySwiper', {
                loop: true,
                spaceBetween: 30,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        centeredSlides: false
                    },
                    576: {
                        slidesPerView: 2,
                        centeredSlides: false
                    },
                    992: {
                        slidesPerView: 3,
                        centeredSlides: true
                    },
                    1200: {
                        slidesPerView: 4,
                        centeredSlides: true
                    }
                }
            });
        });

        class Modal {
            constructor() {
                this.initModal();
                this.initPurchaseModal();
            }

            initModal() {
                try {
                    const modalEl = document.getElementById('modalComprar');
                    this.modal = new bootstrap.Modal(modalEl);
                } catch (error) {
                    console.error('Erro ao inicializar modal:', error);
                }
            }

            initPurchaseModal() {
                document.addEventListener('click', (e) => {
                    const btn = e.target.closest('.btn-comprar');
                    if (btn) {
                        e.preventDefault();
                        this.handlePurchaseClick(btn);
                    }
                });
            }

            async handlePurchaseClick(btn) {
                if (btn.classList.contains('loading')) return;

                btn.classList.add('loading');

                try {
                    await this.delay(500); // simula carregamento

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
                const linkWhatsapp = document.getElementById('linkWhatsapp');
                const qtdEl = document.getElementById('quantidadeProduto');

                if (nomeEl && idEl && qtdEl) {
                    nomeEl.textContent = nome;
                    idEl.value = id;

                    // Atualiza o link do WhatsApp dinamicamente
                    qtdEl.addEventListener('input', () => {
                        linkWhatsapp.href = this.gerarLinkWhatsapp(nome, qtdEl.value);
                    });

                    linkWhatsapp.href = this.gerarLinkWhatsapp(nome, qtdEl.value);
                    this.modal.show();
                }
            }

            gerarLinkWhatsapp(produto, quantidade) {
                const msg = `Olá! Gostaria de comprar ${quantidade} unidade(s) do produto: ${produto}`;
                return `https://wa.me/5544998011086?text=${encodeURIComponent(msg)}`;
            }

            delay(ms) {
                return new Promise(resolve => setTimeout(resolve, ms));
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            new Modal();
        });
    </script>