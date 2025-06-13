<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/404.css">


<div class="container">
    <section class="error-page">
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
        </div>

    </section>
</div>

<!-- Scripts personalizados -->
<script>
    // Animação emoji interativo
    const errorEmoji = document.querySelector('.error-emoji');
    const emojis = ['😵', '🤔', '😅', '🤖', '👻'];
    let currentIndex = 0;

    errorEmoji.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % emojis.length;
        errorEmoji.textContent = emojis[currentIndex];
        errorEmoji.style.animation = 'none';
        setTimeout(() => {
            errorEmoji.style.animation = 'float 3s ease-in-out infinite';
        }, 10);
    });
</script>