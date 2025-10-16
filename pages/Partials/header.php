<?php
$protocolo = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
define('BASE_URL', $protocolo . "://" . $_SERVER['SERVER_NAME'] . "/techstore/");

$BASE_URL = $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MegaTech | Smartphones Premium e Assistência Técnica</title>

    <!-- SEO -->
    <meta name="description"
        content="MegaTech - A melhor loja de smartphones e acessórios do Brasil. iPhone, Samsung, Xiaomi, Realme com os melhores preços e assistência técnica especializada.">
    <meta name="keywords"
        content="smartphone, celular, iPhone, Samsung, Xiaomi, Realme, acessórios, assistência técnica, loja de celular">
    <meta name="author" content="MegaTech">

    <!-- Open Graph (Redes sociais) -->
    <meta property="og:title" content="MegaTech - Loja Premium de Smartphones">
    <meta property="og:description"
        content="Descubra os melhores smartphones e acessórios com assistência técnica especializada">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://megatech.com.br">
    <meta property="og:image" content="<?= BASE_URL ?>assets/img/logo.png">

    <!-- Canonical -->
    <link rel="canonical" href="https://megatech.com.br">

    <!-- Base URL -->
    <base href="<?= BASE_URL ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

    <!-- Font: Inter (com preload otimizado) -->
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap">
    </noscript>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- AOS (Animate on Scroll) -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <!-- Seu CSS principal -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/index.css">
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