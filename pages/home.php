<!-- Container principal -->
<div class="container-fluid container">
    <!-- Hero principal -->
    <section class="hero d-flex align-items-center justify-content-center flex-column">
        <h2><?= $products[1]->marca ?></h2>
        <h3><?= $products[1]->nome ?></h3>
        <img src="<?= $products[1]->imagem ?>" class="w-100" alt="<?= $products[1]->nome ?>">
        <p class="m-3">Disponível agora com ofertas exclusivas.</p>
        <a href="#" class="btn-saiba-mais">Saiba mais</a>
    </section>

    <!-- Grid de produtos -->
    <div class="cell row g-3 mb-3">
        <div class="col-md-6">
            <div class="cell-container a">
                <h2><?= $products[2]->marca ?></h2>
                <h3><?= $products[2]->nome ?></h3>
                <div class="cell-img">
                    <img src="<?= $products[2]->imagem ?>" alt="<?= $products[2]->nome ?>" class="img-fluid mt-2">
                </div>
                <p class="m-3">A prova de água e resistente à queda.</p>
                <a href="#" class="btn-saiba-mais">Saiba mais</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="cell-container b">
                <h2><?= $products[3]->marca ?></h3>
                    <h3><?= $products[3]->nome ?></h3>
                    <div class="cell-img">
                        <img src="<?= $products[3]->imagem ?>" alt="<?= $products[3]->nome ?>" class="img-fluid mt-2">
                    </div>

                    <p class="m-3">Com o processador Snapdragon 8 Elite.</p>
                    <a href="#" class="btn-saiba-mais">Saiba mais</a>
            </div>
        </div>
    </div>
    <section class="hero d-flex align-items-center justify-content-center flex-column">
        <div class="cell-container">
            <h2><?= $products[4]->marca ?></h2>
            <h3><?= $products[4]->nome ?></h3>
            <img src="<?= $products[4]->imagem ?>" class="w-100" alt="<?= $products[4]->nome ?>">
        </div>
        <p class="m-3">A câmera com o melhor zoom.</p>
        <a href="#" class="btn-saiba-mais">Saiba mais</a>
</div>
</section>
</div>

<div class="pt-5 carousel">
    <h2 class="text-center">Acessórios</h2>
    <!-- Swiper HTML -->
    <div class="swiper mySwiper">

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card">
                    <img src="./assets/img/carregador-iphone-tipo-c.jpg" class="card-img-top" alt="Fone">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fone Bluetooth</h5>
                        <p class="card-text">Som de alta qualidade e bateria duradoura.</p>
                        <a href="#" class="btn-comprar">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <img src="./assets/img/carregador-samsung-tipo-c.webp" class="card-img-top" alt="Capinha">
                    <div class="card-body text-center">
                        <h5 class="card-title">Capinha iPhone</h5>
                        <p class="card-text">Proteção elegante e discreta para seu aparelho.</p>
                        <a href="#" class="btn-comprar">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="./assets/img/carregador-iphone-tipo-c.jpg" class="card-img-top" alt="Fone">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fone Bluetooth</h5>
                        <p class="card-text">Som de alta qualidade e bateria duradoura.</p>
                        <a href="#" class="btn-comprar">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <img src="./assets/img/carregador-samsung-tipo-c.webp" class="card-img-top" alt="Capinha">
                    <div class="card-body text-center">
                        <h5 class="card-title">Capinha iPhone</h5>
                        <p class="card-text">Proteção elegante e discreta para seu aparelho.</p>
                        <a href="#" class="btn-comprar">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="./assets/img/carregador-iphone-tipo-c.jpg" class="card-img-top" alt="Fone">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fone Bluetooth</h5>
                        <p class="card-text">Som de alta qualidade e bateria duradoura.</p>
                        <a href="#" class="btn-comprar">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <img src="./assets/img/carregador-samsung-tipo-c.webp" class="card-img-top" alt="Capinha">
                    <div class="card-body text-center">
                        <h5 class="card-title">Capinha iPhone</h5>
                        <p class="card-text">Proteção elegante e discreta para seu aparelho.</p>
                        <a href="#" class="btn-comprar">Comprar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container">
    <section class="assistencia-section">

        <h2>Assistência Técnica Especializada</h2>
        <p class="text-center text-muted m-2">Consertos rápidos, peças originais e garantia estendida para seu
            smartphone.</p>
        <img src="./assets/img/assistencia-tecnica.png" alt="Assitência Tecnica" class="w-100">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="assistencia-box text-center">
                    <i class="fas fa-tools"></i>
                    <h5 class="mt-3">Reparos em celulares</h5>
                    <p>Troca de tela, bateria, conector de carga, botão power e outros serviços.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="assistencia-box text-center">
                    <i class="fas fa-shield-alt"></i>
                    <h5 class="mt-3">Garantia e segurança</h5>
                    <p>Peças com garantia de até 12 meses. Serviço com nota fiscal e suporte técnico.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="assistencia-box text-center">
                    <i class="fas fa-headset"></i>
                    <h5 class="mt-3">Atendimento especializado</h5>
                    <p>Equipe treinada e pronta para tirar dúvidas e oferecer o melhor suporte.</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn btn-primary px-4 py-2">Agendar atendimento</a>
        </div>
    </section>
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper(".mySwiper", {
    slidesPerView: 4, // mostra 3, mas centralizado
    centeredSlides: true,
    spaceBetween: 30,
    loop: true,
    speed: 1000,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        576: {
            slidesPerView: 2
        },
        992: {
            slidesPerView: 3
        },
        1200: {
            slidesPerView: 4
        }
    }
});
</script>