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
                        <a href="megatechempresa@gmail.com"><i class="fas fa-envelope"></i></a>
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
                            <input type="email" id="email" name="email" class="form-control" placeholder=" " required>
                            <label for="email">E-mail *</label>
                        </div>
                        <div class="form-group form-floating-label">
                            <input type="text" id="city" name="cidade" class="form-control" placeholder=" " required>
                            <label for="city">Cidade *</label>
                        </div>
                    </div>
                    <div class="form-group form-floating-label">
                        <select id="foundUs" name="como_encontrou" class="form-control select" required>
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
                        <button type="submit" class="submit-btn" id="btnSubmit">
                            <i class="fas fa-paper-plane"></i>
                            <span class="btn-text">Enviar</span>
                        </button>
                        <button type="reset" class="reset-btn">
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
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="contact-item mb-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-icon"><a href="tel:+5544998011086" target="_blank"><i
                                        class="fas fa-phone"></i></a>
                            </div>
                            <div class="contact-details">
                                <h3>Telefone</h3>
                                <p><a href="tel:+5544998011086">(44) 99801-1086</a></p>
                                <p>Segunda à Sexta: 8h às 18h<br>Sábado: 8h às 12h</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="contact-item mb-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h3>E-mail</h3>
                                <p><a href="mailto:megatechempresa@gmail.com">megatechempresa@gmail.com</a></p>
                                <p>Respondemos em até 24 horas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
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
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- 
PARTE 2: JAVASCRIPT PARA VALIDAÇÃO E ENVIO
Adicione este script após o formulário
-->

<script>
    $(document).ready(function() {
        // Máscara para telefone brasileiro
        $('#phone').on('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            let formattedValue = '';

            if (value.length > 0) {
                formattedValue = '(' + value.substring(0, 2);
            }
            if (value.length > 2) {
                formattedValue += ') ' + value.substring(2, 7);
            }
            if (value.length > 7) {
                formattedValue += '-' + value.substring(7, 11);
            }

            e.target.value = formattedValue;
        });

        // Envio do formulário
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();

            // Validações básicas
            const nome = $('#fullName').val().trim();
            const telefone = $('#phone').val().trim();
            const email = $('#email').val().trim();
            const cidade = $('#city').val().trim();
            const comoEncontrou = $('#foundUs').val();
            const mensagem = $('#message').val().trim();

            // Validar campos
            if (nome.length < 3) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Por favor, insira seu nome completo!'
                });
                return;
            }

            if (!validarEmail(email)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Por favor, insira um e-mail válido!'
                });
                return;
            }

            if (telefone.length < 14) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Por favor, insira um telefone válido!'
                });
                return;
            }

            if (cidade.length < 3) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Por favor, insira sua cidade!'
                });
                return;
            }

            if (!comoEncontrou) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Por favor, selecione como nos encontrou!'
                });
                return;
            }

            if (mensagem.length < 10) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Por favor, digite uma mensagem com pelo menos 10 caracteres!'
                });
                return;
            }

            // Desabilitar botão e mostrar loading
            const btnSubmit = $('#btnSubmit');
            const btnText = btnSubmit.find('.btn-text');
            const btnOriginalText = btnText.text();

            btnSubmit.prop('disabled', true);
            btnText.html('<i class="fas fa-spinner fa-spin"></i> Enviando...');

            // Enviar dados via AJAX
            $.ajax({
                url: 'enviar-email.php',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Mensagem Enviada!',
                            text: response.message,
                            confirmButtonColor: '#4CAF50'
                        }).then(() => {
                            $('#contactForm')[0].reset();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao enviar',
                            text: response.message ||
                                'Ocorreu um erro. Tente novamente.',
                            confirmButtonColor: '#f44336'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Erro:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro de conexão',
                        text: 'Não foi possível enviar a mensagem. Verifique sua conexão.',
                        confirmButtonColor: '#f44336'
                    });
                },
                complete: function() {
                    btnSubmit.prop('disabled', false);
                    btnText.text(btnOriginalText);
                }
            });
        });

        // Função para validar email
        function validarEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    });
</script>