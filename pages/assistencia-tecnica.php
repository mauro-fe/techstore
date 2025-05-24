<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --primary-color: #667eea;
        --secondary-color: #764ba2;
        --accent-color: #4ecdc4;
        --success-color: #2ecc71;
        --warning-color: #f39c12;
        --danger-color: #e74c3c;
        --dark-color: #2c3e50;
        --light-color: #ffffff;
        --gray-100: #f8f9fa;
        --gray-200: #e9ecef;
        --gray-300: #dee2e6;
        --gray-400: #ced4da;
        --gray-500: #adb5bd;
        --gray-600: #6c757d;
        --gray-700: #495057;
        --gray-800: #343a40;
        --gray-900: #212529;
    }

    body {
        font-family: 'SF Pro Display', -apple-system, BlinkMacSystemFont, sans-serif;
        line-height: 1.6;
        color: var(--gray-800);
        overflow-x: hidden;
    }

    /* Header */
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        z-index: 1000;
        transition: all 0.3s ease;
        padding: 1rem 0;
    }

    .navbar.scrolled {
        background: rgba(255, 255, 255, 0.98);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary-color);
        text-decoration: none;
    }

    .nav-links {
        display: flex;
        list-style: none;
        gap: 2rem;
    }

    .nav-links a {
        text-decoration: none;
        color: var(--gray-700);
        font-weight: 500;
        transition: color 0.3s ease;
        position: relative;
    }

    .nav-links a:hover {
        color: var(--primary-color);
    }

    .nav-links a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -5px;
        left: 50%;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .nav-links a:hover::after {
        width: 100%;
    }

    .cta-button {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        color: white;
        padding: 0.8rem 1.5rem;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .cta-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
    }

    /* Hero Section */
    .hero {
        min-height: 100vh;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse"><path d="M 50 0 L 0 0 0 50" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
        opacity: 0.3;
    }

    .hero-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        position: relative;
        z-index: 2;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: white;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        text-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .hero-content p {
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .hero-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        margin-top: 3rem;
    }

    .stat-item {
        text-align: center;
        color: white;
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        display: block;
        margin-bottom: 0.5rem;
    }

    .stat-label {
        font-size: 0.9rem;
        opacity: 0.8;
    }

    .hero-visual {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-device {
        width: 300px;
        height: 500px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        position: relative;
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
        animation: float 6s ease-in-out infinite;
    }

    .hero-device::before {
        content: '';
        position: absolute;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 2px;
    }

    .hero-device::after {
        content: '';
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: 40px;
        height: 40px;
        border: 2px solid rgba(255, 255, 255, 0.5);
        border-radius: 50%;
    }

    .floating-icons {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .floating-icon {
        position: absolute;
        color: rgba(255, 255, 255, 0.6);
        font-size: 2rem;
        animation: floatIcon 8s ease-in-out infinite;
    }

    .floating-icon:nth-child(1) {
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .floating-icon:nth-child(2) {
        top: 60%;
        right: 15%;
        animation-delay: 2s;
    }

    .floating-icon:nth-child(3) {
        bottom: 30%;
        left: 20%;
        animation-delay: 4s;
    }

    .floating-icon:nth-child(4) {
        top: 40%;
        right: 30%;
        animation-delay: 6s;
    }

    /* Services Section */
    .services {
        padding: 6rem 0;
        background: var(--gray-100);
        position: relative;
    }

    .services-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .section-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .section-title {
        font-size: 3rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 1rem;
    }

    .section-subtitle {
        font-size: 1.2rem;
        color: var(--gray-600);
        max-width: 600px;
        margin: 0 auto;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
    }

    .service-card {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .service-card:hover::before {
        transform: scaleX(1);
    }

    .service-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }

    .service-icon i {
        font-size: 2rem;
        color: white;
    }

    .service-card h3 {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 1rem;
    }

    .service-card p {
        color: var(--gray-600);
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }

    .service-features {
        list-style: none;
        margin-bottom: 2rem;
    }

    .service-features li {
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
        color: var(--gray-700);
    }

    .service-features li i {
        color: var(--success-color);
        margin-right: 0.5rem;
    }

    .service-price {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: auto;
    }

    .price-text {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--primary-color);
    }

    .service-btn {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        padding: 0.8rem 1.5rem;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .service-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }

    /* Process Section */
    .process {
        padding: 6rem 0;
        background: white;
    }

    .process-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .process-steps {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 3rem;
        margin-top: 4rem;
    }

    .process-step {
        text-align: center;
        position: relative;
    }

    .process-step::after {
        content: '';
        position: absolute;
        top: 40px;
        right: -1.5rem;
        width: 3rem;
        height: 2px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        display: none;
    }

    .process-step:not(:last-child)::after {
        display: block;
    }

    .step-number {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 1.5rem;
        font-weight: 700;
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }

    .process-step h3 {
        font-size: 1.3rem;
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 1rem;
    }

    .process-step p {
        color: var(--gray-600);
        line-height: 1.6;
    }

    /* Testimonials */
    .testimonials {
        padding: 6rem 0;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        position: relative;
    }

    .testimonials::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.1)"/></svg>') repeat;
        opacity: 0.3;
    }

    .testimonials-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        position: relative;
        z-index: 2;
    }

    .testimonials .section-title,
    .testimonials .section-subtitle {
        color: white;
    }

    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
        margin-top: 4rem;
    }

    .testimonial-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border-radius: 20px;
        padding: 2rem;
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
    }

    .testimonial-header {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .testimonial-avatar {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--accent-color), var(--success-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        font-size: 1.5rem;
        font-weight: 700;
    }

    .testimonial-info h4 {
        font-weight: 600;
        margin-bottom: 0.3rem;
    }

    .testimonial-rating {
        color: #ffd700;
        margin-bottom: 0.5rem;
    }

    .testimonial-text {
        line-height: 1.6;
        opacity: 0.9;
    }

    /* Contact Section */
    .contact {
        padding: 6rem 0;
        background: var(--gray-100);
    }

    .contact-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        margin-top: 4rem;
    }

    .contact-info {
        background: white;
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 2rem;
    }

    .contact-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1.5rem;
    }

    .contact-icon i {
        color: white;
        font-size: 1.5rem;
    }

    .contact-details h4 {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 0.3rem;
    }

    .contact-details p {
        color: var(--gray-600);
    }

    .contact-form {
        background: white;
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: var(--dark-color);
    }

    .form-control {
        width: 100%;
        padding: 1rem 1.5rem;
        border: 2px solid var(--gray-300);
        border-radius: 10px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
        background: white;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .form-control.textarea {
        min-height: 120px;
        resize: vertical;
    }

    .submit-btn {
        width: 100%;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        padding: 1rem 2rem;
        border: none;
        border-radius: 10px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
    }

    /* FAQ Section */
    .faq {
        padding: 6rem 0;
        background: white;
    }

    .faq-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .faq-item {
        background: var(--gray-100);
        border-radius: 15px;
        margin-bottom: 1rem;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .faq-item.active {
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
    }

    .faq-question {
        padding: 1.5rem 2rem;
        background: none;
        border: none;
        width: 100%;
        text-align: left;
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--dark-color);
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .faq-question:hover {
        background: rgba(102, 126, 234, 0.05);
    }

    .faq-icon {
        transition: transform 0.3s ease;
    }

    .faq-item.active .faq-icon {
        transform: rotate(180deg);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .faq-item.active .faq-answer {
        max-height: 200px;
    }

    .faq-answer-content {
        padding: 0 2rem 1.5rem;
        color: var(--gray-600);
        line-height: 1.6;
    }

    /* Animations */
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-20px) rotate(2deg);
        }
    }

    @keyframes floatIcon {

        0%,
        100% {
            transform: translateY(0px);
            opacity: 0.6;
        }

        50% {
            transform: translateY(-15px);
            opacity: 1;
        }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .nav-links {
            display: none;
        }

        .hero-container {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 2rem;
        }

        .hero-content h1 {
            font-size: 2.5rem;
        }

        .hero-stats {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .services-grid,
        .testimonials-grid {
            grid-template-columns: 1fr;
        }

        .contact-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .process-step::after {
            display: none;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-container">
        <div class="hero-content" data-aos="fade-right" data-aos-duration="1000">
            <h1>Assistência Técnica <span style="color: var(--accent-color);">Especializada</span></h1>
            <p>Reparos profissionais para smartphones, tablets e dispositivos móveis. Técnicos certificados, peças
                originais e garantia em todos os serviços.</p>

            <div class="hero-stats">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <span class="stat-number">98%</span>
                    <span class="stat-label">Taxa de Sucesso</span>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                    <span class="stat-number">24h</span>
                    <span class="stat-label">Tempo Médio</span>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="600">
                    <span class="stat-number">5000+</span>
                    <span class="stat-label">Reparos Realizados</span>
                </div>
            </div>
        </div>

        <div class="hero-visual" data-aos="fade-left" data-aos-duration="1000">
            <div class="hero-device">
                <div class="floating-icons">
                    <i class="floating-icon fas fa-tools"></i>
                    <i class="floating-icon fas fa-shield-alt"></i>
                    <i class="floating-icon fas fa-clock"></i>
                    <i class="floating-icon fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="services-container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Nossos Serviços</h2>
            <p class="section-subtitle">Soluções completas para todos os tipos de problemas em dispositivos móveis
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon">
                    <i class="fas fa-mobile-screen"></i>
                </div>
                <h3>Troca de Tela</h3>
                <p>Substituição de displays LCD, OLED e touch screen com peças originais e garantia de qualidade.
                </p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Peças originais</li>
                    <li><i class="fas fa-check"></i> Garantia de 90 dias</li>
                    <li><i class="fas fa-check"></i> Teste de qualidade</li>
                </ul>
                <div class="service-price">
                    <span class="price-text">A partir de R$ 120</span>
                    <button class="service-btn">Solicitar</button>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon">
                    <i class="fas fa-battery-half"></i>
                </div>
                <h3>Troca de Bateria</h3>
                <p>Substituição de baterias com baixo desempenho por baterias novas de alta qualidade.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Baterias premium</li>
                    <li><i class="fas fa-check"></i> Teste de capacidade</li>
                    <li><i class="fas fa-check"></i> Instalação rápida</li>
                </ul>
                <div class="service-price">
                    <span class="price-text">A partir de R$ 80</span>
                    <button class="service-btn">Solicitar</button>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon">
                    <i class="fas fa-droplet"></i>
                </div>
                <h3>Reparo em Água</h3>
                <p>Serviço especializado para aparelhos que tiveram contato com líquidos.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Limpeza ultrassônica</li>
                    <li><i class="fas fa-check"></i> Secagem profissional</li>
                    <li><i class="fas fa-check"></i> Teste completo</li>
                </ul>
                <div class="service-price">
                    <span class="price-text">A partir de R$ 150</span>
                    <button class="service-btn">Solicitar</button>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                <div class="service-icon">
                    <i class="fas fa-volume-up"></i>
                </div>
                <h3>Reparo de Alto-falante</h3>
                <p>Conserto e substituição de alto-falantes, microfones e componentes de áudio.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Peças de qualidade</li>
                    <li><i class="fas fa-check"></i> Teste de áudio</li>
                    <li><i class="fas fa-check"></i> Garantia de som</li>
                </ul>
                <div class="service-price">
                    <span class="price-text">A partir de R$ 90</span>
                    <button class="service-btn">Solicitar</button>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                <div class="service-icon">
                    <i class="fas fa-plug"></i>
                </div>
                <h3>Reparo de Conector</h3>
                <p>Substituição de conectores de carregamento USB-C, Lightning e micro USB.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Conectores originais</li>
                    <li><i class="fas fa-check"></i> Soldagem precisa</li>
                    <li><i class="fas fa-check"></i> Teste de carregamento</li>
                </ul>
                <div class="service-price">
                    <span class="price-text">A partir de R$ 100</span>
                    <button class="service-btn">Solicitar</button>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="600">
                <div class="service-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <h3>Reparo de Câmera</h3>
                <p>Conserto e troca de câmeras frontais e traseiras com foco em qualidade de imagem.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Câmeras originais</li>
                    <li><i class="fas fa-check"></i> Calibração de foco</li>
                    <li><i class="fas fa-check"></i> Teste de qualidade</li>
                </ul>
                <div class="service-price">
                    <span class="price-text">A partir de R$ 140</span>
                    <button class="service-btn">Solicitar</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process" id="process">
    <div class="process-container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Como Funciona</h2>
            <p class="section-subtitle">Processo simples e transparente para o reparo do seu dispositivo</p>
        </div>

        <div class="process-steps">
            <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="step-number">1</div>
                <h3>Diagnóstico</h3>
                <p>Avaliação completa do seu dispositivo para identificar todos os problemas e soluções necessárias.
                </p>
            </div>

            <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="step-number">2</div>
                <h3>Orçamento</h3>
                <p>Apresentamos um orçamento detalhado e transparente com prazo de entrega e garantia incluída.</p>
            </div>

            <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="step-number">3</div>
                <h3>Reparo</h3>
                <p>Execução do reparo por técnicos especializados utilizando ferramentas profissionais e peças de
                    qualidade.</p>
            </div>

            <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                <div class="step-number">4</div>
                <h3>Entrega</h3>
                <p>Teste final completo e entrega do seu dispositivo funcionando perfeitamente com garantia.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials">
    <div class="testimonials-container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">O Que Nossos Clientes Dizem</h2>
            <p class="section-subtitle">Depoimentos reais de clientes satisfeitos com nossos serviços</p>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-header">
                    <div class="testimonial-avatar">M</div>
                    <div class="testimonial-info">
                        <h4>Maria Silva</h4>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="testimonial-text">"Excelente atendimento! Trocaram a tela do meu iPhone em menos de 2
                    horas. Ficou perfeito e o preço foi justo. Super recomendo!"</p>
            </div>

            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-header">
                    <div class="testimonial-avatar">J</div>
                    <div class="testimonial-info">
                        <h4>João Santos</h4>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="testimonial-text">"Meu celular caiu na água e achei que tinha perdido tudo. A equipe da
                    MegaTech conseguiu salvar completamente! Profissionais incríveis."</p>
            </div>

            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-header">
                    <div class="testimonial-avatar">A</div>
                    <div class="testimonial-info">
                        <h4>Ana Costa</h4>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="testimonial-text">"Atendimento rápido e eficiente. Trocaram a bateria do meu Samsung e
                    voltou a durar o dia todo. Preço honesto e garantia de 90 dias!"</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact" id="contact">
    <div class="contact-container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Entre em Contato</h2>
            <p class="section-subtitle">Agende seu reparo ou tire suas dúvidas conosco</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info" data-aos="fade-right" data-aos-delay="100">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Telefone</h4>
                        <p>(11) 9 9999-9999</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <h4>E-mail</h4>
                        <p>assistencia@megatech.com.br</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Endereço</h4>
                        <p>Rua da Tecnologia, 123<br>Centro - São Paulo/SP</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Horário</h4>
                        <p>Segunda à Sexta: 8h às 18h<br>Sábado: 8h às 14h</p>
                    </div>
                </div>
            </div>

            <div class="contact-form" data-aos="fade-left" data-aos-delay="200">
                <form>
                    <div class="form-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="tel" id="phone" name="phone" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="device">Modelo do Dispositivo</label>
                        <input type="text" id="device" name="device" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="problem">Descrição do Problema</label>
                        <textarea id="problem" name="problem" class="form-control textarea" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Solicitar Orçamento</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq">
    <div class="faq-container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Perguntas Frequentes</h2>
            <p class="section-subtitle">Tire suas principais dúvidas sobre nossos serviços</p>
        </div>

        <div class="faq-list">
            <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                <button class="faq-question">
                    Qual é o prazo para reparo?
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        O prazo varia de acordo com o tipo de reparo. Serviços simples como troca de tela podem ser
                        realizados em até 2 horas, enquanto reparos mais complexos podem levar de 24 a 48 horas.
                    </div>
                </div>
            </div>

            <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <button class="faq-question">
                    Vocês oferecem garantia?
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Sim! Oferecemos garantia de 90 dias para todos os nossos serviços e peças utilizadas. Se
                        houver qualquer problema relacionado ao reparo realizado, fazemos a correção sem custo
                        adicional.
                    </div>
                </div>
            </div>

            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <button class="faq-question">
                    As peças utilizadas são originais?
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Utilizamos preferencialmente peças originais. Quando não disponíveis, usamos peças de alta
                        qualidade equivalentes, sempre informando o cliente sobre o tipo de peça que será utilizada.
                    </div>
                </div>
            </div>

            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <button class="faq-question">
                    Fazem orçamento sem compromisso?
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Claro! O diagnóstico e orçamento são totalmente gratuitos e sem compromisso. Você só paga se
                        aprovar o serviço e decidir realizar o reparo conosco.
                    </div>
                </div>
            </div>

            <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <button class="faq-question">
                    Atendem todos os modelos de smartphone?
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Trabalhamos com as principais marcas: iPhone, Samsung, Motorola, Xiaomi, LG, Huawei e
                        outras. Se tiver dúvidas sobre seu modelo específico, entre em contato conosco.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AOS Animation Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // FAQ Accordion
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {
            const faqItem = button.parentElement;
            const isActive = faqItem.classList.contains('active');

            // Close all FAQ items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });

            // Open clicked item if it wasn't active
            if (!isActive) {
                faqItem.classList.add('active');
            }
        });
    });

    // Form submission
    document.querySelector('.contact-form form').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form data
        const formData = new FormData(this);
        const data = Object.fromEntries(formData);

        // Simulate form submission
        const submitBtn = this.querySelector('.submit-btn');
        const originalText = submitBtn.textContent;

        submitBtn.textContent = 'Enviando...';
        submitBtn.disabled = true;

        setTimeout(() => {
            alert('Solicitação enviada com sucesso! Entraremos em contato em breve.');
            this.reset();
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }, 2000);
    });

    // Service buttons
    document.querySelectorAll('.service-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const serviceName = this.closest('.service-card').querySelector('h3').textContent;
            const contactSection = document.getElementById('contact');
            const deviceInput = document.getElementById('device');
            const problemTextarea = document.getElementById('problem');

            // Scroll to contact
            contactSection.scrollIntoView({
                behavior: 'smooth'
            });

            // Pre-fill form
            setTimeout(() => {
                problemTextarea.value = `Gostaria de solicitar o serviço: ${serviceName}`;
                deviceInput.focus();
            }, 1000);
        });
    });

    // Smooth scrolling for navigation links
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

    // Counter animation for stats
    function animateCounter(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const value = Math.floor(progress * (end - start) + start);
            element.textContent = value + (end >= 1000 ? '+' : '%');
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    // Trigger counter animation when stats come into view
    const observerOptions = {
        threshold: 0.7,
        triggerOnce: true
    };

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statNumbers = entry.target.querySelectorAll('.stat-number');
                statNumbers.forEach((stat, index) => {
                    const values = [98, 24, 5000];
                    setTimeout(() => {
                        animateCounter(stat, 0, values[index], 2000);
                    }, index * 200);
                });
            }
        });
    }, observerOptions);

    const statsSection = document.querySelector('.hero-stats');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }

    // Add hover effects to service cards
    document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Loading animation
    window.addEventListener('load', function() {
        document.body.style.opacity = '0';
        document.body.style.transition = 'opacity 0.5s ease';

        setTimeout(() => {
            document.body.style.opacity = '1';
        }, 100);
    });
</script>