<?php

$protocolo = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
define('BASE_URL', $protocolo . "://" . $_SERVER['SERVER_NAME'] . "/megatech2/");


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

    <link rel="stylesheet" href="assets/css/style.css">

    <style>
    /* Reset e Base */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    /* Header Principal */
    .header {
        position: fixed;
        top: 0;
        z-index: 1000;
        transition: all 0.3s ease;
        width: 100%;

    }

    .navbar {
        background: linear-gradient(135deg, #111 0%, #1a1a1a 100%);
        backdrop-filter: saturate(180%) blur(20px);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
        padding: 0;
        width: 100%;

    }

    /* Wrapper do navbar */
    .navbar-wrapper {
        display: flex;
        align-items: center;
        justify-content: space-between !important;
        position: relative;
    }

    /* Indicador de Progresso de Scroll */
    .scroll-progress {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 3px;
        background: linear-gradient(90deg, #00abff 0%, #0099ff 100%);
        transition: width 0.1s ease;
        width: 0%;
    }

    /* Logo e Título */
    .navbar-logo {
        display: flex;
        align-items: center;
        z-index: 1002;
    }

    .navbar-brand {
        color: #fff;
        text-decoration: none;
        transition: transform 0.3s ease;
        display: flex;
        align-items: center;
        margin-right: 8px;
    }

    .navbar-brand:hover {
        transform: scale(1.05);
    }

    .navbar-brand img {
        width: 45px;
        height: 45px;
        object-fit: contain;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
    }

    .navbar-brand.title {
        font-size: 1.2rem;
        font-weight: 700;
        letter-spacing: -0.5px;
        background: linear-gradient(135deg, #fff 0%, #e0e0e0 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-transform: uppercase;
    }

    /* Menu Navigation Desktop */
    .navbar-nav {
        display: flex;
        flex-direction: row !important;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 15px;
        align-items: center;
    }

    .nav-item {
        position: relative;
    }

    .nav-link {
        color: #e0e0e0;
        text-decoration: none;
        font-size: 12px;
        font-weight: 500;
        padding: 8px 16px;
        border-radius: 6px;
        transition: all 0.3s ease;
        position: relative;
        display: flex;
        align-items: center;
        gap: 6px;
        cursor: pointer;
    }

    .nav-link:hover {
        background: rgba(0, 171, 255, 0.1);
        color: #fff;
        transform: translateY(-2px);
    }

    /* Indicador de Menu Ativo */
    .nav-link.active {
        background: rgba(0, 171, 255, 0.15);
        color: #00abff;

    }

    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 50%;
        transform: translateX(-50%);
        width: 30px;
        height: 3px;
        background: #00abff;
        border-radius: 2px;
    }

    /* Ícones no Menu */
    .nav-link i {
        font-size: 14px;
        opacity: 0.8;
    }

    /* Dropdown Desktop */
    .dropdown {
        position: relative;
    }



    .dropdown.show .dropdown-toggle::after {
        transform: rotate(180deg);
    }

    .dropdown-menu {
        position: absolute !important;
        top: 100%;
        left: 0;
        background: #1a1a1a;
        border: none;
        border-radius: 8px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
        padding: 8px;
        margin-top: 8px;
        min-width: 180px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
        list-style: none;
        font-size: 14px;
    }

    .dropdown-menu.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .dropdown-item {
        color: #e0e0e0;
        text-decoration: none;
        padding: 10px 16px;
        border-radius: 6px;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
    }

    .dropdown-item:hover {
        background: rgba(0, 171, 255, 0.15);
        color: #fff;
        transform: translateX(4px);
    }

    .dropdown-item i {
        width: 20px;
        text-align: center;
        opacity: 0.7;
    }

    /* Botão Comprar Destacado */
    .btn-comprar-nav {
        background: linear-gradient(135deg, #00abff 0%, #0088ff 100%);
        color: #fff !important;
        font-weight: 600;
        padding: 5px 10px;
        border-radius: 25px;
        box-shadow: 0 4px 15px rgba(0, 171, 255, 0.3);
        transition: all 0.3s ease;
        text-transform: uppercase;
        font-size: 10px;
        letter-spacing: 0.5px;
    }

    .btn-comprar-nav:hover {
        background: linear-gradient(135deg, #0099ff 0%, #0077ff 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 171, 255, 0.4);
    }

    .btn-comprar-nav:active {
        transform: translateY(0);
    }

    /* Botão Mobile */
    .navbar-toggler {
        display: none;
        border: none;
        background: transparent;
        padding: 10px;
        cursor: pointer;
        position: relative;
        width: 48px;
        height: 48px;
        z-index: 1002;
        transition: all 0.3s ease;
    }

    .navbar-toggler:hover {
        transform: scale(1.1);
    }

    .navbar-toggler:focus {
        outline: none;
    }

    .navbar-toggler-icon {
        position: relative;
        width: 28px;
        height: 24px;
        margin: auto;
    }

    .navbar-toggler-icon span,
    .navbar-toggler-icon span::before,
    .navbar-toggler-icon span::after {
        position: absolute;
        content: '';
        left: 0;
        width: 100%;
        height: 3px;
        background: #fff;
        border-radius: 3px;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .navbar-toggler-icon span {
        top: 50%;
        transform: translateY(-50%);
    }

    .navbar-toggler-icon span::before {
        top: -10px;
    }

    .navbar-toggler-icon span::after {
        bottom: -10px;
    }

    /* Animação do Menu Mobile */
    .navbar-toggler.active .navbar-toggler-icon span {
        background: transparent;
    }

    .navbar-toggler.active .navbar-toggler-icon span::before {
        transform: rotate(45deg);
        top: 0;
    }

    .navbar-toggler.active .navbar-toggler-icon span::after {
        transform: rotate(-45deg);
        bottom: 0;
    }

    /* Overlay Mobile Menu */
    .mobile-menu-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 999;
    }

    .mobile-menu-overlay.show {
        opacity: 1;
        visibility: visible;
    }

    /* Skip Navigation */
    .skip-nav {
        position: absolute;
        top: -40px;
        left: 0;
        background: #00abff;
        color: #fff;
        padding: 8px 16px;
        text-decoration: none;
        border-radius: 0 0 8px 0;
        transition: top 0.3s ease;
    }

    .skip-nav:focus {
        top: 0;
        outline: none;
    }

    /* Tooltip */
    .nav-link[data-tooltip]::before {
        content: attr(data-tooltip);
        position: absolute;
        bottom: -30px;
        left: 50%;
        transform: translateX(-50%);
        background: #333;
        color: #fff;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 12px;
        white-space: nowrap;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        pointer-events: none;
        z-index: 1000;
    }

    .nav-link[data-tooltip]:hover::before {
        opacity: 1;
        visibility: visible;
        bottom: -35px;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 1rem;
    }

    .social-link {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        font-size: 1.5rem;
        transition: all 0.5s ease;
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }


    .social-link:hover {
        transform: translateY(-5px) scale(1.1);
    }

    .social-link.whatsapp {
        background: linear-gradient(135deg, #25D366, #128C7E);
    }

    .social-link.whatsapp:hover {
        box-shadow: 0 0 20px #25D366;
    }

    .social-link.instagram {
        background: linear-gradient(135deg, #E4405F, #F77737);
    }

    .social-link.instagram:hover {
        box-shadow: 0 0 20px #E4405F;
    }

    .social-link.facebook {
        background: linear-gradient(135deg, #1877F2, #42A5F5);
    }

    .social-link.facebook:hover {
        box-shadow: 0 0 20px #42A5F5;
    }

    .social-link.linkedin {
        background: linear-gradient(135deg, #0077B5, #00A0DC);
    }

    .social-link.linkedin:hover {
        box-shadow: 0 0 20px #0077B5;

    }


    footer .social-link {
        display: inline-block;
        width: 36px !important;
        height: 36px;
        text-align: center;
    }

    footer .contact-info-card::before,
    footer .social-section::before,
    footer .contact-form-section::before,
    footer .map-card-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }


    footer .contact-info-card:hover::before,
    footer .social-section:hover::before,
    footer .contact-form-section:hover::before,
    footer .map-card-section:hover::before {
        transform: scaleX(1);
    }


    footer .social-link:hover {
        color: #fff;
    }



    /* Responsividade */
    @media (max-width: 991px) {

        body.menu-open {
            overflow: hidden;
        }

        .navbar {
            height: 70px;
        }

        .navbar-toggler {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar-nav {
            position: fixed;
            top: 0;
            right: -100%;
            width: 80%;
            max-width: 400px;
            height: 100vh;
            background: #0d0d0d;
            flex-direction: column;
            padding: 100px 30px 30px;
            gap: 15px;
            overflow-y: auto;
            transition: right 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            z-index: 1001;
            justify-content: flex-start;
            align-items: stretch;
            flex-direction: column !important;

        }

        .navbar-nav.show {
            right: 0;
        }

        .nav-item {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.4s ease;
        }

        .navbar-nav.show .nav-item {
            opacity: 1;
            transform: translateX(0);
        }

        /* Animação escalonada dos itens */
        .navbar-nav.show .nav-item:nth-child(1) {
            transition-delay: 0.1s;
        }

        .navbar-nav.show .nav-item:nth-child(2) {
            transition-delay: 0.2s;
        }

        .navbar-nav.show .nav-item:nth-child(3) {
            transition-delay: 0.3s;
        }

        .navbar-nav.show .nav-item:nth-child(4) {
            transition-delay: 0.4s;
        }

        .navbar-nav.show .nav-item:nth-child(5) {
            transition-delay: 0.5s;
        }

        .navbar-nav.show .nav-item:nth-child(6) {
            transition-delay: 0.6s;
        }

        .nav-link {
            padding: 8px 20px;
            font-size: 18px;
            width: 100%;
            text-align: left;
            border-radius: 12px;
            border: 1px solid transparent;
            transition: all 0.3s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            background: rgba(0, 171, 255, 0.1);
            border-color: rgba(0, 171, 255, 0.3);
            transform: translateX(10px);
        }

        .nav-link.active::after {
            display: none;
        }

        /* Dropdown Mobile */
        .dropdown-menu {
            position: static !important;
            width: 90%;
            margin-top: 10px;
            margin-left: 20px;
            box-shadow: none;
            background: rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 1;
            visibility: visible;
            transform: none;
            display: none;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-item {
            font-size: 16px;
            padding: 10px 20px !important;
        }

        .btn-comprar-nav {
            margin-top: 30px;
            width: 100%;
            text-align: center;
            padding: 12px 24px;
            font-size: 16px;
        }

        .nav-link[data-tooltip]::before {
            display: none;
        }

        /* Linha divisória no menu mobile */
        .nav-item+.nav-item {
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            padding-top: 20px;
        }
    }

    @media (min-width: 992px) {

        .mobile-menu-overlay {
            display: none !important;
        }
    }

    /* Efeitos adicionais */
    html {
        scroll-behavior: smooth;
    }

    .touch-active {
        transform: scale(0.95);
    }

    /* Conteúdo Demo */
    .demo-content {
        min-height: 200vh;
        padding: 40px 20px;
    }

    .demo-section {
        background: white;
        border-radius: 12px;
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }

    h1,
    h2 {
        color: #333;
        margin-bottom: 15px;
    }

    p {
        color: #666;
        line-height: 1.6;
    }

    ul {
        color: #666;
        line-height: 1.8;
    }
    </style>
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
                        <li class="nav-item" data-aos="fade-left" data-aos-delay="600">
                            <a class="nav-link btn-comprar-nav" href="https://wa.me/+5544998011086"
                                aria-label="Comprar agora">
                                <i class="fas fa-shopping-cart"></i>
                                Comprar
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
    <footer class="footer py-4 bg-dark text-white">
        <div class="container">
            <div class="d-flex footer-containt">
                <div class="row align-items-start">
                    <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-3 footer-heading">Páginas</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a class="footer-link d-flex align-items-center" href="home" aria-current="page"
                                    data-tooltip="Página inicial">
                                    <i class="fas fa-home me-2"></i> Home
                                </a>
                            </li>
                            <li>
                                <a class="footer-link d-flex align-items-center" href="assistencia-tecnica"
                                    data-tooltip="Consertos e manutenção">
                                    <i class="fas fa-tools me-2"></i> Assistência Técnica
                                </a>
                            </li>
                            <li>
                                <a class="footer-link d-flex align-items-center" href="sobre-nos"
                                    data-tooltip="Conheça nossa história">
                                    <i class="fas fa-info-circle me-2"></i> Sobre nós
                                </a>
                            </li>
                            <li>
                                <a class="footer-link d-flex align-items-center" href="contato"
                                    data-tooltip="Fale conosco">
                                    <i class="fas fa-envelope me-2"></i> Contato
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-3 footer-heading">Celulares</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a class="footer-link d-flex align-items-center"
                                    href="<?= BASE_URL ?>celulares/celular/marca/iphone">
                                    <i class="fab fa-apple me-2"></i> iPhone
                                </a>
                            </li>
                            <li>
                                <a class="footer-link d-flex align-items-center"
                                    href="<?= BASE_URL ?>celulares/celular/marca/samsung">
                                    <i class="fas fa-mobile me-2"></i> Samsung
                                </a>
                            </li>
                            <li>
                                <a class="footer-link d-flex align-items-center"
                                    href="<?= BASE_URL ?>celulares/celular/marca/xiaomi">
                                    <i class="fas fa-mobile-alt me-2"></i> Xiaomi
                                </a>
                            </li>
                            <li>
                                <a class="footer-link d-flex align-items-center"
                                    href="<?= BASE_URL ?>celulares/celular/marca/realme">
                                    <i class="fas fa-mobile-alt me-2"></i> Realme
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-3 footer-heading">Fale Conosco</h5>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-map-marker-alt me-2"></i> Campina da Lagoa, PR</li>
                            <li><i class="fas fa-phone me-2"></i> (44) 99801-1086</li>
                            <li><i class="fas fa-clock me-2"></i> Seg-Sex: 9h-18h</li>
                        </ul>
                        <p class="small text-muted mt-2">Parcelamos em até 18x!</p>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-4 mb-md-0 text-center text-md-end">

                        <p class="small text-muted mb-3">Sua tecnologia com confiança e preço justo.</p>

                    </div>
                </div>

                <hr class="my-4 border-secondary">
                <div class="row align-items-center teste">
                    <div class="col-md-3 text-center text-md-start">
                        <a href="home"
                            class="d-inline-flex align-items-center gap-2 text-white text-decoration-none mb-3">
                            <img src="assets/img/logo.png" alt="Logo MegaTech" style="height: 50px;">
                            <span class="fw-bold fs-4">MegaTech</span>
                        </a>
                    </div>
                    <div class="col-md-3 text-center text-md-start">
                        <p class="mb-0 small">&copy; 2025 MegaTech. Todos os direitos reservados.</p>
                    </div>
                    <div class="col-md-3 text-center text-md-end">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="politica-privacidade"
                                    class=" text-decoration-none small">Política de Privacidade</a></li>
                            <li class="list-inline-item"><span class=" small">|</span></li>
                            <li class="list-inline-item"><a href="termos-servico"
                                    class=" text-decoration-none small">Termos de Serviço</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-center text-md-end">
                        <a href="https://wa.me/+5544998011086" class="social-link whatsapp me-2" title="WhatsApp"><i
                                class="fab fa-whatsapp"></i></a>
                        <a href="https://www.instagram.com/megatech_cdl/" class="social-link instagram me-2"
                            title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/MegaTech2k21/" class="social-link facebook"
                            title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <style>
    .footer {
        background-color: #212529 !important;
        /* Um tom de cinza escuro para o fundo */
        color: #f8f9fa;
        /* Cor do texto principal */
    }

    .footer .footer-heading {
        color: #0d6efd;
        /* Azul para os títulos */
        font-weight: bold;
    }

    .footer .footer-link {
        color: #adb5bd;
        /* Cinza claro para os links */
        text-decoration: none;
        transition: color 0.3s ease;
        margin-bottom: 0.5rem;
        /* Espaçamento entre os itens da lista */
    }

    .footer .footer-link:hover {
        color: #ffffff;
        /* Branco ao passar o mouse */
    }

    .footer .list-unstyled li {
        margin-bottom: 0.3rem;
        /* Espaçamento mais compacto para listas */
    }

    .footer .social-links a {
        color: #ffffff;
        font-size: 1.5rem;
        margin: 0 0.5rem;
        transition: color 0.3s ease;
    }

    .footer .social-link.whatsapp:hover {
        color: #25D366;
        /* Verde do WhatsApp */
    }

    .footer .social-link.instagram:hover {
        color: #C13584;
        /* Rosa do Instagram */
    }

    .footer .social-link.facebook:hover {
        color: #1877F2;
        /* Azul do Facebook */
    }

    /* Estilo para o botão "Comprar Agora" */
    .footer .btn-success {
        background-color: #28a745;
        /* Verde Bootstrap padrão */
        border-color: #28a745;
    }

    .footer .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
    </style>

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

    $(document).ready(function() {

        // 1. Efeito de opacidade no scroll
        const scrollConfig = {
            startFade: 50,
            maxScroll: 400,
            minOpacity: 0.85,
            shadowStart: 'rgba(0, 0, 0, 0.3)',
            shadowEnd: 'rgba(0, 0, 0, 0.5)'
        };

        function updateHeader() {
            const scrollTop = $(window).scrollTop();
            const header = $('.header');
            const navbar = $('.navbar');

            let opacity = 1;
            if (scrollTop > scrollConfig.startFade) {
                const progress = Math.min((scrollTop - scrollConfig.startFade) /
                    (scrollConfig.maxScroll - scrollConfig.startFade), 1);
                opacity = 1 - (progress * (1 - scrollConfig.minOpacity));
            }

            header.css('opacity', opacity);

            if (scrollTop > 50) {
                navbar.css('box-shadow', `0 2px 20px ${scrollConfig.shadowEnd}`);
            } else {
                navbar.css('box-shadow', `0 2px 20px ${scrollConfig.shadowStart}`);
            }
        }

        // 2. Indicador de progresso de scroll
        function updateScrollProgress() {
            const scrollTop = $(window).scrollTop();
            const docHeight = $(document).height() - $(window).height();
            const scrollPercent = (scrollTop / docHeight) * 100;
            $('.scroll-progress').css('width', scrollPercent + '%');
        }

        // 3. Destacar item ativo baseado na seção visível
        function updateActiveSection() {
            const scrollPosition = $(window).scrollTop() + 100;

            $('.nav-link').each(function() {
                const href = $(this).attr('href');
                if (href && href.startsWith('#') && href !== '#') {
                    const section = $(href);
                    if (section.length) {
                        const sectionTop = section.offset().top;
                        const sectionBottom = sectionTop + section.outerHeight();

                        if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                            $('.nav-link').removeClass('active');
                            $(this).addClass('active');
                        }
                    }
                }
            });
        }

        // 4. Toggle do menu mobile com overlay
        $('.navbar-toggler').on('click', function() {
            $(this).toggleClass('active');
            $('.navbar-nav').toggleClass('show');
            $('.mobile-menu-overlay').toggleClass('show');
            $('body').toggleClass('menu-open');

            // Reset das animações dos itens
            if (!$('.navbar-nav').hasClass('show')) {
                $('.nav-item').css('transition-delay', '0s');
            }
        });

        // Fecha menu ao clicar no overlay
        $('.mobile-menu-overlay').on('click', function() {
            $('.navbar-toggler').removeClass('active');
            $('.navbar-nav').removeClass('show');
            $('.mobile-menu-overlay').removeClass('show');
            $('body').removeClass('menu-open');
        });

        // 5. Dropdown functionality
        $('.dropdown-toggle').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            const $dropdown = $(this).parent('.dropdown');
            const $menu = $(this).next('.dropdown-menu');

            if (window.innerWidth >= 992) {
                // Desktop - comportamento normal
                $('.dropdown').not($dropdown).removeClass('show');
                $('.dropdown-menu').not($menu).removeClass('show');
                $dropdown.toggleClass('show');
                $menu.toggleClass('show');
            } else {
                // Mobile - apenas toggle do menu
                $menu.toggleClass('show');
                $(this).attr('aria-expanded', $menu.hasClass('show'));
            }
        });

        // Fecha dropdown ao clicar fora (apenas desktop)
        $(document).on('click', function(e) {
            if (window.innerWidth >= 992 && !$(e.target).closest('.dropdown').length) {
                $('.dropdown').removeClass('show');
                $('.dropdown-menu').removeClass('show');
            }
        });

        // 6. Smooth scroll para links âncora
        $('a[href^="#"]').on('click', function(e) {
            const href = $(this).attr('href');
            if (href !== '#' && $(href).length) {
                e.preventDefault();
                const offset = 80;
                $('html, body').animate({
                    scrollTop: $(href).offset().top - offset
                }, 500);

                // Fecha o menu mobile se estiver aberto
                if ($('.navbar-nav').hasClass('show')) {
                    $('.navbar-toggler').click();
                }
            }
        });

        // 7. Event listeners otimizados
        let scrollTimer;
        $(window).on('scroll', function() {
            if (scrollTimer) {
                window.cancelAnimationFrame(scrollTimer);
            }
            scrollTimer = window.requestAnimationFrame(function() {
                updateHeader();
                updateScrollProgress();
                updateActiveSection();
            });
        });

        // 8. Feedback tátil para mobile
        if ('ontouchstart' in window) {
            $('.nav-link, .dropdown-item, .btn-comprar-nav').on('touchstart', function() {
                $(this).addClass('touch-active');
            }).on('touchend', function() {
                const $this = $(this);
                setTimeout(function() {
                    $this.removeClass('touch-active');
                }, 100);
            });
        }

        // 9. Resize handler
        let resizeTimer;
        $(window).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth >= 992) {
                    $('.navbar-nav').removeClass('show');
                    $('.navbar-toggler').removeClass('active');
                    $('.mobile-menu-overlay').removeClass('show');
                    $('body').removeClass('menu-open');
                    $('.dropdown-menu').removeClass('show');
                }
            }, 250);
        });

        // 10. ESC key para fechar menu
        $(document).on('keyup', function(e) {
            if (e.key === 'Escape' && $('.navbar-nav').hasClass('show')) {
                $('.navbar-toggler').click();
            }
        });

        // Inicializar
        updateHeader();
        updateScrollProgress();
        updateActiveSection();
    });

    // 11. Intersection Observer
    if ('IntersectionObserver' in window) {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link[href^="#"]');

        const observerOptions = {
            rootMargin: '-20% 0px -70% 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === `#${entry.target.id}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }, observerOptions);

        sections.forEach(section => observer.observe(section));
    }
    </script>

</body>

</html>