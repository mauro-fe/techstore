<style>
    /* Estilos específicos da página de erro */
    .error-page {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: var(--spacing-xl) 0;
        position: relative;
        overflow: hidden;
    }

    .error-content {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .error-title {
        font-size: 10rem;
        font-weight: 700;
        background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-accent) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1;
        margin-bottom: var(--spacing-md);
        text-shadow: 4px 4px 0px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .error-subtitle {
        font-size: 2.5rem;
        margin-bottom: var(--spacing-lg);
        font-weight: 600;
    }

    .error-message {
        font-size: 1.125rem;
        margin-bottom: var(--spacing-xl);
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .error-actions {
        display: flex;
        flex-direction: column;
        gap: var(--spacing-md);
        margin-top: var(--spacing-xl);
        align-items: center;
    }

    .error-search {
        max-width: 500px;
        margin: 0 auto var(--spacing-xl);
    }

    .error-search form {
        display: flex;
        gap: var(--spacing-sm);
    }

    .error-search input {
        flex: 1;
        height: 50px;
        border-radius: var(--border-radius-md);
        border: 1px solid var(--color-border);
        padding: 0 var(--spacing-md);
        background-color: var(--color-bg-primary);
        color: var(--color-text-primary);
        font-size: var(--font-size-md);
    }

    .error-search input:focus {
        outline: none;
        border-color: var(--color-primary);
        box-shadow: 0 0 0 3px rgba(0, 113, 227, 0.2);
    }

    .error-illustration {
        max-width: 350px;
        margin: 0 auto var(--spacing-xl);
        position: relative;
    }

    .error-device {
        width: 100%;
        height: auto;
        filter: drop-shadow(0 10px 15px rgba(0, 0, 0, 0.1));
    }

    .error-screen {
        position: absolute;
        top: 12%;
        left: 10%;
        width: 80%;
        height: 65%;
        background: var(--color-bg-secondary);
        border-radius: 4px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .error-emoji {
        font-size: 3rem;
        margin-bottom: var(--spacing-sm);
        animation: float 3s ease-in-out infinite;
    }

    .error-code {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--color-text-secondary);
    }

    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
    }

    .floating-element {
        position: absolute;
        background-color: var(--color-primary);
        opacity: 0.05;
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }

    .floating-element:nth-child(1) {
        width: 300px;
        height: 300px;
        top: -100px;
        left: -150px;
        animation-duration: 8s;
    }

    .floating-element:nth-child(2) {
        width: 200px;
        height: 200px;
        top: 30%;
        right: -100px;
        background-color: var(--color-accent);
        animation-duration: 10s;
        animation-delay: 2s;
    }

    .floating-element:nth-child(3) {
        width: 150px;
        height: 150px;
        bottom: -50px;
        left: 20%;
        background-color: var(--color-secondary);
        animation-duration: 7s;
        animation-delay: 1s;
    }

    .suggestions {
        margin-top: var(--spacing-xl);
        border-top: 1px solid var(--color-border);
        padding-top: var(--spacing-xl);
    }

    .suggestions h3 {
        font-size: 1.25rem;
        margin-bottom: var(--spacing-lg);
    }

    .suggestion-links {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: var(--spacing-md);
    }

    .suggestion-link {
        padding: var(--spacing-md) var(--spacing-lg);
        background-color: var(--color-bg-secondary);
        border-radius: var(--border-radius-md);
        color: var(--color-text-primary);
        font-weight: 500;
        transition: all var(--transition-fast);
    }

    .suggestion-link:hover {
        background-color: var(--color-primary);
        color: white;
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
    }

    .back-interaction {
        position: relative;
        padding-top: var(--spacing-lg);
        margin-top: var(--spacing-xl);
    }

    .glitch-effect {
        position: absolute;
        top: 5px;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        height: 100%;
        opacity: 0;
        background-color: var(--color-accent);
        mix-blend-mode: overlay;
        pointer-events: none;
        transition: opacity 0.2s ease;
    }

    .error-title:hover+.glitch-effect {
        opacity: 0.5;
        animation: glitch 0.3s ease forwards;
    }

    /* Animações */
    @keyframes float {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-15px);
        }

        100% {
            transform: translateY(0);
        }
    }

    @keyframes glitch {
        0% {
            clip-path: inset(40% 0 61% 0);
        }

        20% {
            clip-path: inset(92% 0 1% 0);
        }

        40% {
            clip-path: inset(43% 0 1% 0);
        }

        60% {
            clip-path: inset(25% 0 58% 0);
        }

        80% {
            clip-path: inset(54% 0 7% 0);
        }

        100% {
            clip-path: inset(58% 0 43% 0);
        }
    }

    /* Responsividade */
    @media (max-width: 767px) {
        .error-title {
            font-size: 8rem;
        }

        .error-subtitle {
            font-size: 2rem;
        }

        .error-illustration {
            max-width: 280px;
        }

        .error-actions {
            flex-direction: column;
        }

        .suggestion-links {
            flex-direction: column;
        }

        .floating-element {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .error-title {
            font-size: 5rem;
        }

        .error-subtitle {
            font-size: 1.5rem;
        }

        .error-illustration {
            max-width: 220px;
        }
    }
</style>
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
</body>

</html>