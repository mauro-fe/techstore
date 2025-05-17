<!-- Container principal -->
<div class="container-fluid container">
    <!-- Hero principal -->
    <section class="hero d-flex align-items-center justify-content-center flex-column">
        <h2>Apple</h2>
        <h3>iPhone 16 Pro Max</h3>
        <img src="./assets/img/iphone-16-pro-max-douradof.png" class="w-100" alt="Iphone 16">
        <p class="m-3">Disponível agora com ofertas exclusivas.</p>
        <a href="#" class="btn-saiba-mais">Saiba mais</a>
    </section>

    <!-- Grid de produtos -->
    <div class="cell row g-3 mb-3">
        <div class="col-md-6">
            <div class="cell-container a">
                <h2>Realme</h2>
                <h3>C75</h3>
                <div class="cell-img">
                    <img src="./assets/img/realme-c75-dourado-2.png" alt="Xiaomi Redmi Note 13 Pro"
                        class="img-fluid mt-2">
                </div>
                <p class="m-3">A prova de água e resistente à queda.</p>
                <a href="#" class="btn-saiba-mais">Saiba mais</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="cell-container b">
                <h2>Xiaomi</h2>
                <h3>15 ultra</h3>
                <img src="./assets/img/xiaomi-15-ultra-preto.png" alt="Motorola Edge 50 Ultra" class="img-fluid mt-2">

                <p class="m-3">Com o processador Snapdragon 8 Elite.</p>
                <a href="#" class="btn-saiba-mais">Saiba mais</a>
            </div>
        </div>
    </div>
    <section class="hero d-flex align-items-center justify-content-center flex-column">
        <div class="cell-container">
            <h2>Samsung</h2>
            <h3>s25 ultra</h3>
            <div class="cell-img">
                <img src="./assets/img/samsung-galaxy-s25-ultra-cinza.png" alt="Xiaomi Redmi Note 13 Pro"
                    class="img-fluid mt-2">
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
                        <a href="#" class="btn btn-dark">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <img src="./assets/img/carregador-samsung-tipo-c.webp" class="card-img-top" alt="Capinha">
                    <div class="card-body text-center">
                        <h5 class="card-title">Capinha iPhone</h5>
                        <p class="card-text">Proteção elegante e discreta para seu aparelho.</p>
                        <a href="#" class="btn btn-dark">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="./assets/img/carregador-iphone-tipo-c.jpg" class="card-img-top" alt="Fone">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fone Bluetooth</h5>
                        <p class="card-text">Som de alta qualidade e bateria duradoura.</p>
                        <a href="#" class="btn btn-dark">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <img src="./assets/img/carregador-samsung-tipo-c.webp" class="card-img-top" alt="Capinha">
                    <div class="card-body text-center">
                        <h5 class="card-title">Capinha iPhone</h5>
                        <p class="card-text">Proteção elegante e discreta para seu aparelho.</p>
                        <a href="#" class="btn btn-dark">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="./assets/img/carregador-iphone-tipo-c.jpg" class="card-img-top" alt="Fone">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fone Bluetooth</h5>
                        <p class="card-text">Som de alta qualidade e bateria duradoura.</p>
                        <a href="#" class="btn btn-dark">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card">
                    <img src="./assets/img/carregador-samsung-tipo-c.webp" class="card-img-top" alt="Capinha">
                    <div class="card-body text-center">
                        <h5 class="card-title">Capinha iPhone</h5>
                        <p class="card-text">Proteção elegante e discreta para seu aparelho.</p>
                        <a href="#" class="btn btn-dark">Comprar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    centeredSlides: true,
    spaceBetween: 30,
    loop: true,
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