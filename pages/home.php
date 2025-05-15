<style>
    .glide__slide {
        position: relative;
        text-align: center;
    }

    .glide__slide img {
        width: 100%;
        height: auto;
    }

    .caption {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.6);
        color: #fff;
        padding: 15px;
        border-radius: 10px;
    }

    .caption h5 {
        margin: 0 0 10px 0;
    }

    .btn-success {
        background-color: #28a745;
        border: none;
        padding: 10px 20px;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn-success:hover {
        background-color: #218838;
    }
</style>

</style>

<!-- Container principal -->
<div class="container-fluid pt-0">
    <!-- Hero principal -->
    <section class="hero d-flex align-items-center justify-content-center flex-column">
        <h2>iPhone 16 Pro Max</h2>
        <h3>A melhor câmera na sua mão.</h3>
        <img src="./assets/img/iphone-m-16.jpg" class="w-100" alt="Iphone 16">
        <p>Disponível agora com ofertas exclusivas.</p>

        <a href="#" class="btn-saiba-mais">Saiba mais</a>
        <!-- <a href="#" class="btn-comprar">Comprar</a> -->
    </section>


    <!-- Grid de produtos -->
    <div class="cell row g-3 mx-0 mb-3">
        <div class="col-md-6">
            <div class="cell-container">
                <h2>Samsung</h2>
                <h3>s25 ultra</h3>
                <div class="cell-img">
                    <img src="./assets/img/s-s25ultra.png" alt="Xiaomi Redmi Note 13 Pro" class="img-fluid mt-2">
                </div>
                <p>A câmera com o melhor zoom.</p>
                <a href="#" class="btn-saiba-mais">Saiba mais</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="cell-container">
                <h2>Xiaomi</h2>
                <h3>15 ultra</h3>
                <img src="./assets/img/x-15ultra.jpg" alt="Motorola Edge 50 Ultra" class="img-fluid mt-2">

                <p>Com o processador Snapdragon 8 Elite.</p>
                <a href="#" class="btn-saiba-mais">Saiba mais</a>
            </div>
        </div>
    </div>
    <section class="hero d-flex align-items-center justify-content-center flex-column">
        <h2>iPhone 16 Pro Max</h2>
        <h3>A melhor câmera na sua mão.</h3>
        <img src="./assets/img/iphone-m-16.jpg" alt="Iphone 16">
        <p>Disponível agora com ofertas exclusivas.</p>

        <a href="#" class="btn-saiba-mais">Saiba mais</a>
        <!-- <a href="#" class="btn-comprar">Comprar</a> -->
    </section>

    <!-- Grid de produtos 2 -->
    <div class="row g-3 mx-0">
        <div class="col-md-6">
            <div class="cell-container">
                <h2>Serviços</h2>
                <h3>Suporte técnico especializado</h3>
                <p>Garantia estendida e proteção completa para seu dispositivo.</p>
                <div class="mt-4">
                    <a href="#" class="btn-saiba-mais">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="cell-container">
                <h2>TechCell Pro</h2>
                <h3>Vantagens exclusivas</h3>
                <p>Descontos, prioridade no atendimento e mais.</p>
                <div class="mt-4">
                    <a href="#" class="btn-saiba-mais">Assinar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="glide">
    <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
            <!-- Slide 1 -->
            <li class="glide__slide">
                <img src="assets/img/iphone16.png" alt="Celular 1" class="img-fluid">
                <div class="caption">
                    <h5>Celular Top 1</h5>
                    <p>Alta performance e ótimo custo-benefício.</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </li>
            <!-- Slide 2 -->
            <li class="glide__slide">
                <img src="https://via.placeholder.com/800x400?text=Celular+2" alt="Celular 2" class="img-fluid">
                <div class="caption">
                    <h5>Celular Top 2</h5>
                    <p>Câmera de alta definição e bateria duradoura.</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </li>
            <!-- Slide 3 -->
            <li class="glide__slide">
                <img src="https://via.placeholder.com/800x400?text=Celular+3" alt="Celular 3" class="img-fluid">
                <div class="caption">
                    <h5>Celular Top 3</h5>
                    <p>Design moderno e excelente desempenho.</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </li>
        </ul>
    </div>

    <!-- Controles de Navegação -->
    <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">Anterior</button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">Próximo</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Glide('.glide', {
            type: 'carousel',
            autoplay: 3000,
            hoverpause: true,
            perView: 1,
            animationDuration: 800,
            rewind: true
        }).mount();
    });
</script>