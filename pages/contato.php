<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/contato.css">

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
                        <a href="mailto:megatechempresa@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
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

                <!-- Seu formulário com pequenos ajustes nos names (sem espaços/acentos) -->
                <form action="enviar-email.php" method="post" class="contact-form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group form-floating-label">
                            <input type="text" id="fullName" name="nome_completo" class="form-control" placeholder=" ">
                            <label for="fullName">Nome Completo *</label>
                        </div>
                        <div class="form-group form-floating-label">
                            <input type="tel" id="phone" name="telefone" class="form-control" placeholder=" ">
                            <label for="phone">Telefone *</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group form-floating-label">
                            <input type="email" id="email" name="email" class="form-control" placeholder=" ">
                            <label for="email">E-mail *</label>
                        </div>
                        <div class="form-group form-floating-label">
                            <input type="text" id="city" name="cidade" class="form-control" placeholder=" ">
                            <label for="city">Cidade *</label>
                        </div>
                    </div>
                    <div class="form-group form-floating-label">
                        <select id="foundUs" name="como_encontrou" class="form-control select">
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
                        <textarea id="message" name="mensagem" class="form-control textarea" placeholder=" "></textarea>
                        <label for="message">Sua Mensagem *</label>
                    </div>
                    <div class="row contant-buttons d-flex justify-content-center">
                        <button type="submit" class="submit-btn btn-enhanced" id="btnSubmit">
                            <i class="fas fa-paper-plane"></i>
                            <span class="btn-text">Enviar</span>
                        </button>
                        <button type="reset" class="reset-btn btn-enhanced">
                            <i class="fas fa-trash"></i> Limpar
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
                <div class="values-grid">
                    <div class="contact-item mbcontact-info-card-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-icon"><a href="tel:+5544998011086" target="_blank"><i
                                    class="fas fa-phone"></i></a>
                        </div>
                        <div class="contact-details">
                            <h3>Telefone</h3>
                            <p><a href="tel:+5544998011086" target="_blank">(44) 99801-1086</a></p>
                            <p>Segunda à Sexta: 8h às 18h<br>Sábado: 8h às 12h</p>
                        </div>
                    </div>


                    <div class="contact-item mb-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>E-mail</h3>
                            <p><a href="mailto:megatechempresa@gmail.com" target="_blank">megatechempresa@gmail.com</a>
                            </p>
                            <p>Respondemos em até 24 horas</p>
                        </div>
                    </div>

                    <div class="contact-item mb-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="contact-icon">
                            <a href="https://www.google.com.br/maps/place/Av.+Brasil+-+Campina+da+Lagoa,+PR,+87345-000/@-24.5945994,-52.8098194,17z/data=!3m1!4b1!4m6!3m5!1s0x94f20ea00b0d6f3d:0xf161c6134ec6b069!8m2!3d-24.5945994!4d-52.8072445!16s%2Fg%2F1ymx18pk0?hl=pt-BR&entry=ttu&g_ep=EgoyMDI1MDYwOC4wIKXMDSoASAFQAw%3D%3D"
                                target="_blank"><i class="fas fa-map-marker-alt"></i></a>
                        </div>
                        <div class="contact-details">
                            <h3>Endereço</h3>
                            <p>Rua Avenida Brasil<br>Centro - Campina da Lagoa/PR<br>CEP: 87.345-000</p>
                        </div>
                    </div>

                    <div class="contact-item mb-3" data-aos="fade-up" data-aos-delay="500">
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
                        <a href="#" class="social-link whatsapp" title="WhatsApp" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/megatech_cdl/" class="social-link instagram"
                            title="Instagram" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/MegaTech2k21/" class="social-link facebook" title="Facebook"
                            target="_blank">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= BASE_URL ?>/assets/js/contato.js"></script>