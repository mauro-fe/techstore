<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/assistencia.css">

<?php
$scrollTo = isset($_GET['scroll']) ? $_GET['scroll'] : '';
?>
<!-- Hero Section -->
<section class="assistencia-tecnica_hero" id="home">
    <div class="hero-container container">
        <div class="hero-content" data-aos="fade-right" data-aos-duration="1000">
            <h1>Assistência Técnica <span style="color: #000;">Especializada</span></h1>
            <p>Reparos profissionais para smartphones, tablets e dispositivos móveis. Técnico com certificado, peças
                originais e garantia em todos os serviços.</p>

            <div class="hero-stats">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-check-circle stat-icon"></i>
                    <span class="stat-number">98%</span>
                    <span class="stat-label">Taxa de Sucesso</span>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                    <i class="fas fa-check-circle stat-icon"></i>
                    <span class="stat-number">24h</span>
                    <span class="stat-label">Satisfação Garantida</span>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="600">
                    <i class="fas fa-tools stat-icon"></i>
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

<section class="services container" id="services">
    <div class="services-container" id="nossos-servicos">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Nossos serviços</h2>
            <p class="section-subtitle">Soluções completas para todos os tipos de problemas em dispositivos móveis
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon">
                    <i class="fas fa-mobile-screen"></i>
                </div>
                <h3>Troca de tela</h3>
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
                <h3>Troca de bateria</h3>
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
                <h3>Reparo em água</h3>
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
                <h3>Reparo de alto-falante</h3>
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
                <h3>Reparo de conector</h3>
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
                <h3>Reparo de câmera</h3>
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
<section class="process container" id="process">
    <div class="process-container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Como funciona</h2>
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


<!-- FAQ Section -->
<section class="faq container" id="perguntas-frequentes">
    <div class="faq-container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Perguntas frequentes</h2>
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
<div class="modal fade" id="modalAssistencia" tabindex="-1" aria-labelledby="modalAssistenciaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAssistenciaLabel">
                    <i class="fas fa-tools me-2"></i>
                    Solicitar assistência técnica
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <form id="formAssistencia">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-user me-2"></i>Nome completo:
                        </label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-mobile-alt me-2"></i>Modelo do aparelho:
                        </label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-comment-dots me-2"></i>Descrição do Problema
                        </label>
                        <textarea class="form-control" rows="2" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" id="enviarAssistencia" class="btn btn-success w-100 m-3">
                    <i class="fab fa-whatsapp me-2"></i>
                    Solicitar atendimento via WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>


<script>
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
                    const values = [98, 99, 5000];
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

    // Abrir modal
    document.querySelectorAll('.service-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const modal = new bootstrap.Modal(document.getElementById('modalAssistencia'));
            modal.show();
        });
    });

    // Abrir whatsApp

    document.getElementById('enviarAssistencia').addEventListener('click', function(e) {
        e.preventDefault();

        const nome = document.querySelector('#formAssistencia input[type="text"]').value;
        const telefone = document.querySelector('#formAssistencia input[type="tel"]').value;
        const descricao = document.querySelector('#formAssistencia textarea').value;

        if (!nome || !telefone || !descricao) {
            alert('Preencha todos os campos!');
            return;
        }

        const numero = '5544998170770';
        const mensagem = `Olá! Gostaria de solicitar assistência técnica.

👤 Nome: ${nome}
📞 WhatsApp: ${telefone}
🛠️ Problema: ${descricao}`;

        window.open(`https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`, '_blank');
    });

    document.addEventListener('DOMContentLoaded', function() {
        <?php if ($scrollTo): ?>
            const targetElement = document.getElementById('<?php echo $scrollTo; ?>');

            if (targetElement) {
                setTimeout(() => {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }, 300);
            }
        <?php endif; ?>
    });
</script>