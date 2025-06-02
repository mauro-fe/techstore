<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechPro Max - Redefinindo o Futuro</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --text-primary: #1d1d1f;
        --text-secondary: #86868b;
        --bg-primary: #ffffff;
        --bg-secondary: #f5f5f7;
        --accent: #0071e3;
        --border: #d2d2d7;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        color: var(--text-primary);
        background: var(--bg-primary);
        line-height: 1.47;
        -webkit-font-smoothing: antialiased;
        overflow-x: hidden;
    }

    /* Navegação */
    nav {
        position: fixed;
        top: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        z-index: 1000;
        border-bottom: 1px solid var(--border);
    }

    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 48px;
    }

    .nav-logo {
        font-size: 20px;
        font-weight: 600;
        color: var(--text-primary);
        text-decoration: none;
    }

    .nav-links {
        display: flex;
        gap: 30px;
        list-style: none;
    }

    .nav-links a {
        color: var(--text-primary);
        text-decoration: none;
        font-size: 14px;
        transition: opacity 0.3s ease;
    }

    .nav-links a:hover {
        opacity: 0.7;
    }

    /* Hero Section */
    .hero {
        margin-top: 48px;
        padding: 80px 20px;
        text-align: center;
        background: var(--bg-secondary);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .hero-content {
        max-width: 980px;
        margin: 0 auto;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 1s ease forwards;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-label {
        color: var(--accent);
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .hero h1 {
        font-size: 56px;
        font-weight: 700;
        line-height: 1.07;
        letter-spacing: -0.005em;
        margin-bottom: 16px;
    }

    .hero-subtitle {
        font-size: 28px;
        font-weight: 400;
        color: var(--text-secondary);
        margin-bottom: 40px;
    }

    .hero-image {
        width: 100%;
        max-width: 800px;
        height: 400px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 20px;
        margin: 40px auto;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }

    .hero-image::before {
        content: "TechPro Max";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 48px;
        font-weight: 700;
        color: white;
        opacity: 0.9;
    }

    .hero-actions {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn {
        padding: 12px 32px;
        border-radius: 980px;
        text-decoration: none;
        font-size: 17px;
        font-weight: 400;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-primary {
        background: var(--accent);
        color: white;
    }

    .btn-primary:hover {
        background: #0077ed;
        transform: scale(1.02);
    }

    .btn-secondary {
        color: var(--accent);
        border: 2px solid var(--accent);
    }

    .btn-secondary:hover {
        background: var(--accent);
        color: white;
    }

    /* Features Section */
    .features {
        padding: 120px 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .feature {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
        align-items: center;
        margin-bottom: 160px;
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s ease;
    }

    .feature.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .feature:nth-child(even) {
        direction: rtl;
    }

    .feature:nth-child(even) .feature-content {
        direction: ltr;
    }

    .feature-content {
        direction: ltr;
    }

    .feature-label {
        color: var(--accent);
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .feature h2 {
        font-size: 48px;
        font-weight: 700;
        line-height: 1.1;
        margin-bottom: 24px;
    }

    .feature p {
        font-size: 21px;
        line-height: 1.4;
        color: var(--text-secondary);
        margin-bottom: 24px;
    }

    .feature-image {
        width: 100%;
        height: 400px;
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        border-radius: 20px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    /* Specs Section */
    .specs {
        background: var(--bg-secondary);
        padding: 120px 20px;
    }

    .specs-container {
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
    }

    .specs h2 {
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 60px;
    }

    .specs-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
    }

    .spec-card {
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .spec-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .spec-icon {
        width: 60px;
        height: 60px;
        background: var(--accent);
        border-radius: 15px;
        margin: 0 auto 20px;
    }

    .spec-card h3 {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .spec-card p {
        font-size: 17px;
        color: var(--text-secondary);
    }

    /* Comparison Section */
    .comparison {
        padding: 120px 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .comparison h2 {
        font-size: 48px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 60px;
    }

    .comparison-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .model-card {
        border: 1px solid var(--border);
        border-radius: 20px;
        padding: 40px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .model-card:hover {
        border-color: var(--accent);
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .model-image {
        width: 200px;
        height: 200px;
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        border-radius: 15px;
        margin: 0 auto 30px;
    }

    .model-card h3 {
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .model-price {
        font-size: 21px;
        color: var(--text-secondary);
        margin-bottom: 20px;
    }

    .model-features {
        list-style: none;
        margin-bottom: 30px;
    }

    .model-features li {
        padding: 8px 0;
        font-size: 16px;
        color: var(--text-secondary);
    }

    /* Footer */
    footer {
        background: var(--bg-secondary);
        padding: 60px 20px;
        text-align: center;
    }

    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
    }

    .footer-links {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }

    .footer-links a {
        color: var(--text-secondary);
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .footer-links a:hover {
        color: var(--accent);
    }

    .footer-divider {
        width: 100%;
        height: 1px;
        background: var(--border);
        margin: 30px 0;
    }

    .footer-bottom {
        color: var(--text-secondary);
        font-size: 14px;
    }

    /* Animações extras */
    .float {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 40px;
        }

        .hero-subtitle {
            font-size: 21px;
        }

        .feature {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .feature:nth-child(even) {
            direction: ltr;
        }

        .nav-links {
            display: none;
        }

        .comparison-grid {
            grid-template-columns: 1fr;
        }
    }
    </style>
</head>

<body>
    <!-- Navegação -->
    <nav>
        <div class="nav-container">
            <a href="#" class="nav-logo">TechPro</a>
            <ul class="nav-links">
                <li><a href="#features">Recursos</a></li>
                <li><a href="#specs">Especificações</a></li>
                <li><a href="#models">Modelos</a></li>
                <li><a href="#" class="btn btn-primary" style="padding: 8px 20px; font-size: 14px;">Comprar</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-label">Novo</div>
            <h1>TechPro Max</h1>
            <p class="hero-subtitle">Poder além da imaginação.</p>
            <div class="hero-image float"></div>
            <div class="hero-actions">
                <a href="#" class="btn btn-primary">Comprar agora</a>
                <a href="#features" class="btn btn-secondary">Saiba mais</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="feature">
            <div class="feature-content">
                <div class="feature-label">Design</div>
                <h2>Beleza que impressiona</h2>
                <p>Construído com materiais premium e atenção aos mínimos detalhes. Cada curva, cada linha, pensada para
                    proporcionar a melhor experiência.</p>
                <a href="#" class="btn btn-secondary">Explorar o design</a>
            </div>
            <div class="feature-image"></div>
        </div>

        <div class="feature">
            <div class="feature-content">
                <div class="feature-label">Performance</div>
                <h2>Velocidade sem limites</h2>
                <p>Com o novo processador Neural Engine, realize tarefas complexas em segundos. Multitarefa fluida e
                    resposta instantânea em tudo que você faz.</p>
                <a href="#" class="btn btn-secondary">Ver benchmarks</a>
            </div>
            <div class="feature-image" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);"></div>
        </div>

        <div class="feature">
            <div class="feature-content">
                <div class="feature-label">Câmera</div>
                <h2>Fotografia profissional</h2>
                <p>Sistema de câmera tripla com inteligência artificial. Capture momentos incríveis com qualidade
                    cinematográfica, dia ou noite.</p>
                <a href="#" class="btn btn-secondary">Ver galeria</a>
            </div>
            <div class="feature-image" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);"></div>
        </div>
    </section>

    <!-- Specs Section -->
    <section class="specs" id="specs">
        <div class="specs-container">
            <h2>Especificações técnicas</h2>
            <div class="specs-grid">
                <div class="spec-card">
                    <div class="spec-icon"></div>
                    <h3>Tela OLED 6.7"</h3>
                    <p>Resolução 4K com 120Hz de taxa de atualização</p>
                </div>
                <div class="spec-card">
                    <div class="spec-icon" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
                    <h3>Chip A18 Neural</h3>
                    <p>8 núcleos de alta performance com IA integrada</p>
                </div>
                <div class="spec-card">
                    <div class="spec-icon" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);"></div>
                    <h3>Bateria o dia todo</h3>
                    <p>Até 48 horas de uso com carregamento rápido</p>
                </div>
                <div class="spec-card">
                    <div class="spec-icon" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);"></div>
                    <h3>5G Ultra Rápido</h3>
                    <p>Conectividade de próxima geração sempre disponível</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="comparison" id="models">
        <h2>Escolha seu TechPro</h2>
        <div class="comparison-grid">
            <div class="model-card">
                <div class="model-image"></div>
                <h3>TechPro</h3>
                <p class="model-price">A partir de R$ 4.999</p>
                <ul class="model-features">
                    <li>Tela de 6.1 polegadas</li>
                    <li>Câmera dupla</li>
                    <li>Chip A17</li>
                    <li>128GB de armazenamento</li>
                </ul>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>

            <div class="model-card">
                <div class="model-image" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);"></div>
                <h3>TechPro Pro</h3>
                <p class="model-price">A partir de R$ 6.999</p>
                <ul class="model-features">
                    <li>Tela de 6.4 polegadas</li>
                    <li>Câmera tripla</li>
                    <li>Chip A18</li>
                    <li>256GB de armazenamento</li>
                </ul>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>

            <div class="model-card">
                <div class="model-image" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);"></div>
                <h3>TechPro Max</h3>
                <p class="model-price">A partir de R$ 8.999</p>
                <ul class="model-features">
                    <li>Tela de 6.7 polegadas</li>
                    <li>Câmera tripla Pro</li>
                    <li>Chip A18 Neural</li>
                    <li>512GB de armazenamento</li>
                </ul>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#">Política de Privacidade</a>
                <a href="#">Termos de Uso</a>
                <a href="#">Vendas e Reembolsos</a>
                <a href="#">Legal</a>
                <a href="#">Mapa do Site</a>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-bottom">
                <p>Copyright © 2025 TechPro Inc. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Intersection Observer para animações
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.feature').forEach(el => {
        observer.observe(el);
    });

    // Parallax effect no hero
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.hero-content');
        if (hero) {
            hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            hero.style.opacity = 1 - (scrolled * 0.001);
        }
    });
    </script>
</body>

</html>