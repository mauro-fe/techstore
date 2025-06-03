<style>
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

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }


    .intro-section {
        background: white;
        padding: 80px 0;
        text-align: center;
        background-color: var(--primary-color);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .intro-section h2 {
        font-size: 2.5em;
        color: var(--gray-100);
        margin-bottom: 30px;
    }

    .intro-text {
        max-width: 800px;
        margin: 0 auto;
        font-size: 1.2em;
        color: var(--gray-100) !important;
        line-height: 1.8;
    }

    .team-section {
        padding: 80px 0;
        background: #f9f9f9;
    }

    .team-section h2 {
        text-align: center;
        font-size: 2.5em;
        color: var(--dark-color);
        margin-bottom: 50px;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
        margin-top: 50px;
    }

    .team-member {
        background: white;
        border-radius: 15px;
        padding: 40px 30px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .team-member::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background-color: var(--primary-color);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .team-member:hover::before {
        transform: scaleX(1);
    }

    .member-avatar {
        width: 120px;
        height: 120px;
        background-color: var(--primary-color);
        border-radius: 50%;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3em;
        color: white;
        font-weight: bold;
    }

    .member-name {
        font-size: 1.5em;
        color: #1e3c72;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .member-role {
        color: #2a5298;
        font-size: 1.1em;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .member-description {
        color: #666;
        line-height: 1.6;
    }

    .values-section {
        background: white;
        padding: 80px 0;
    }

    .values-section h2 {
        text-align: center;
        font-size: 2.5em;
        color: #1e3c72;
        margin-bottom: 50px;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .value-card {
        text-align: center;
        padding: 30px;
        border-radius: 10px;
        background: #f9f9f9;
        transition: all 0.3s ease;
    }

    .value-card:hover {
        background-color: var(--primary-color);
        color: white;
        transform: scale(1.05);
    }

    .value-icon {
        font-size: 3em;
        margin-bottom: 20px;
        color: #2a5298;
        transition: color 0.3s ease;
    }

    .value-card:hover .value-icon {
        color: white;
    }

    .value-title {
        font-size: 1.3em;
        margin-bottom: 15px;
        color: #1e3c72;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .value-card:hover .value-title {
        color: white;
    }

    .cta-section {
        background-color: var(--primary-color);
        color: white;
        padding: 60px 0;
        text-align: center;
    }

    .cta-section h2 {
        font-size: 2em;
        margin-bottom: 20px;
    }

    .cta-section p {
        font-size: 1.2em;
        margin-bottom: 30px;
    }

    .cta-button {
        display: inline-block;
        padding: 15px 40px;
        background: white;
        color: var(--dark-color);
        text-decoration: none;
        border-radius: 50px;
        font-weight: bold;
        font-size: 1.1em;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 768px) {
        header h1 {
            font-size: 2em;
        }

        .intro-section h2,
        .team-section h2,
        .values-section h2 {
            font-size: 1.8em;
        }

        .team-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="intro-section">
    <div class="container">
        <h2>Nossa História</h2>
        <div class="intro-text">
            <p>Há mais de 10 anos no mercado, a TechCell nasceu do sonho de tornar a tecnologia acessível a todos.
                Começamos como uma pequena loja de bairro e hoje somos referência em smartphones e acessórios,
                sempre priorizando o atendimento personalizado e a satisfação dos nossos clientes.</p>
            <p style="margin-top: 20px;">Nossa missão é conectar pessoas através da tecnologia, oferecendo os
                melhores produtos e um atendimento que vai além da venda.</p>
        </div>
    </div>
</section>

<section class="team-section">
    <div class="container">
        <h2>Nossa Equipe</h2>
        <div class="team-grid">
            <div class="team-member">
                <div class="member-avatar">JC</div>
                <h3 class="member-name">João Carlos Silva</h3>
                <p class="member-role">Fundador e Proprietário</p>
                <p class="member-description">Com mais de 15 anos de experiência no mercado de tecnologia, João
                    fundou a TechCell com o objetivo de democratizar o acesso aos melhores smartphones. Apaixonado
                    por inovação e atendimento ao cliente.</p>
            </div>

            <div class="team-member">
                <div class="member-avatar">MA</div>
                <h3 class="member-name">Marina Alves</h3>
                <p class="member-role">Especialista em Vendas</p>
                <p class="member-description">Marina é nossa expert em smartphones Android e iOS. Com 5 anos na
                    empresa, ela conhece cada detalhe dos produtos e sempre encontra a solução perfeita para cada
                    cliente.</p>
            </div>

            <div class="team-member">
                <div class="member-avatar">RF</div>
                <h3 class="member-name">Ricardo Ferreira</h3>
                <p class="member-role">Técnico Especialista</p>
                <p class="member-description">Ricardo cuida de toda a parte técnica da loja. Especialista em
                    assistência e configuração, ele garante que seu aparelho esteja sempre funcionando
                    perfeitamente.</p>
            </div>
        </div>
    </div>
</section>

<section class="values-section">
    <div class="container">
        <h2>Nossos Valores</h2>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">🎯</div>
                <h3 class="value-title">Qualidade</h3>
                <p>Trabalhamos apenas com produtos originais e das melhores marcas do mercado.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">💡</div>
                <h3 class="value-title">Inovação</h3>
                <p>Sempre atualizados com as últimas tendências e lançamentos em tecnologia.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">🤝</div>
                <h3 class="value-title">Confiança</h3>
                <p>Transparência em todas as negociações e garantia em todos os produtos.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">⭐</div>
                <h3 class="value-title">Excelência</h3>
                <p>Atendimento personalizado e suporte técnico especializado para você.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Venha Nos Conhecer!</h2>
        <p>Estamos prontos para ajudar você a encontrar o smartphone perfeito</p>
        <a href="#contato" class="cta-button">Entre em Contato</a>
    </div>
</section>

<script>
    // Animação de entrada para os elementos quando aparecem na tela
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '0';
                entry.target.style.transform = 'translateY(20px)';

                setTimeout(() => {
                    entry.target.style.transition = 'all 0.6s ease';
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, 100);

                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observar elementos
    document.querySelectorAll('.team-member, .value-card, .intro-text').forEach(el => {
        observer.observe(el);
    });
</script>
</body>

</html>