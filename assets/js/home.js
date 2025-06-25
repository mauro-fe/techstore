document.addEventListener("DOMContentLoaded", () => {
    // Reset scroll
    window.scrollTo(0, 0);
    window.history.scrollRestoration = "manual";

    // Configuração base para Swipers
    const baseConfig = {
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true
        }
    };

    // Breakpoints responsivos
    const responsiveBreaks = {
        0: {
            slidesPerView: 1,
            centeredSlides: false
        },
        990: {
            slidesPerView: 2,
            centeredSlides: false
        },
        992: {
            slidesPerView: 3,
            centeredSlides: true
        },
        1200: {
            slidesPerView: 4,
            centeredSlides: true
        }
    };

    // Inicializar Swipers
    new Swiper('.mySwiperIphones', {
        ...baseConfig,
        effect: "flip",
        grabCursor: true,
        slidesPerView: 1
    });
    new Swiper('.mySwiper', {
        ...baseConfig,
        breakpoints: responsiveBreaks
    });

    // Swiper com timer personalizado
    let progress = 0,
        interval;
    const timerEls = ['timerProgress', 'timerNumber'].map(id => document.getElementById(id));
    const [timerProgress, timerNumber] = timerEls;

    const updateTimer = p => {
        if (!timerProgress) return;
        timerProgress.style.background = `conic-gradient(#00abff ${p * 3.6}deg, transparent ${p * 3.6}deg)`;
        timerNumber && (timerNumber.textContent = Math.ceil((100 - p) / 20));
    };

    const startTimer = () => {
        clearInterval(interval);
        progress = 0;
        interval = setInterval(() => {
            progress += 0.2;
            if (progress >= 100) {
                clearInterval(interval);
                swiperAval.slideNext();
                return;
            }
            updateTimer(progress);
        }, 10);
    };

    const swiperAval = new Swiper('.mySwiperAvaliacoes', {
        ...baseConfig,
        autoplay: false,
        speed: 800,
        breakpoints: responsiveBreaks,
        on: {
            slideChange: startTimer
        }
    });

    // Controles do timer
    const swiperEl = document.querySelector('.swiper');
    swiperEl?.addEventListener('mouseenter', () => clearInterval(interval));
    swiperEl?.addEventListener('mouseleave', startTimer);
    setTimeout(startTimer, 1000);

    // Modal simplificado
    let modal;
    try {
        modal = new bootstrap.Modal(document.getElementById('modalComprar'));
    } catch { }

    // Handler de compra
    document.addEventListener('click', async e => {
        const btn = e.target.closest('.btn-comprar');
        if (!btn || btn.classList.contains('loading')) return;

        btn.classList.add('loading');
        await new Promise(r => setTimeout(r, 500));
        btn.classList.remove('loading');

        const nome = btn.dataset.nome;
        const id = btn.dataset.id;

        const els = {
            nome: document.getElementById('nomeProduto'),
            id: document.getElementById('produtoId'),
            qty: document.getElementById('quantidadeProduto'),
            link: document.getElementById('linkWhatsapp')
        };

        if (els.nome && modal) {
            els.nome.textContent = nome;
            els.id && (els.id.value = id);

            const updateLink = () => {
                const msg = `Olá! Gostaria de comprar ${els.qty?.value || 1} unidade(s) do produto: ${nome}`;
                els.link && (els.link.href = `https://wa.me/5544998011086?text=${encodeURIComponent(msg)}`);
            };

            els.qty?.addEventListener('input', updateLink);
            updateLink();
            modal.show();
        }
    });
});