
// arquivo: scroll-handler.js
function irPara(pagina, secao) {
    window.location.href = pagina + '?scroll=' + secao;
}

// Initialize AOS
AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: false, // 🟢 Melhora performance e evita reanimações que podem causar flicker
    offset: 100
});

$(document).ready(function () {

    // 1. Efeito de opacidade no scroll
    const scrollConfig = {
        startFade: 50,
        maxScroll: 400,
        minOpacity: 0.85,
        shadowStart: 'rgba(0, 0, 0, 0.3)',
        shadowEnd: 'rgba(0, 0, 0, 0.5)'
    };

    function updateHeader() {
        const scrollTop = $(window).scrollTop();
        const header = $('.header');
        const navbar = $('.navbar');

        let opacity = 1;
        if (scrollTop > scrollConfig.startFade) {
            const progress = Math.min((scrollTop - scrollConfig.startFade) /
                (scrollConfig.maxScroll - scrollConfig.startFade), 1);
            opacity = 1 - (progress * (1 - scrollConfig.minOpacity));
        }

        header.css('opacity', opacity);

        if (scrollTop > 50) {
            navbar.css('box-shadow', `0 2px 20px ${scrollConfig.shadowEnd}`);
        } else {
            navbar.css('box-shadow', `0 2px 20px ${scrollConfig.shadowStart}`);
        }
    }

    // 2. Indicador de progresso de scroll
    function updateScrollProgress() {
        const scrollTop = $(window).scrollTop();
        const docHeight = $(document).height() - $(window).height();
        const scrollPercent = (scrollTop / docHeight) * 100;
        $('.scroll-progress').css('width', scrollPercent + '%');
    }

    // 3. Destacar item ativo baseado na seção visível
    function updateActiveSection() {
        const scrollPosition = $(window).scrollTop() + 100;

        $('.nav-link').each(function () {
            const href = $(this).attr('href');
            if (href && href.startsWith('#') && href !== '#') {
                const section = $(href);
                if (section.length) {
                    const sectionTop = section.offset().top;
                    const sectionBottom = sectionTop + section.outerHeight();

                    if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                        $('.nav-link').removeClass('active');
                        $(this).addClass('active');
                    }
                }
            }
        });
    }

    // 4. Toggle do menu mobile com overlay
    $('.navbar-toggler').on('click', function () {
        $(this).toggleClass('active');
        $('.navbar-nav').toggleClass('show');
        $('.mobile-menu-overlay').toggleClass('show');
        $('body').toggleClass('menu-open');

        // Reset das animações dos itens
        if (!$('.navbar-nav').hasClass('show')) {
            $('.nav-item').css('transition-delay', '0s');
        }
    });

    // Fecha menu ao clicar no overlay
    $('.mobile-menu-overlay').on('click', function () {
        $('.navbar-toggler').removeClass('active');
        $('.navbar-nav').removeClass('show');
        $('.mobile-menu-overlay').removeClass('show');
        $('body').removeClass('menu-open');
    });

    // 5. Dropdown functionality
    $('.dropdown-toggle').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        const $dropdown = $(this).parent('.dropdown');
        const $menu = $(this).next('.dropdown-menu');

        if (window.innerWidth >= 992) {
            // Desktop - comportamento normal
            $('.dropdown').not($dropdown).removeClass('show');
            $('.dropdown-menu').not($menu).removeClass('show');
            $dropdown.toggleClass('show');
            $menu.toggleClass('show');
        } else {
            // Mobile - apenas toggle do menu
            $menu.toggleClass('show');
            $(this).attr('aria-expanded', $menu.hasClass('show'));
        }
    });

    // Fecha dropdown ao clicar fora (apenas desktop)
    $(document).on('click', function (e) {
        if (window.innerWidth >= 992 && !$(e.target).closest('.dropdown').length) {
            $('.dropdown').removeClass('show');
            $('.dropdown-menu').removeClass('show');
        }
    });

    // 6. Smooth scroll para links âncora
    $('a[href^="#"]').on('click', function (e) {
        const href = $(this).attr('href');
        if (href !== '#' && $(href).length) {
            e.preventDefault();
            const offset = 80;
            $('html, body').animate({
                scrollTop: $(href).offset().top - offset
            }, 500);

            // Fecha o menu mobile se estiver aberto
            if ($('.navbar-nav').hasClass('show')) {
                $('.navbar-toggler').click();
            }
        }
    });

    // 7. Event listeners otimizados
    let scrollTimer;
    $(window).on('scroll', function () {
        if (scrollTimer) {
            window.cancelAnimationFrame(scrollTimer);
        }
        scrollTimer = window.requestAnimationFrame(function () {
            updateHeader();
            updateScrollProgress();
            updateActiveSection();
        });
    });

    // 8. Feedback tátil para mobile
    if ('ontouchstart' in window) {
        $('.nav-link, .dropdown-item, .btn-comprar-nav').on('touchstart', function () {
            $(this).addClass('touch-active');
        }).on('touchend', function () {
            const $this = $(this);
            setTimeout(function () {
                $this.removeClass('touch-active');
            }, 100);
        });
    }

    // 9. Resize handler
    let resizeTimer;
    $(window).on('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            if (window.innerWidth >= 992) {
                $('.navbar-nav').removeClass('show');
                $('.navbar-toggler').removeClass('active');
                $('.mobile-menu-overlay').removeClass('show');
                $('body').removeClass('menu-open');
                $('.dropdown-menu').removeClass('show');
            }
        }, 250);
    });

    // 10. ESC key para fechar menu
    $(document).on('keyup', function (e) {
        if (e.key === 'Escape' && $('.navbar-nav').hasClass('show')) {
            $('.navbar-toggler').click();
        }
    });

    // Inicializar
    updateHeader();
    updateScrollProgress();
    updateActiveSection();
});

// 11. Intersection Observer
if ('IntersectionObserver' in window) {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link[href^="#"]');

    const observerOptions = {
        rootMargin: '-20% 0px -70% 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${entry.target.id}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }, observerOptions);

    sections.forEach(section => observer.observe(section));
}

// JAVASCRIPT DO BOTÃO - COPIE ESTA PARTE PARA SEU SITE
const scrollToTopButton = document.getElementById('scrollToTop');

// Mostrar/esconder o botão baseado no scroll
window.addEventListener('scroll', function () {
    if (window.pageYOffset > 300) {
        scrollToTopButton.classList.add('show');
    } else {
        scrollToTopButton.classList.remove('show');
    }
});

// Ação do clique - scroll suave para o topo
scrollToTopButton.addEventListener('click', function () {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
