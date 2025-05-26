<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
        background: var(--gray-100);
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

    /* Hero Section */
    .hero {
        min-height: 60vh;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        margin-top: 80px;
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
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .hero-content h1 {
        font-size: 4rem;
        font-weight: 800;
        color: white;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        text-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .hero-content p {
        font-size: 1.3rem;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 2rem;
        line-height: 1.6;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .hero-icons {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-top: 2rem;
    }

    .hero-icon {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2rem;
        animation: float 6s ease-in-out infinite;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .hero-icon:nth-child(2) {
        animation-delay: 2s;
    }

    .hero-icon:nth-child(3) {
        animation-delay: 4s;
    }

    /* Main Content */
    .main-content {
        padding: 6rem 0;
        position: relative;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: start;
    }

    /* Contact Form */
    .contact-form-section {
        background: white;
        border-radius: 30px;
        padding: 3rem;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }

    .contact-form-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
    }

    .form-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .form-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 1rem;
    }

    .form-header p {
        color: var(--gray-600);
        font-size: 1.1rem;
    }

    .contact-form {
        display: grid;
        gap: 1.5rem;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
    }

    .form-group {
        position: relative;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: var(--dark-color);
        font-size: 0.95rem;
    }

    .form-control {
        width: 100%;
        padding: 1.2rem 1.5rem;
        border: 2px solid var(--gray-300);
        border-radius: 15px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: var(--gray-100);
        font-family: inherit;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-color);
        background: white;
        box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
        transform: translateY(-2px);
    }

    .form-control.textarea {
        min-height: 140px;
        resize: vertical;
        font-family: inherit;
    }

    .form-control.select {
        cursor: pointer;
        background-image: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4 5"><path fill="%23666" d="m0 0 2 2 2-2z"/></svg>');
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 1rem;
        appearance: none;
    }

    .form-floating-label {
        position: relative;
    }

    .form-floating-label input,
    .form-floating-label select,
    .form-floating-label textarea {
        padding-top: 1.8rem;
        padding-bottom: 0.6rem;
    }

    .form-floating-label label {
        position: absolute;
        top: 1.2rem;
        left: 1.5rem;
        transition: all 0.3s ease;
        pointer-events: none;
        color: var(--gray-500);
        font-weight: 400;
    }

    .form-floating-label input:focus+label,
    .form-floating-label input:not(:placeholder-shown)+label,
    .form-floating-label select:focus+label,
    .form-floating-label select:not([value=""])+label,
    .form-floating-label textarea:focus+label,
    .form-floating-label textarea:not(:placeholder-shown)+label {
        top: 0.3rem;
        font-size: 0.8rem;
        color: var(--primary-color);
        font-weight: 600;
    }

    .submit-btn {
        width: 100%;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        padding: 1.5rem 2rem;
        border: none;
        border-radius: 15px;
        font-size: 1.2rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 1rem;
        position: relative;
        overflow: hidden;
    }

    .submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s ease;
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
    }

    .submit-btn:hover::before {
        left: 100%;
    }

    .submit-btn:disabled {
        opacity: 0.7;
        cursor: not-allowed;
        transform: none;
    }

    /* Contact Info */
    .contact-info-section {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .info-header {
        text-align: center;
        margin-bottom: 1rem;
    }

    .info-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 1rem;
    }

    .info-header p {
        color: var(--gray-600);
        font-size: 1.1rem;
    }

    .contact-info-card {
        background: white;
        border-radius: 25px;
        padding: 2.5rem;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .contact-info-card::before {
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

    .contact-info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .contact-info-card:hover::before {
        transform: scaleX(1);
    }

    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 2rem;
    }

    .contact-item:last-child {
        margin-bottom: 0;
    }

    .contact-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1.5rem;
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }

    .contact-icon i {
        color: white;
        font-size: 1.8rem;
    }

    .contact-details h3 {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 0.5rem;
        font-size: 1.2rem;
    }

    .contact-details p {
        color: var(--gray-600);
        line-height: 1.6;
    }

    .contact-details a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .contact-details a:hover {
        color: var(--secondary-color);
    }

    /* Social Media Section */
    .social-section {
        background: white;
        border-radius: 25px;
        padding: 2.5rem;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .social-section h3 {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 1.5rem;
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
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .social-link:hover {
        transform: translateY(-5px) scale(1.1);
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
    }

    .social-link.whatsapp {
        background: linear-gradient(135deg, #25D366, #128C7E);
    }

    .social-link.instagram {
        background: linear-gradient(135deg, #E4405F, #F77737);
    }

    .social-link.facebook {
        background: linear-gradient(135deg, #1877F2, #42A5F5);
    }

    .social-link.linkedin {
        background: linear-gradient(135deg, #0077B5, #00A0DC);
    }

    /* Map Section */
    .map-section {
        margin-top: 6rem;
        padding: 4rem 0;
        background: white;
        border-radius: 30px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .map-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .map-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 1rem;
    }

    .map-container {
        height: 400px;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin: 0 3rem;
    }

    .map-placeholder {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: white;
        font-size: 1.2rem;
        text-align: center;
    }

    .map-placeholder i {
        font-size: 4rem;
        margin-bottom: 1rem;
        opacity: 0.8;
    }

    /* Success Message */
    .success-message {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        background: white;
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        z-index: 10000;
        text-align: center;
        max-width: 400px;
        width: 90%;
        transition: all 0.3s ease;
    }

    .success-message.show {
        transform: translate(-50%, -50%) scale(1);
    }

    .success-icon {
        width: 80px;
        height: 80px;
        background: var(--success-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        color: white;
        font-size: 2rem;
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .overlay.show {
        opacity: 1;
        visibility: visible;
    }

    /* Animations */
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .content-grid {
            grid-template-columns: 1fr;
            gap: 3rem;
        }

        .contact-form-section {
            order: 2;
        }

        .contact-info-section {
            order: 1;
        }
    }

    @media (max-width: 768px) {
        .nav-links {
            display: none;
        }

        .hero-content h1 {
            font-size: 2.5rem;
        }

        .hero-icons {
            gap: 1rem;
        }

        .hero-icon {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }

        .form-row {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .contact-item {
            flex-direction: column;
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .contact-icon {
            margin-right: 0;
            margin-bottom: 1rem;
        }

        .social-links {
            flex-wrap: wrap;
        }

        .map-container {
            margin: 0 1rem;
            height: 300px;
        }

        .contact-form-section,
        .contact-info-card,
        .social-section {
            padding: 2rem;
        }
    }

    @media (max-width: 480px) {
        .hero-content h1 {
            font-size: 2rem;
        }

        .form-header h2,
        .info-header h2,
        .map-header h2 {
            font-size: 2rem;
        }

        .hero-icons {
            flex-direction: column;
            align-items: center;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-container">
        <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
            <h1>Entre em <span style="color: var(--accent-color);">Contato</span></h1>
            <p>Estamos aqui para ajudar! Entre em contato conosco através do formulário ou pelos nossos canais de
                atendimento.</p>

            <div class="hero-icons">
                <div class="hero-icon" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="hero-icon" data-aos="fade-up" data-aos-delay="400">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="hero-icon" data-aos="fade-up" data-aos-delay="600">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="main-content">
    <div class="container">
        <div class="content-grid">
            <!-- Contact Form -->
            <div class="contact-form-section" data-aos="fade-right" data-aos-duration="1000">
                <div class="form-header">
                    <h2>Envie sua Mensagem</h2>
                    <p>Preencha o formulário abaixo e entraremos em contato o mais breve possível</p>
                </div>

                <form class="contact-form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group form-floating-label">
                            <input type="text" id="fullName" name="fullName" class="form-control" placeholder=" "
                                required>
                            <label for="fullName">Nome Completo *</label>
                        </div>
                        <div class="form-group form-floating-label">
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder=" " required>
                            <label for="phone">Telefone *</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group form-floating-label">
                            <input type="email" id="email" name="email" class="form-control" placeholder=" " required>
                            <label for="email">E-mail *</label>
                        </div>
                        <div class="form-group form-floating-label">
                            <input type="text" id="city" name="city" class="form-control" placeholder=" " required>
                            <label for="city">Cidade *</label>
                        </div>
                    </div>

                    <div class="form-group form-floating-label">
                        <select id="foundUs" name="foundUs" class="form-control select" required>
                            <option value="">Selecione uma opção</option>
                            <option value="google">Google / Pesquisa Online</option>
                            <option value="instagram">Instagram</option>
                            <option value="facebook">Facebook</option>
                            <option value="whatsapp">WhatsApp</option>
                            <option value="indicacao">Indicação de Amigos/Família</option>
                            <option value="anuncio">Anúncio/Propaganda</option>
                            <option value="passando">Passando na Loja</option>
                            <option value="outros">Outros</option>
                        </select>
                        <label for="foundUs">Por onde nos encontrou? *</label>
                    </div>

                    <div class="form-group form-floating-label">
                        <textarea id="message" name="message" class="form-control textarea" placeholder=" "
                            required></textarea>
                        <label for="message">Sua Mensagem *</label>
                    </div>

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane" style="margin-right: 0.5rem;"></i>
                        Enviar Mensagem
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="contact-info-section" data-aos="fade-left" data-aos-duration="1000">
                <div class="info-header">
                    <h2>Informações de Contato</h2>
                    <p>Diversos canais para você entrar em contato conosco</p>
                </div>

                <div class="contact-info-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Telefone</h3>
                            <p><a href="tel:+5511999999999">(11) 9 9999-9999</a></p>
                            <p>Segunda à Sexta: 8h às 18h<br>Sábado: 8h às 14h</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>E-mail</h3>
                            <p><a href="mailto:contato@megatech.com.br">contato@megatech.com.br</a></p>
                            <p>Respondemos em até 24 horas</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Endereço</h3>
                            <p>Rua da Tecnologia, 123<br>Centro - São Paulo/SP<br>CEP: 01234-567</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Horário de Funcionamento</h3>
                            <p><strong>Segunda à Sexta:</strong> 8h às 18h<br>
                                <strong>Sábado:</strong> 8h às 14h<br>
                                <strong>Domingo:</strong> Fechado
                            </p>
                        </div>
                    </div>
                </div>

                <div class="social-section" data-aos="fade-up" data-aos-delay="400">
                    <h3>Siga-nos nas Redes Sociais</h3>
                    <div class="social-links">
                        <a href="#" class="social-link whatsapp" title="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="social-link instagram" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link facebook" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link linkedin" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="map-header">
            <h2>Nossa Localização</h2>
            <p>Venha nos visitar em nossa loja física</p>
        </div>
        <div class="map-container">
            <div class="map-placeholder">
                <i class="fas fa-map-marker-alt"></i>
                <p>Rua da Tecnologia, 123 - Centro<br>São Paulo/SP - CEP: 01234-567</p>
                <p style="margin-top: 1rem; opacity: 0.8;">Mapa interativo será carregado aqui</p>
            </div>
        </div>
    </div>
</section>

<!-- Success Message Modal -->
<div class="overlay" id="overlay"></div>
<div class="success-message" id="successMessage">
    <div class="success-icon">
        <i class="fas fa-check"></i>
    </div>
    <h3 style="color: var(--success-color); margin-bottom: 1rem;">Mensagem Enviada!</h3>
    <p style="color: var(--gray-600); margin-bottom: 2rem;">Obrigado pelo contato! Entraremos em contato em até 24
        horas.</p>
    <button onclick="closeSuccessMessage()"
        style="background: var(--success-color); color: white; border: none; padding: 0.8rem 2rem; border-radius: 10px; font-weight: 600; cursor: pointer;">
        Fechar
    </button>
</div>

<!-- AOS Animation Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: false,
        offset: 100
    });

    // Phone mask
    function maskPhone(value) {
        return value
            .replace(/\D/g, '')
            .replace(/(\d{2})(\d)/, '($1) $2')
            .replace(/(\d{4,5})(\d{4})/, '$1-$2')
            .replace(/(-\d{4})\d+?$/, '$1');
    }

    document.getElementById('phone').addEventListener('input', function(e) {
        e.target.value = maskPhone(e.target.value);
    });

    // Form validation and submission
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const submitBtn = this.querySelector('.submit-btn');
        const originalText = submitBtn.innerHTML;

        // Validation
        const requiredFields = this.querySelectorAll('input[required], select[required], textarea[required]');
        let isValid = true;

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.style.borderColor = 'var(--danger-color)';
                isValid = false;
            } else {
                field.style.borderColor = 'var (--gray-300);'
            }
        });

        // Email validation
        const email = document.getElementById('email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value)) {
            email.style.borderColor = 'var(--danger-color)'
            isValid = false;
        }

        if (!isValid) {
            alert('Por favor, preencha todos os campos obrigatórios corretamente.');
            return;
        }

        // Simulate form submission
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin" style="margin-right: 0.5rem;"></i>Enviando...';
        submitBtn.disabled = true;

        setTimeout(() => {
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);

            console.log('Form Data:', data);

            // Show success message
            showSuccessMessage();

            // Reset form
            this.reset();

            // Reset button
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }, 2000);
    });

    // Success message functions
    function showSuccessMessage() {
        document.getElementById('overlay').classList.add('show');
        document.getElementById('successMessage').classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeSuccessMessage() {
        document.getElementById('overlay').classList.remove('show');
        document.getElementById('successMessage').classList.remove('show');
        document.body.style.overflow = 'auto';
    }

    // Close modal when clicking overlay
    document.getElementById('overlay').addEventListener('click', closeSuccessMessage);

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

    // Form field focus effects
    document.querySelectorAll('.form-control').forEach(field => {
        field.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-2px)';
        });

        field.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
    });

    // Auto-resize textarea
    document.getElementById('message').addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = this.scrollHeight + 'px';
    });

    // Social links hover effect
    document.querySelectorAll('.social-link').forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.animation = 'pulse 0.6s ease infinite';
        });

        link.addEventListener('mouseleave', function() {
            this.style.animation = '';
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

    // Keyboard navigation for form
    document.querySelectorAll('.form-control').forEach((field, index, fields) => {
        field.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && this.tagName !== 'TEXTAREA') {
                e.preventDefault();
                const nextField = fields[index + 1];
                if (nextField) {
                    nextField.focus();
                } else {
                    document.querySelector('.submit-btn').focus();
                }
            }
        });
    });
</script>