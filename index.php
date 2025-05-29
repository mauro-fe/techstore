<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="MegaTech - A melhor loja de smartphones e acessórios do Brasil. iPhone, Samsung, Xiaomi, Realme com os melhores preços e assistência técnica especializada.">
    <meta name="keywords"
        content="smartphone, celular, iPhone, Samsung, Xiaomi, Realme, acessórios, assistência técnica, loja de celular">
    <meta name="author" content="MegaTech">
    <meta property="og:title" content="MegaTech - Loja Premium de Smartphones">
    <meta property="og:description"
        content="Descubra os melhores smartphones e acessórios com assistência técnica especializada">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://megatech.com.br">
    <meta property="og:image" content="assets/img/logo.png">
    <link rel="canonical" href="https://megatech.com.br">

    <base href="http://localhost/megatech2/">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>MegaTech - Smartphones Premium | iPhone, Samsung, Xiaomi, Realme</title>

    <!-- Preload crítico -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@300;400;500;600;700;800&display=swap"
        as="style">

    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <div class="navbar-logo effect-left">
                <a class="navbar-brand" href="home">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a class="navbar-brand" href="home">MegaTech</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto effect-left">
                    <li class="nav-item ">
                        <a class="nav-link me-4" href="home">Loja</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link me-4" href="#">Celulares</a>
                        <ul class="dropdown-menu">
                            <li><a href="celulares/iphone">iPhone</a></li>
                            <li><a href="celulares/samsung">Samsung</a></li>
                            <li><a href="celulares/xiaomi">Xiaomi</a></li>
                            <li><a href="celulares/realme">Realme</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link me-4" href="assistencia-tecnica">Assistência Técnica</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link me-4" href="contato">Contato</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link me-4 btn-comprar-nav" href="#">Comprar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <?php

        require 'Dados.php';

        if (isset($_GET["param"])) {
            $p = explode("/", $_GET["param"]);
        }
        $folder = $p[0] ?? "home";
        $file = $p[1] ?? "index";

        if ($folder === "celulares") {
            $path = "pages/celulares/{$file}.php";
        } else {
            $path = "pages/{$folder}.php";
        }

        if (file_exists($path)) {
            include $path;
        } else {
            include "pages/404.php";
        }
        ?>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="navbar-logo">
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" alt="Logo">
                    </a>
                    <a class="navbar-brand" href="#">MegaTech</a>
                </div>
                <div>
                    <p class="mb-1">Copyright © 2025 MegaTech. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle com Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script do Swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        // 🚀 SISTEMA DE ANIMAÇÕES AVANÇADO COM GSAP
        class ScrollAnimationManager {
            constructor() {
                this.scrollDirection = "down";
                this.lastScroll = 0;
                this.isScrolling = false;
                this.scrollTimeout = null;
                this.animations = new Map();

                this.init();
            }

            // 🎯 Inicialização do sistema
            init() {
                this.registerGSAP();
                this.setupScrollDetection();
                this.setupHeaderEffects();
                this.setupScrollAnimations();
                this.setupIntersectionObserver();
                this.bindEvents();

                console.log("🎨 Sistema de animações inicializado!");
            }

            // 📦 Registra plugins do GSAP
            registerGSAP() {
                if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                    gsap.registerPlugin(ScrollTrigger);

                    // Configurações globais otimizadas
                    ScrollTrigger.config({
                        autoRefreshEvents: "visibilitychange,DOMContentLoaded,load,resize"
                    });
                }
            }

            // 🎛️ Sistema inteligente de detecção de scroll
            setupScrollDetection() {
                let ticking = false;

                const updateScrollDirection = () => {
                    const currentScroll = window.scrollY;

                    // Determina direção apenas se houver mudança significativa
                    if (Math.abs(currentScroll - this.lastScroll) > 5) {
                        this.scrollDirection = currentScroll > this.lastScroll ? "down" : "up";
                    }

                    this.lastScroll = currentScroll <= 0 ? 0 : currentScroll;
                    this.isScrolling = true;

                    // Reset do estado de scrolling
                    clearTimeout(this.scrollTimeout);
                    this.scrollTimeout = setTimeout(() => {
                        this.isScrolling = false;
                    }, 150);

                    ticking = false;
                };

                window.addEventListener("scroll", () => {
                    if (!ticking) {
                        requestAnimationFrame(updateScrollDirection);
                        ticking = true;
                    }
                }, {
                    passive: true
                });
            }

            // 🏠 Efeitos avançados do header
            setupHeaderEffects() {
                const header = document.querySelector('.navbar');
                if (!header) return;

                let headerVisible = true;
                let lastHeaderScroll = 0;

                ScrollTrigger.create({
                    start: 0,
                    end: "max",
                    onUpdate: (self) => {
                        const currentScroll = self.scroll();
                        const scrollingDown = currentScroll > lastHeaderScroll;
                        const scrollingUp = currentScroll < lastHeaderScroll;

                        // Header transparente após 50px
                        if (currentScroll > 50) {
                            header.classList.add('transparent');
                        } else {
                            header.classList.remove('transparent');
                        }

                        // Auto hide/show header baseado na direção
                        if (currentScroll > 200) {
                            if (scrollingDown && currentScroll - lastHeaderScroll > 5) {
                                if (headerVisible) {
                                    gsap.to(header, {
                                        y: -100,
                                        duration: 0.3,
                                        ease: "power2.out"
                                    });
                                    headerVisible = false;
                                }
                            } else if (scrollingUp && lastHeaderScroll - currentScroll > 5) {
                                if (!headerVisible) {
                                    gsap.to(header, {
                                        y: 0,
                                        duration: 0.3,
                                        ease: "power2.out"
                                    });
                                    headerVisible = true;
                                }
                            }
                        }

                        lastHeaderScroll = currentScroll;
                    }
                });

                // Aplica estado inicial
                setTimeout(() => window.dispatchEvent(new Event('scroll')), 100);
            }

            // 🎭 Sistema avançado de animações
            setupScrollAnimations() {
                // Configurações de animação otimizadas
                const animationConfigs = {
                    effect: {
                        trigger: "top 95%",
                        animation: this.createVerticalAnimation.bind(this),
                        stagger: 0.1
                    },
                    'effect-left': {
                        trigger: "top 95%",
                        animation: this.createHorizontalAnimation.bind(this, "left"),
                        stagger: 0.15
                    },
                    'effect-right': {
                        trigger: "top 95%",
                        animation: this.createHorizontalAnimation.bind(this, "right"),
                        stagger: 0.15
                    },
                    'effect-fade': {
                        trigger: "top 95%",
                        animation: this.createFadeAnimation.bind(this),
                        stagger: 0.2
                    },
                    'effect-scale': {
                        trigger: "top 95%",
                        animation: this.createScaleAnimation.bind(this),
                        stagger: 0.1
                    },
                    'effect-rotate': {
                        trigger: "top 95%",
                        animation: this.createRotateAnimation.bind(this),
                        stagger: 0.1
                    }
                };

                // Aplica animações para cada classe
                Object.entries(animationConfigs).forEach(([className, config]) => {
                    this.setupAnimationGroup(className, config);
                });
            }

            // 🎯 Configura grupo de animações
            setupAnimationGroup(className, config) {
                const elements = gsap.utils.toArray(`.${className}`);

                if (elements.length === 0) return;

                elements.forEach((element, index) => {
                    // Aplica estado inicial
                    gsap.set(element, this.getInitialState(className));

                    ScrollTrigger.create({
                        trigger: element,
                        start: config.trigger,
                        onEnter: () => {
                            const delay = config.stagger * index;
                            setTimeout(() => {
                                config.animation(element, this.scrollDirection);
                            }, delay * 200);
                        },
                        onEnterBack: () => {
                            const delay = config.stagger * index;
                            setTimeout(() => {
                                config.animation(element, this.scrollDirection);
                            }, delay * 1000);
                        }
                    });
                });
            }

            // 🎨 Estados iniciais para cada tipo de animação
            getInitialState(className) {
                const states = {
                    'effect': {
                        opacity: 0,
                        y: 100,
                        scale: 0.8,
                        filter: "blur(8px)"
                    },
                    'effect-left': {
                        opacity: 0,
                        x: -100,
                        scale: 0.9,
                        filter: "blur(10px)"
                    },
                    'effect-right': {
                        opacity: 0,
                        x: 100,
                        scale: 0.9,
                        filter: "blur(10px)"
                    },
                    'effect-fade': {
                        opacity: 0,
                        scale: 1.1
                    },
                    'effect-scale': {
                        opacity: 0,
                        scale: 0.5,
                        rotation: 5
                    },
                    'effect-rotate': {
                        opacity: 0,
                        rotation: 15,
                        scale: 0.8
                    }
                };
                return states[className] || {
                    opacity: 0
                };
            }

            // 📐 Animações verticais aprimoradas
            createVerticalAnimation(element, direction) {
                const fromY = direction === "down" ? 120 : -120;

                gsap.fromTo(element, {
                    y: fromY,
                    opacity: 0,
                    scale: 0.85,
                    filter: "blur(8px)",
                    rotationX: direction === "down" ? 15 : -15
                }, {
                    y: 0,
                    opacity: 1,
                    scale: 1,
                    filter: "blur(0px)",
                    rotationX: 0,
                    duration: 1.4,
                    ease: "power3.out",
                    clearProps: "all"
                });
            }

            // ↔️ Animações horizontais aprimoradas
            createHorizontalAnimation(side, element) {
                const distance = side === "left" ? -180 : 180;

                gsap.fromTo(element, {
                    x: distance,
                    opacity: 0,
                    scale: 0.9,
                    filter: "blur(6px)",
                    rotationY: side === "left" ? -20 : 20
                }, {
                    x: 0,
                    opacity: 1,
                    scale: 1,
                    filter: "blur(0px)",
                    rotationY: 0,
                    duration: 1.6,
                    ease: "power3.out",
                    clearProps: "all"
                });
            }

            // 🌫️ Animação de fade suave
            createFadeAnimation(element) {
                gsap.fromTo(element, {
                    opacity: 0,
                    scale: 1.1,
                    filter: "blur(4px)"
                }, {
                    opacity: 1,
                    scale: 1,
                    filter: "blur(0px)",
                    duration: 2,
                    ease: "power2.out",
                    clearProps: "all"
                });
            }

            // 📏 Animação de escala dinâmica
            createScaleAnimation(element) {
                gsap.fromTo(element, {
                    opacity: 0,
                    scale: 0.3,
                    rotation: 10,
                    filter: "blur(5px)"
                }, {
                    opacity: 1,
                    scale: 1,
                    rotation: 0,
                    filter: "blur(0px)",
                    duration: 1.8,
                    ease: "elastic.out(1, 0.5)",
                    clearProps: "all"
                });
            }

            // 🌀 Animação de rotação elegante
            createRotateAnimation(element) {
                gsap.fromTo(element, {
                    opacity: 0,
                    rotation: 25,
                    scale: 0.7,
                    filter: "blur(6px)"
                }, {
                    opacity: 1,
                    rotation: 0,
                    scale: 1,
                    filter: "blur(0px)",
                    duration: 2,
                    ease: "back.out(1.4)",
                    clearProps: "all"
                });
            }

            // 👁️ Intersection Observer para melhor performance
            setupIntersectionObserver() {
                if (!('IntersectionObserver' in window)) return;

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        const element = entry.target;

                        if (entry.isIntersecting) {
                            element.classList.add('in-viewport');
                        } else {
                            element.classList.remove('in-viewport');
                        }
                    });
                }, {
                    threshold: 0.1,
                    rootMargin: '50px'
                });

                // Observa todos os elementos com classes de efeito
                const elementsToObserve = document.querySelectorAll('[class*="effect"]');
                elementsToObserve.forEach(el => observer.observe(el));
            }

            // 🎮 Eventos adicionais
            bindEvents() {
                // Refresh em resize (throttled)
                let resizeTimeout;
                window.addEventListener('resize', () => {
                    clearTimeout(resizeTimeout);
                    resizeTimeout = setTimeout(() => {
                        ScrollTrigger.refresh();
                    }, 250);
                }, {
                    passive: true
                });

                // Refresh quando a página fica visível novamente
                document.addEventListener('visibilitychange', () => {
                    if (!document.hidden) {
                        ScrollTrigger.refresh();
                    }
                });

                // Smooth scroll para links internos
                document.querySelectorAll('a[href^="#"]').forEach(link => {
                    link.addEventListener('click', (e) => {
                        const target = document.querySelector(link.getAttribute('href'));
                        if (target) {
                            e.preventDefault();
                            gsap.to(window, {
                                duration: 1.5,
                                scrollTo: target,
                                ease: "power2.inOut"
                            });
                        }
                    });
                });
            }

            // 🧹 Cleanup method
            destroy() {
                ScrollTrigger.getAll().forEach(trigger => trigger.kill());
                this.animations.clear();
                clearTimeout(this.scrollTimeout);
            }

            // 🔄 Método para refresh manual
            refresh() {
                ScrollTrigger.refresh();
            }

            // 📊 Status do sistema
            getStatus() {
                return {
                    scrollDirection: this.scrollDirection,
                    currentScroll: this.lastScroll,
                    isScrolling: this.isScrolling,
                    activeAnimations: this.animations.size,
                    triggers: ScrollTrigger.getAll().length
                };
            }
        }

        // 🚀 Auto-inicialização quando DOM estiver pronto
        document.addEventListener('DOMContentLoaded', () => {
            // Verifica se GSAP está disponível
            if (typeof gsap === 'undefined') {
                console.warn('⚠️ GSAP não encontrado! Inclua a biblioteca GSAP para usar as animações.');
                return;
            }

            // Inicializa o sistema
            window.scrollAnimationManager = new ScrollAnimationManager();

            // Método global para refresh
            window.refreshAnimations = () => {
                window.scrollAnimationManager.refresh();
            };
        });
    </script>
</body>

</html>