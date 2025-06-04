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

    <style>
    /* Reset e Variáveis CSS */
    :root {
        --primary-color: #00abff;
        --primary-hover: #0095e0;
        --bg-dark: #111;
        --bg-darker: #0a0a0a;
        --text-light: #fff;
        --text-muted: #b0b0b0;
        --transition-fast: 0.2s ease;
        --transition-normal: 0.3s ease;
        --header-height: 50px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    /* Header Principal */
    .header {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        transition: all var(--transition-normal);
    }

    .navbar {
        background-color: var(--bg-dark);
        backdrop-filter: saturate(180%) blur(20px);
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
        padding: 0.75rem 0;
        height: 50px !important;

    }

    /* Logo e Título */
    .navbar-logo {
        gap: 12px;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: transform var(--transition-fast);
    }

    .navbar-brand:hover {
        transform: scale(1.05);
    }

    .navbar-brand img {
        width: 45px;
        height: 45px;
        object-fit: contain;
    }

    .navbar-brand.title {
        color: var(--text-light);
        font-size: 1.25rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin: 0;
    }

    /* Navegação */
    .navbar-nav {
        align-items: center;
    }

    .nav-item {
        position: relative;
    }

    .nav-link {
        color: var(--text-light);
        font-size: 0.95rem;
        font-weight: 500;
        padding: 0.5rem 1rem;
        transition: all var(--transition-fast);
        position: relative;
        text-decoration: none;
        margin-left: 20px;
    }

    /* Efeito hover com underline */
    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: var(--primary-color);
        transition: all var(--transition-fast);
        transform: translateX(-50%);
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        width: 80%;
    }

    .nav-link:hover {
        color: var(--primary-color);
        transform: translateY(-1px);
    }

    /* Indicador de página ativa */
    .nav-link.active {
        color: var(--primary-color);
    }

    /* Dropdown melhorado */
    .dropdown-toggle::after {
        transition: transform var(--transition-fast);
    }

    .dropdown.show .dropdown-toggle::after {
        transform: rotate(180deg);
    }

    .dropdown-menu {
        background: var(--bg-darker);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
        padding: 0.5rem 0;
        margin-top: 0.5rem;
        min-width: 200px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all var(--transition-fast);
    }

    .dropdown-menu.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .dropdown-item {
        color: var(--text-light);
        padding: 0.75rem 1.5rem;
        font-size: 0.9rem;
        transition: all var(--transition-fast);
        position: relative;
        overflow: hidden;
    }

    .dropdown-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 3px;
        height: 0;
        background: var(--primary-color);
        transition: height var(--transition-fast);
    }

    .dropdown-item:hover {
        background: rgba(0, 171, 255, 0.1);
        color: var(--primary-color);
        transform: translateX(5px);
    }

    .dropdown-item:hover::before {
        height: 100%;
    }

    /* Botão Comprar */
    .btn-comprar-nav {
        background: var(--primary-color);
        color: var(--text-light) !important;
        padding: 0.2rem .5rem !important;
        border-radius: 25px;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 1px;
        transition: all var(--transition-fast);
        box-shadow: 0 4px 15px rgba(0, 171, 255, 0.3);
    }

    .btn-comprar-nav:hover {
        background: var(--primary-hover);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 171, 255, 0.4);
    }

    .btn-comprar-nav:hover::after {
        width: 0 !important;
    }

    /* Mobile Menu */
    .navbar-toggler {
        border: none;
        background: transparent;
        padding: 0;
        width: 35px;
        height: 35px;
        position: relative;
        transition: all var(--transition-fast);
    }

    .navbar-toggler:focus {
        box-shadow: none;
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Hamburger animado */
    .hamburger {
        width: 25px;
        height: 18px;
        position: relative;
        cursor: pointer;
    }

    .hamburger span {
        display: block;
        position: absolute;
        height: 2px;
        width: 100%;
        background: var(--text-light);
        border-radius: 2px;
        opacity: 1;
        left: 0;
        transform: rotate(0deg);
        transition: all var(--transition-fast);
    }

    .hamburger span:nth-child(1) {
        top: 0;
    }

    .hamburger span:nth-child(2) {
        top: 8px;
    }

    .hamburger span:nth-child(3) {
        top: 16px;
    }

    .navbar-toggler[aria-expanded="true"] .hamburger span:nth-child(1) {
        top: 8px;
        transform: rotate(135deg);
    }

    .navbar-toggler[aria-expanded="true"] .hamburger span:nth-child(2) {
        opacity: 0;
        left: -25px;
    }

    .navbar-toggler[aria-expanded="true"] .hamburger span:nth-child(3) {
        top: 8px;
        transform: rotate(-135deg);
    }

    /* Responsividade */
    @media (max-width: 991px) {
        .navbar {
            height: 70px !important;

        }

        .navbar-collapse {
            background: var(--bg-darker);
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
        }

        .nav-link {
            padding: 0.75rem 1rem;
            border-radius: 8px;
            margin: 0.25rem 0;
        }

        .nav-link:hover {
            background: rgba(0, 171, 255, 0.1);
        }

        .dropdown-menu {
            position: static;
            box-shadow: none;
            background: transparent;
            border: none;
            padding-left: 1rem;
        }

        .btn-comprar-nav {
            display: inline-block;
            margin-top: 1rem;
            width: 100%;
            text-align: center;
        }
    }

    @media (min-width: 992px) {


        /* Desktop dropdown no hover */
        .navbar .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
    }

    /* Indicador de scroll */
    .scroll-indicator {
        position: fixed;
        top: var(--header-height);
        left: 0;
        width: 100%;
        height: 3px;
        background: rgba(255, 255, 255, 0.1);
        z-index: 999;
        opacity: 0;
        transition: opacity var(--transition-fast);
    }

    .scroll-indicator.visible {
        opacity: 1;
    }

    .scroll-indicator-bar {
        height: 100%;
        background: var(--primary-color);
        width: 0;
        transition: width var(--transition-fast);
    }

    /* Acessibilidade - Focus Visible */
    .nav-link:focus-visible,
    .dropdown-item:focus-visible,
    .btn-comprar-nav:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Skip to content */
    .skip-to-content {
        position: absolute;
        top: -40px;
        left: 0;
        background: var(--primary-color);
        color: var(--text-light);
        padding: 0.5rem 1rem;
        text-decoration: none;
        border-radius: 0 0 8px 0;
        transition: top var(--transition-fast);
    }

    .skip-to-content:focus {
        top: 0;
    }

    /* Demo content */
    .demo-content {
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .demo-section {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <header class="header">
        <!-- Indicador de scroll -->
        <div class="scroll-indicator">
            <div class="scroll-indicator-bar"></div>
        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo -->
                <div class="navbar-logo d-flex align-items-center">
                    <a class="navbar-brand" href="#home" aria-label="MegaTech - Página inicial">
                        <img src="assets/img/logo.png" alt="Logo MegaTech">
                    </a>
                    <a class="navbar-brand title fw-bold text-uppercase" href="home">MegaTech</a>
                </div>

                <!-- Botão Mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Abrir menu de navegação">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>

                <!-- Menu principal -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home" aria-current="page">Home</a>
                        </li>

                        <!-- Dropdown Celulares -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                Celulares
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="celulares/iphone">
                                        <i class="bi bi-apple me-2"></i>iPhone
                                    </a></li>
                                <li><a class="dropdown-item" href="celulares/samsung">
                                        <i class="bi bi-phone me-2"></i>Samsung
                                    </a></li>
                                <li><a class="dropdown-item" href="celulares/xiaomi">
                                        <i class="bi bi-phone-fill me-2"></i>Xiaomi
                                    </a></li>
                                <li><a class="dropdown-item" href="celulares/realme">
                                        <i class="bi bi-phone-vibrate me-2"></i>Realme
                                    </a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="assistencia-tecnica">Assistência Técnica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-nos">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-comprar-nav" href="comprar" role="button">
                                <i class="bi bi-cart-fill me-1"></i>Comprar
                            </a>
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

    // Configuração melhorada do header - JavaScript Puro
    document.addEventListener('DOMContentLoaded', function() {

        // 1. Efeito de opacidade no scroll com melhorias
        const scrollConfig = {
            startFade: 50, // Começa a fade mais cedo
            maxScroll: 400, // Fade completo mais rápido
            minOpacity: 0.85, // Opacidade mínima maior para melhor legibilidade
            shadowStart: 'rgba(0, 0, 0, 0.3)',
            shadowEnd: 'rgba(0, 0, 0, 0.5)'
        };

        function updateHeader() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const header = document.querySelector('.header');
            const navbar = document.querySelector('.navbar');

            // Calcula opacidade
            let opacity = 1;
            if (scrollTop > scrollConfig.startFade) {
                const progress = Math.min((scrollTop - scrollConfig.startFade) /
                    (scrollConfig.maxScroll - scrollConfig.startFade), 1);
                opacity = 1 - (progress * (1 - scrollConfig.minOpacity));
            }

            header.style.opacity = opacity;

            // Adiciona sombra mais forte ao scrollar
            if (scrollTop > 50) {
                navbar.style.boxShadow = `0 2px 20px ${scrollConfig.shadowEnd}`;
            } else {
                navbar.style.boxShadow = `0 2px 20px ${scrollConfig.shadowStart}`;
            }
        }

        // 2. Indicador de progresso de scroll
        function updateScrollProgress() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            const progressBar = document.querySelector('.scroll-progress');
            if (progressBar) {
                progressBar.style.width = scrollPercent + '%';
            }
        }

        function updateActiveSection() {
            const scrollPosition = window.pageYOffset + 100;
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(function(link) {
                const href = link.getAttribute('href');
                if (href && href.startsWith('#') && href.length > 1) {
                    const section = document.querySelector(href);
                    if (section) {
                        const sectionTop = section.offsetTop;
                        const sectionBottom = sectionTop + section.offsetHeight;

                        if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                            navLinks.forEach(l => l.classList.remove('active'));
                            link.classList.add('active');
                        }
                    }
                }
            });
        }


        // 4. Smooth scroll para links âncora
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        anchorLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href !== '#') {
                    const targetElement = document.querySelector(href);
                    if (targetElement) {
                        e.preventDefault();
                        const offset = 80; // Altura do header
                        const targetPosition = targetElement.offsetTop - offset;

                        // Smooth scroll
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });

                        // Fecha o menu mobile se estiver aberto
                        const navbarCollapse = document.querySelector('.navbar-collapse');
                        const navbarToggler = document.querySelector('.navbar-toggler');
                        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                            // Simula clique no botão para fechar (Bootstrap)
                            if (navbarToggler) navbarToggler.click();
                        }
                    }
                }
            });
        });

        // 5. Melhorar comportamento do dropdown no mobile
        if (window.innerWidth < 992) {
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            dropdownToggles.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    const dropdown = this.nextElementSibling;

                    // Fecha outros dropdowns
                    document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
                        if (menu !== dropdown) {
                            menu.classList.remove('show');
                        }
                    });

                    // Toggle do dropdown atual
                    if (dropdown) {
                        dropdown.classList.toggle('show');
                    }
                });
            });

            // Fecha dropdown ao clicar fora
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.dropdown')) {
                    document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
                        menu.classList.remove('show');
                    });
                }
            });
        }

        // 6. Prevenir scroll quando menu mobile está aberto
        let scrollPosition = 0;
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('.navbar-collapse');

        if (navbarToggler) {
            navbarToggler.addEventListener('click', function() {
                if (!navbarCollapse.classList.contains('show')) {
                    scrollPosition = window.pageYOffset;
                    document.body.style.overflow = 'hidden';
                    document.body.style.position = 'fixed';
                    document.body.style.top = `-${scrollPosition}px`;
                    document.body.style.width = '100%';
                } else {
                    document.body.style.overflow = '';
                    document.body.style.position = '';
                    document.body.style.top = '';
                    window.scrollTo(0, scrollPosition);
                }
            });
        }

        // 7. Event listeners otimizados com throttle
        let scrollTimer;
        window.addEventListener('scroll', function() {
            if (scrollTimer) {
                window.cancelAnimationFrame(scrollTimer);
            }
            scrollTimer = window.requestAnimationFrame(function() {
                updateHeader();
                updateScrollProgress();
                updateActiveSection();
            });
        });

        // 8. Adicionar feedback tátil em dispositivos móveis
        if ('ontouchstart' in window) {
            const touchElements = document.querySelectorAll('.nav-link, .dropdown-item, .btn-comprar-nav');

            touchElements.forEach(function(element) {
                element.addEventListener('touchstart', function() {
                    this.classList.add('touch-active');
                });

                element.addEventListener('touchend', function() {
                    const el = this;
                    setTimeout(function() {
                        el.classList.remove('touch-active');
                    }, 100);
                });
            });
        }

        // Inicializar
        updateHeader();
        updateScrollProgress();
        updateActiveSection();
    });
    </script>
</body>

</html>