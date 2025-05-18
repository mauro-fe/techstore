<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Megatech - Loja de Celulares</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Estilos do Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <div class="navbar-logo">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a class="navbar-brand" href="#">MegaTech</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link me-4" href="#">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4" href="#">Celulares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4" href="#">Acessórios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4" href="#">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4" href="#">Assistência Técnica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 btn-comprar-nav" href="#">Comprar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <?php

        require 'Dados.php';

        if (isset($_GET["param"])) {
            $p = explode("/", $_GET["param"]);
        }
        $page = $p[0] ?? "home";
        $pages = "pages/{$page}.php";

        if (file_exists($pages)) {
            include $pages;
        } else {
            include "pages/erro.php";
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

    <!-- Bootstrap JS Bundle com Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script do Swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.navbar');

            if (window.scrollY > 50) {
                header.classList.add('transparent');
            } else {
                header.classList.remove('transparent');
            }
        });

        // Aplica a classe no carregamento da página
        window.dispatchEvent(new Event('scroll'));
    </script>
</body>

</html>