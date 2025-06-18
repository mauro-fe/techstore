<?php

$protocolo = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
define('BASE_URL', $protocolo . "://" . $_SERVER['SERVER_NAME'] . "/megatech/");


$BASE_URL = $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];
?>
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

    <base href="<?= BASE_URL ?>">
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

    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/index.css">



</head>

<body>

    <!-- Overlay do Menu Mobile -->
    <div class="mobile-menu-overlay"></div>

    <!-- Header -->
    <header class="header" role="banner">
        <nav class="navbar" aria-label="Menu principal">
            <div class="container">
                <div class="navbar-wrapper">
                    <!-- Logo -->
                    <div class="navbar-logo">
                        <a class="navbar-brand" href="home" aria-label="MegaTech - Página inicial" data-aos="fade-right"
                            data-aos-delay="100">
                            <img src="assets/img/logo.png" alt="Logo MegaTech" title="Logo MegaTech">
                        </a>
                        <a class="navbar-brand title" href="home" data-aos="fade-right" data-aos-delay="200"
                            title="MEGATECH">MegaTech</a>
                    </div>

                    <!-- Botão Mobile -->
                    <button class="navbar-toggler" type="button" aria-expanded="false"
                        aria-label="Abrir menu de navegação">
                        <span class="navbar-toggler-icon"><span></span></span>
                    </button>

                    <!-- Menu principal -->
                    <ul class="navbar-nav">
                        <li class="nav-item" data-aos="fade-left" data-aos-delay="100">
                            <a class="nav-link" href="home" aria-current="page" data-tooltip="Página inicial">
                                <i class="fas fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>

                        <!-- Dropdown Celulares -->
                        <li class="nav-item dropdown" data-aos="fade-left" data-aos-delay="200">
                            <a class="nav-link dropdown-toggle" href="#" role="button" aria-haspopup="true"
                                aria-expanded="false" data-tooltip="Marcas de celulares">
                                <i class="fas fa-mobile-alt"></i>
                                <span>Celulares</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="<?= BASE_URL ?>celulares/celular/marca/iphone">
                                        <i class="fab fa-apple"></i>
                                        iPhone
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= BASE_URL ?>celulares/celular/marca/samsung">
                                        <i class="fas fa-mobile"></i>
                                        Samsung
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= BASE_URL ?>celulares/celular/marca/xiaomi">
                                        <i class="fas fa-mobile-alt"></i>
                                        Xiaomi
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= BASE_URL ?>celulares/celular/marca/realme">
                                        <i class="fas fa-mobile-alt"></i>
                                        Realme
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="assistencia-tecnica" data-tooltip="Consertos e manutenção"
                                data-aos="fade-left" data-aos-delay="300">
                                <i class="fas fa-tools"></i>
                                <span>Assistência Técnica</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-nos" data-tooltip="Conheça nossa história"
                                data-aos="fade-left" data-aos-delay="400">
                                <i class="fas fa-info-circle"></i>
                                <span>Sobre nós</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato" data-tooltip="Fale conosco" data-aos="fade-left"
                                data-aos-delay="500">
                                <i class="fas fa-envelope"></i>
                                <span>Contato</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Indicador de progresso de scroll -->
            <div class="scroll-progress"></div>
        </nav>
    </header>
    <main>
        <?php
        // ini_set('display_errors', 1);
        // error_reporting(E_ALL);
        require_once 'Products.php';
        require_once 'Dados/Acessorios.php';
        require_once 'Dados/Avaliacoes.php';
        require_once 'Dados/Iphone.php';
        require_once 'Dados/Samsung.php';
        require_once 'Dados/Xiaomi.php';
        require_once 'Dados/Realme.php';
        require_once 'Helpers/utils.php';

        $param = $_GET['param'] ?? '';
        $segments = explode('/', $param);

        // Detecta página e arquivo
        $folder = $segments[0] ?? 'home';
        $file   = $segments[1] ?? 'index';

        // Permite extrair parâmetros adicionais tipo /marca/iphone
        for ($i = 2; $i < count($segments); $i += 2) {
            $_GET[$segments[$i]] = $segments[$i + 1] ?? '';
        }

        // Caminho da página
        $path = ($folder === 'celulares')
            ? "pages/celulares/{$file}.php"
            : "pages/{$folder}.php";

        if (file_exists($path)) {
            include $path;
        } else {
            include 'pages/404.php';
        }
        ?>

    </main>

    <style>
        .footer-containt {
            display: flex;
            flex-direction: column !important;
        }
    </style>
    <button class="scroll-to-top" id="scrollToTop" title="Voltar ao topo"></button>
    <!-- Footer -->
    <footer class="footer">
        <!-- Links Section -->
        <section class="footer-links">
            <div class="container">
                <div class="row">
                    <!-- Coluna 1: Loja -->
                    <div class="col-6 col-md-3 footer-column">
                        <h3>EXPLORAR</h3>
                        <ul>
                            <li><a href="home" class="footer-link" data-tooltip="Página inicial">Home</a></li>
                            <li><a href="assistencia-tecnica" class="footer-link"
                                    data-tooltip="Consertos e manutenção">Assistência Técnica</a></li>
                            <li><a href="sobre-nos" class="footer-link" data-tooltip="Nossa história">Sobre Nós</a></li>
                            <li><a href="contato" class="footer-link" data-tooltip="Fale conosco">Contato</a></li>
                        </ul>
                    </div>

                    <!-- Coluna 2: Marcas -->
                    <div class="col-6 col-md-3 footer-column">
                        <h3>MARCAS</h3>
                        <ul>
                            <li>
                                <a href="celulares/celular/marca/iphone" class="footer-link">
                                    iPhone
                                </a>
                            </li>
                            <li>
                                <a href="celulares/celular/marca/samsung" class="footer-link">
                                    Samsung
                                </a>
                            </li>
                            <li>
                                <a href="celulares/celular/marca/xiaomi" class="footer-link">
                                    Xiaomi
                                </a>
                            </li>
                            <li>
                                <a href="celulares/celular/marca/realme" class="footer-link">
                                    Realme
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Coluna 3: Suporte -->
                    <div class="col-6 col-md-3 footer-column">
                        <h3>SUPORTE</h3>
                        <ul>
                            <li><a href="assistencia-tecnica#perguntas-frequentes" class="footer-link">Perguntas
                                    Frequentes</a></li>
                            <li><a href="contato" class="footer-link">Fale conosco</a></li>
                            <li><a href="assistencia-tecnica#nossos-servicos" class="footer-link">Nossos Serviços</a>
                            </li>
                            <li><a href="#" class="footer-link">Garantia de até 1 ano</a></li>

                        </ul>
                    </div>

                    <!-- Coluna 4: Contato e Social -->
                    <div class="col-6 col-md-3 footer-column">
                        <h3>MEGAETCH</h3>
                        <ul>
                            <li class="text-white mb-2">
                                <i class="fas fa-map-marker-alt me-2" style="color: #00abff;"></i>
                                Campina da Lagoa, PR
                            </li>
                            <li class="text-white mb-2">
                                <i class="fas fa-phone me-2" style="color: #00abff;"></i>
                                (44) 99801-1086
                            </li>
                            <li class="text-white mb-3">
                                <i class="fas fa-clock me-2" style="color: #00abff;"></i>
                                Seg-Sex: 8h-18h
                            </li>
                            <li class="text-white mb-3">
                                <i class="fas fa-clock me-2" style="color: #00abff;"></i>
                                Sab: 8h-12h
                            </li>
                            <li class="text-white fw-bold">
                                <i class="fas fa-credit-card me-2" style="color: #00abff;"></i>
                                Parcelamos em até 18x!
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bottom Bar -->
        <section class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <a href="home" class="footer-logo hover-lift">
                        <img src="assets/img/logo.png" alt="MegaTech Logo">
                        <span>MegaTech</span>
                    </a>

                    <div class="footer-legal-links">
                        <span>&copy; 2025 MegaTech. Todos os direitos reservados.</span>
                    </div>

                    <!-- Social Links -->
                    <div class="social-links">
                        <a href="https://wa.me/+5544998011086" class="social-link whatsapp hover-lift" title="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/megatech_cdl/" class="social-link instagram hover-lift"
                            title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/MegaTech2k21/" class="social-link facebook hover-lift"
                            title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </footer>


    <!-- Script do Swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Jquery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>

    <!-- Aos Master -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="<?= BASE_URL ?>/assets/js/index.js"></script>
</body>

</html>