<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --primary-color: #00abff;
        --secondary-color: #00abff;
        --accent-color: #00abff;
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

    /* Hero Section */
    .hero {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        padding-top: 2rem;
        padding-bottom: 6rem;

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
        margin: 4rem 0;
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

    .hero-icon a {
        color: white;
        text-decoration: none;
    }

    .hero-icon:nth-child(2) {
        animation-delay: 2s;
    }

    .hero-icon:nth-child(3) {
        animation-delay: 4s;
    }

    /* Main Content */
    .main-content {
        position: relative;
        margin-top: 6rem;
    }

    /* Formulario */
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
        padding: 1rem 1.5rem !important;
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
        padding-top: 1.5rem !important;
        padding-bottom: 0.4rem !important;
    }

    .form-floating-label label {
        position: absolute;
        top: .9rem;
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

    .submit-btn,
    .reset-btn {
        width: 45%;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        padding: .3rem 0;
        border: none;
        border-radius: 30px;
        font-size: 1.2rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 1rem;
        position: relative;
        overflow: hidden;
        margin: 0 10px;
    }

    .reset-btn {
        background: #00a0f9;
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

    .reset-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s ease;
    }

    .reset-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
    }

    .submit-btn:hover::before {
        left: 100%;
    }

    .reset-btn:hover::before {
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
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 2rem;
        margin-top: 7rem;
        overflow: hidden;
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
        display: flex;
    }


    .contact-item {
        display: flex;
        align-items: center;
        flex-direction: column;
        margin: 0 10px;
        padding: 15px 20px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        position: relative;
        overflow: hidden;
    }

    .contact-item::before {
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

    .contact-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .contact-item:hover::before {
        transform: scaleX(1);
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
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        margin-bottom: 20px;
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
        font-size: 1.2rem;
    }

    .contact-details a {
        color: var(--dark-color);
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
        position: relative;
        overflow: hidden;
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

    /* Map Section */
    .map-section {
        background: linear-gradient(to top, #f9f9f9 50%, #e2f3ff);
        margin: 7rem auto;
        background: white;
        border-radius: 30px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }

    .map-card-section {
        padding: 4rem 0;
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

    .map-section .footer {
        margin-top: 50px;
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

        .submit-btn,
        .reset-btn {
            width: 30%;
            font-size: 16px;
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


    }

    footer .social-link {
        display: inline-block;
        width: 36px !important;
        height: 36px;
        text-align: center;
    }

    .contact-info-card::before,
    .social-section::before,
    .contact-form-section::before,
    .map-card-section::before {
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


    .contact-info-card:hover::before,
    .social-section:hover::before,
    .contact-form-section:hover::before,
    .map-card-section:hover::before {
        transform: scaleX(1);
    }


    footer .social-link:hover {
        color: #fff;
    }
</style>
<main>
    <!-- Hero Section -->
    <section class="hero mt-5" id="home">
        <div class="hero-container">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                <h1>Entre em <span style="color: #000;">Contato</span></h1>
                <p>Precisa de ajuda com seu smartphone? Fale com a gente! Nossa equipe está pronta para atender você.
                    <br>
                    Atendimento rápido, claro e direto. Preencha o formulário ou fale com a gente pelos nossos canais
                    oficiais.
                </p>

                <div class="hero-icons">
                    <div class="hero-icon" data-aos="fade-up" data-aos-delay="200">
                        <a href="https://wa.me/+5544998011086" target="_blank" style="color: #fff"><i
                                class="fas fa-phone"></i></a>
                    </div>
                    <div class="hero-icon" data-aos="fade-up" data-aos-dela y="400">
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                    <div class="hero-icon" data-aos="fade-up" data-aos-delay="600">
                        <a href="https://www.google.com.br/maps/place/Av.+Brasil+-+Campina+da+Lagoa,+PR,+87345-000/@-24.5945994,-52.8098194,17z/data=!3m1!4b1!4m6!3m5!1s0x94f20ea00b0d6f3d:0xf161c6134ec6b069!8m2!3d-24.5945994!4d-52.8072445!16s%2Fg%2F1ymx18pk0?hl=pt-BR&entry=ttu&g_ep=EgoyMDI1MDYwOC4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank">
                            <i class="fas fa-map-marker-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content container" id="form-contato">
        <div class="content-column">
            <!-- Contact Form -->
            <div class="contact-form-section" data-aos="fade-right" data-aos-duration="1000">
                <div class="form-header">
                    <h2>Envie sua mensagem</h2>
                    <p>Preencha o formulário abaixo e entraremos em contato o mais breve possível</p>
                </div>

                <form action="contact.php" method="post" class="contact-form" id="contactForm">

                    <div class="form-row">
                        <div class="form-group form-floating-label">
                            <input type="text" id="fullName" name="nome_completo" class="form-control" placeholder=" "
                                required>
                            <label for="fullName">Nome Completo *</label>
                        </div>
                        <div class="form-group form-floating-label">
                            <input type="tel" id="phone" name="telefone" class="form-control" placeholder=" " required>
                            <label for="phone">Telefone *</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group form-floating-label">
                            <input type="email" id="email" name="E-mail" class="form-control" placeholder=" " required>
                            <label for="email">E-mail *</label>
                        </div>
                        <div class="form-group form-floating-label">
                            <input type="text" id="city" name="Cidade" class="form-control" placeholder=" " required>
                            <label for="city">Cidade *</label>
                        </div>
                    </div>

                    <div class="form-group form-floating-label">
                        <select id="foundUs" name="como_nos_encontrou" class="form-control select" required>
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
                        <textarea id="message" name="mensagem" class="form-control textarea" placeholder=" "
                            required></textarea>
                        <label for="message">Sua Mensagem *</label>
                    </div>
                    <div class="row contant-buttons d-flex justify-content-center">
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-paper-plane"></i>
                            Enviar
                        </button>
                        <button type="reset" class="reset-btn">
                            <i class="fas fa-trash"></i>
                            Limpar
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="contact-info-section contact-info-card container" data-aos="fade-up" data-aos-duration="1000">
                <div class="info-header" data-aos="fade-up" data-aos-delay="100">
                    <h2>Informações de contato</h2>
                    <p>Diversos canais para você entrar em contato conosco</p>
                </div>
                <div class="row">
                    <div class="contact-item col" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-icon"><a href="tel:+5544998011086" target="_blank"><i
                                    class="fas fa-phone"></i></a>
                        </div>
                        <div class="contact-details">
                            <h3>Telefone</h3>
                            <p><a href="tel:+5544998011086">(44) 99801-1086</a></p>
                            <p>Segunda à Sexta: 8h às 18h<br>Sábado: 8h às 12h</p>
                        </div>
                    </div>

                    <div class="contact-item col" data-aos="fade-up" data-aos-delay="300">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>E-mail</h3>
                            <p><a href="mailto:contato@megatech.com.br">contato@megatech.com.br</a></p>
                            <p>Respondemos em até 24 horas</p>
                        </div>
                    </div>

                    <div class="contact-item col" data-aos="fade-up" data-aos-delay="400">
                        <div class="contact-icon">
                            <a href="https://www.google.com.br/maps/place/Av.+Brasil+-+Campina+da+Lagoa,+PR,+87345-000/@-24.5945994,-52.8098194,17z/data=!3m1!4b1!4m6!3m5!1s0x94f20ea00b0d6f3d:0xf161c6134ec6b069!8m2!3d-24.5945994!4d-52.8072445!16s%2Fg%2F1ymx18pk0?hl=pt-BR&entry=ttu&g_ep=EgoyMDI1MDYwOC4wIKXMDSoASAFQAw%3D%3D"
                                target="_blank"><i class="fas fa-map-marker-alt"></i></a>
                        </div>
                        <div class="contact-details">
                            <h3>Endereço</h3>
                            <p>Rua Avenida Brasil<br>Centro - Campina da Lagoa/PR<br>CEP: 87.345-000</p>
                        </div>
                    </div>

                    <div class="contact-item col" data-aos="fade-up" data-aos-delay="500">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Horário de Funcionamento</h3>
                            <p><strong>Segunda à Sexta:</strong> 8h às 18h<br>
                                <strong>Sábado:</strong> 8h às 12h<br>
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
                        <a href="https://www.instagram.com/megatech_cdl/" class="social-link instagram"
                            title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/MegaTech2k21/" class="social-link facebook" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <!-- <a href="#" class="social-link linkedin" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section container" data-aos="fade-up" data-aos-duration="1000">
        <div class="map-card-section">
            <div class="map-header">
                <h2>Nossa localização</h2>
                <p>Venha nos visitar em nossa loja física</p>
            </div>
            <div class="map-container">
                <div class="map-placeholder">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3627.8581469493733!2d-52.806227799999995!3d-24.5940913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f20c1e2461ce1f%3A0xbd8b47b891450334!2sAv.%20Brasil%2C%20910%20-%20Centro%2C%20Campina%20da%20Lagoa%20-%20PR%2C%2087345-000!5e0!3m2!1spt-BR!2sbr!4v1747614477445!5m2!1spt-BR!2sbr"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Máscara de telefone
    function maskPhone(value) {
        return value
            .replace(/\D/g, '')
            .replace(/(\d{2})(\d)/, '($1) $2')
            .replace(/(\d{4,5})(\d{4})/, '$1-$2')
            .replace(/(-\d{4})\d+?$/, '$1');
    }

    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            e.target.value = maskPhone(e.target.value);
        });
    }

    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const currentUrl = window.location.href.split('#')[0];
            const nextRedirect = document.getElementById('nextRedirect');
            if (nextRedirect) nextRedirect.value = currentUrl + '#contato-sucesso';

            const form = this;
            const submitBtn = form.querySelector('.submit-btn');
            const originalText = submitBtn?.innerHTML;
            const requiredFields = form.querySelectorAll('input[required], select[required], textarea[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = 'var(--danger-color)';
                    isValid = false;
                } else {
                    field.style.borderColor = 'var(--gray-300)';
                }
            });

            const email = document.getElementById('email');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email && !emailRegex.test(email.value)) {
                email.style.borderColor = 'var(--danger-color)';
                isValid = false;
            }

            if (!isValid) {
                Swal.fire({
                    icon: 'error',
                    title: 'Campos obrigatórios!',
                    text: 'Preencha todos os campos corretamente.',
                    confirmButtonText: 'Ok'
                });
                return;
            }

            Swal.fire({
                icon: 'question',
                title: 'Deseja enviar sua mensagem?',
                showCancelButton: true,
                confirmButtonText: 'Sim, enviar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    if (submitBtn) {
                        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Enviando...';
                        submitBtn.disabled = true;
                    }
                    setTimeout(() => {
                        form.submit(); // Envia para formsubmit
                    }, 300);
                }
            });
        });
    }

    // Alerta de sucesso via hash
    if (window.location.hash === '#contato-sucesso') {
        Swal.fire({
            icon: 'success',
            title: 'Mensagem enviada com sucesso!',
            text: 'Entraremos em contato em breve.',
            confirmButtonText: 'Fechar'
        });

        setTimeout(() => {
            history.replaceState(null, null, window.location.pathname);
        }, 4000);
    }

    // Botão de reset
    const resetBtn = document.querySelector(".reset-btn");
    if (resetBtn) {
        resetBtn.addEventListener('click', function() {
            const formControl = document.querySelector('.form-control');
            if (formControl) formControl.value = '';
        });
    }

    // Efeitos de foco
    document.querySelectorAll('.form-control').forEach(field => {
        field.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-2px)';
        });
        field.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
    });

    // Auto-resize no textarea
    const textarea = document.getElementById('message');
    if (textarea) {
        textarea.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });
    }

    // Animação nos ícones sociais
    document.querySelectorAll('.social-link').forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.animation = 'pulse 0.6s ease infinite';
        });
        link.addEventListener('mouseleave', function() {
            this.style.animation = '';
        });
    });

    // Animação de carregamento
    window.addEventListener('load', function() {
        document.body.style.opacity = '0';
        document.body.style.transition = 'opacity 0.5s ease';
        setTimeout(() => {
            document.body.style.opacity = '1';
        }, 100);
    });

    // Navegação com Enter no formulário
    document.querySelectorAll('.form-control').forEach((field, index, fields) => {
        field.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && this.tagName !== 'TEXTAREA') {
                e.preventDefault();
                const nextField = fields[index + 1];
                if (nextField) {
                    nextField.focus();
                } else {
                    document.querySelector('.submit-btn')?.focus();
                }
            }
        });
    });

    // Adicione no final da sua página contato.html
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);

        if (urlParams.get('success') === '1') {
            alert('✅ Mensagem enviada com sucesso! Entraremos em contato em breve.');
            // Ou exiba uma mensagem mais elegante
            showSuccessMessage();
        }

        if (urlParams.get('error') === '1') {
            const errorMsg = urlParams.get('msg') || 'Erro ao enviar mensagem. Tente novamente.';
            alert('❌ ' + errorMsg);
            // Ou exiba uma mensagem de erro mais elegante
            showErrorMessage(errorMsg);
        }
    });

    function showSuccessMessage() {
        // Implemente sua notificação de sucesso
        console.log('Mensagem enviada com sucesso!');
    }

    function showErrorMessage(msg) {
        // Implemente sua notificação de erro
        console.log('Erro:', msg);
    }
</script>