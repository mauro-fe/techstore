<link rel="stylesheet" href="<?= BASE_URL ?>/assets/dist/404.css">


<div class="container">
    <section class="error-page">
        <!-- Elementos flutuantes de fundo -->
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>

        <div class="error-content d-flex flex-column align-items-center">
            <div class="error-illustration">
                <svg class="error-device" viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Smartphone outline -->
                    <rect x="150" y="50" width="200" height="300" rx="20" fill="#1A1A1A" />
                    <rect x="160" y="70" width="180" height="260" rx="5" fill="#F5F5F7" />
                    <circle cx="250" cy="350" r="10" fill="#444" />
                    <rect x="220" y="60" width="60" height="5" rx="2.5" fill="#444" />
                </svg>
                <div class="error-screen">
                    <div class="error-emoji">😵</div>
                    <div class="error-code">404</div>
                </div>
            </div>

            <h1 class="error-title" tabindex="0">404</h1>
            <div class="glitch-effect"></div>
            <h2 class="error-subtitle">Página não encontrada</h2>

            <p class="error-message">
                Ops! A página que você está procurando parece ter sido desconectada do nosso servidor.
                Talvez ela tenha sido movida, renomeada, ou simplesmente não exista.
            </p>


            <!-- Botões de ação -->
            <div class="error-actions">

                <a href="home" class="btn btn-primary">
                    <svg class="icon" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    Página Inicial
                </a>
                <a href="contato" class="btn btn-secondary">
                    <svg class="icon" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    Contato
                </a>
            </div>

            <!-- Sugestões de páginas -->
            <div class="suggestions">
                <h3>Páginas populares</h3>
                <div class="suggestion-links">
                    <a href="celulares/celular/marca/iphone" class="suggestion-link">iPhone</a>
                    <a href="celulares/celular/marca/samsung" class="suggestion-link">Samsung</a>
                    <a href="assistencia-tecnica" class="suggestion-link">Assistência Tecnica</a>
                    <a href="sobre-nos" class="suggestion-link">Sobre Nós</a>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="<?= BASE_URL ?>/assets/js/404.js"></script>