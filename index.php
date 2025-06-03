<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="MegaTech - A melhor loja de smartphones e acessórios do Brasil. iPhone, Samsung, Xiaomi, Realme com os melhores preços e assistência técnica especializada.">
    <meta name="keywords"
        content="smartphone, celular, iPhone, Samsung, Xiaomi, Realme, acessórios, assistência técnica, loja de celular">
    <meta name="author" content="MegaTech">
    <meta property="og:title" content="MegaTech - Loja Premium de Smartphones">
    <meta property="og:description"
        content="Descubra os melhores smartphones e acessórios com assistência técnica especializada">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://megatech.com.br">
    <meta property="og:image" content="assets/img/logo.png">
    <link rel="canonical" href="https://megatech.com.br">

    <base href="http://localhost/megatech2/">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>MegaTech | Smartphones Premium e Assistência Técnica</title>


    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- aos master -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg  header">
            <div class="container">
                <div class="navbar-logo" data-aos="fade-right" data-aos-delay="100">
                    <a class="navbar-brand" href="home">
                        <img src="assets/img/logo.png" alt="Logo">
                    </a>
                    <a class="navbar-brand" href="home">MegaTech</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item" data-aos="fade-left" data-aos-delay="100">
                            <a class="nav-link me-4" href="home">Loja</a>
                        </li>
                        <li class="nav-item dropdown" data-aos="fade-left" data-aos-delay="200">
                            <a class="nav-link me-4">Celulares</a>
                            <ul class="dropdown-menu">
                                <li><a href="celulares/iphone">iPhone</a></li>
                                <li><a href="celulares/samsung">Samsung</a></li>
                                <li><a href="celulares/xiaomi">Xiaomi</a></li>
                                <li><a href="celulares/realme">Realme</a></li>
                            </ul>
                        </li>
                        <li class="nav-item" data-aos="fade-left" data-aos-delay="300">
                            <a class="nav-link me-4" href="assistencia-tecnica">Assistência Técnica</a>
                        </li>
                        <li class="nav-item" data-aos="fade-left" data-aos-delay="400">
                            <a class="nav-link me-4" href="contato">Contato</a>
                        </li>
                        <li class="nav-item" data-aos="fade-left" data-aos-delay="500">
                            <a class="nav-link me-4 btn-comprar-nav" href="#">Comprar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?php
        // ini_set('display_errors', 1);
        // error_reporting(E_ALL);

        require_once 'Products.php';
        require_once 'Iphone.php';
        require_once 'Xiaomi.php';
        require_once 'Samsung.php';
        require_once 'Realme.php';

        require_once 'Helpers/utils.php';

        if (isset($_GET["param"])) {
            $p = explode("/", $_GET["param"]);
        }
        $folder = $p[0] ?? "home";
        $file = $p[1] ?? "index";

        if ($folder === "celulares") {
            $path = "pages/celulares/{$file}.php";
        } else {
            $path = "pages/{$folder}.php";
        }

        if (file_exists($path)) {
            include $path;
        } else {
            include "pages/404.php";
        }
        ?>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="navbar-logo">
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" alt="Logo">
                    </a>
                    <a class="navbar-brand" href="#">MegaTech</a>
                </div>
                <div>
                    <p class="mb-1">Copyright © 2025 MegaTech. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script do Swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Jquery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>

    <!-- Aos Master -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: false, // 🟢 Melhora performance e evita reanimações que podem causar flicker
            offset: 100
        });

        // jQuery para efeito de opacidade no header durante scroll
        $(document).ready(function() {

            // Configurações do efeito
            const scrollStart = 20; // Pixel onde começa a reduzir opacidade
            const maxScroll = 500; // Pixel onde atinge opacidade mínima
            const minOpacity = 0.7; // Opacidade mínima (70%)

            // Função que calcula e aplica a opacidade
            function updateHeaderOpacity() {
                const scrollTop = $(window).scrollTop();
                const header = $('.header');

                if (scrollTop <= scrollStart) {
                    // Se ainda não passou do ponto inicial, opacidade total
                    header.css('opacity', '1');
                } else if (scrollTop >= maxScroll) {
                    // Se passou do ponto máximo, opacidade mínima
                    header.css('opacity', minOpacity);
                } else {
                    // Calcula opacidade progressiva entre os pontos
                    const scrollProgress = (scrollTop - scrollStart) / (maxScroll - scrollStart);
                    const currentOpacity = 1 - (scrollProgress * (1 - minOpacity));
                    header.css('opacity', currentOpacity);
                }
            }

            // Aplica transição CSS suave no header
            $('.header').css({
                'transition': 'opacity 0.3s ease',
                '-webkit-transition': 'opacity 0.3s ease',
                '-moz-transition': 'opacity 0.3s ease',
                '-o-transition': 'opacity 0.3s ease'
            });

            // Event listener para scroll
            $(window).scroll(function() {
                updateHeaderOpacity();
            });

            // Aplica efeito inicial
            updateHeaderOpacity();
        });
    </script>
</body>

</html>