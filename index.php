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

    <!-- Estilos do Glide.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">

    <!-- fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" alt="Logo">
            </a>
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

    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg">
                    <h5>Produtos</h5>
                    <ul>
                        <li><a href="#">Smartphones</a></li>
                        <li><a href="#">Tablets</a></li>
                        <li><a href="#">Acessórios</a></li>
                        <li><a href="#">Lançamentos</a></li>
                        <li><a href="#">Ofertas</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg">
                    <h5>Serviços</h5>
                    <ul>
                        <li><a href="#">TechCell Pro</a></li>
                        <li><a href="#">Garantia Estendida</a></li>
                        <li><a href="#">Assistência Técnica</a></li>
                        <li><a href="#">Trade-in</a></li>
                        <li><a href="#">Financiamento</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg">
                    <h5>Loja</h5>
                    <ul>
                        <li><a href="#">Encontre uma Loja</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Trabalhe Conosco</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg">
                    <h5>Sobre</h5>
                    <ul>
                        <li><a href="#">Nossa História</a></li>
                        <li><a href="#">Sustentabilidade</a></li>
                        <li><a href="#">Relações com Investidores</a></li>
                        <li><a href="#">Notícias</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg">
                    <h5>Suporte</h5>
                    <ul>
                        <li><a href="#">Central de Ajuda</a></li>
                        <li><a href="#">Manuais</a></li>
                        <li><a href="#">Atualizações</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Fale Conosco</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-divider"></div>

            <div class="row">
                <div class="col-md-6">
                    <p class="mb-1">Copyright © 2025 TechCell Ltda. Todos os direitos reservados.</p>
                    <p>Brasil</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="me-3">Política de Privacidade</a>
                    <a href="#" class="me-3">Termos de Uso</a>
                    <a href="#">Mapa do Site</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle com Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script do Glide.js -->
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>

</body>

</html>