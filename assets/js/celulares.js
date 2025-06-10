
// Versão otimizada com melhor performance e tratamento de erros

class IPhoneStore {
    constructor() {
        this.modal = null;
        this.debounceTimer = null;
        this.init();
    }

    init() {
        this.initModal();
        this.initCardFlip();
        this.initPurchaseModal();
        this.initWhatsAppIntegration();
        this.preloadImages();
    }

    initModal() {
        try {
            this.modal = new bootstrap.Modal(document.getElementById('modalComprar'));
        } catch (error) {
            console.error('Erro ao inicializar modal:', error);
        }
    }

    initCardFlip() {
        // Usar delegação de eventos para melhor performance
        document.addEventListener('click', (e) => {
            if (e.target.closest('.btn-ver-detalhes')) {
                e.preventDefault();
                this.handleCardFlip(e.target);
            }

            if (e.target.closest('.btn-voltar')) {
                e.preventDefault();
                this.handleCardBack(e.target);
            }
        });
    }

    handleCardFlip(btn) {
        const cardInner = btn.closest('.card-flip')?.querySelector('.card-inner');
        if (!cardInner) return;

        cardInner.classList.add('is-flipped');
        this.vibrate(50);

        // Otimizar animações dos specs
        requestAnimationFrame(() => {
            setTimeout(() => {
                const specItems = cardInner.querySelectorAll('.spec-item');
                specItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.style.animation = 'slideInLeft 0.5s ease-out forwards';
                    }, index * 100);
                });
            }, 400);
        });
    }

    handleCardBack(btn) {
        const cardInner = btn.closest('.card-flip')?.querySelector('.card-inner');
        if (!cardInner) return;

        cardInner.classList.remove('is-flipped');
        this.vibrate(30);
    }

    initPurchaseModal() {
        document.addEventListener('click', (e) => {
            if (e.target.closest('.btn-comprar')) {
                e.preventDefault();
                this.handlePurchaseClick(e.target.closest('.btn-comprar'));
            }
        });
    }

    async handlePurchaseClick(btn) {
        if (btn.classList.contains('loading')) return;

        btn.classList.add('loading');

        try {
            // Simular carregamento (pode ser substituído por API call)
            await this.delay(800);

            const nome = btn.getAttribute('data-nome');
            const id = btn.getAttribute('data-id');

            this.openPurchaseModal(nome, id);
        } catch (error) {
            console.error('Erro ao processar compra:', error);
        } finally {
            btn.classList.remove('loading');
        }
    }

    openPurchaseModal(nome, id) {
        const nomeEl = document.getElementById('nomeProduto');
        const idEl = document.getElementById('produtoId');
        const selectCor = document.getElementById('corProduto');
        const selectArmazenamento = document.getElementById('armazenamentoProduto');

        if (nomeEl && idEl) {
            nomeEl.textContent = nome;
            idEl.value = id;

            // Captura o botão que acionou o evento
            const btn = document.querySelector(`.btn-comprar[data-id="${id}"]`);
            const cores = btn?.getAttribute('data-cor')?.split(',') || [];
            const armazenamento = btn?.getAttribute('data-armazenamento')?.split(',') || [];

            // Limpa e preenche o select de cores
            selectCor.innerHTML = '<option value="">Selecione uma cor</option>';
            cores.forEach(cor => {
                selectCor.innerHTML += `<option value="${cor.trim()}">${cor.trim()}</option>`;
            });

            // Limpa e preenche o select de armazenamento
            selectArmazenamento.innerHTML = '<option value="">Selecione o armazenamento</option>';
            armazenamento.forEach(arma => {
                selectArmazenamento.innerHTML += `<option value="${arma.trim()}">${arma.trim()}</option>`;
            });

            this.resetForm();
            this.modal?.show();
        }
    }



    resetForm() {
        const form = document.getElementById('formCompra');
        if (form) {
            form.reset();
            document.getElementById('quantidadeProduto').value = 1;
            document.getElementById('linkWhatsapp').href = '#';
        }
    }

    initWhatsAppIntegration() {
        const form = document.getElementById('formCompra');
        const linkWhatsapp = document.getElementById('linkWhatsapp');

        if (!form || !linkWhatsapp) return;

        // Debounce para otimizar performance
        form.addEventListener('input', () => {
            clearTimeout(this.debounceTimer);
            this.debounceTimer = setTimeout(() => {
                this.updateWhatsAppLink();
            }, 300);
        });

        form.addEventListener('change', () => this.updateWhatsAppLink());

        linkWhatsapp.addEventListener('click', (e) => {
            this.handleWhatsAppClick(e, linkWhatsapp);
        });
    }

    updateWhatsAppLink() {
        const nome = document.getElementById('nomeProduto')?.textContent;
        const cor = document.getElementById('corProduto')?.value;
        const armazenamento = document.getElementById('armazenamentoProduto')?.value;
        const quantidade = document.getElementById('quantidadeProduto')?.value;
        const linkWhatsapp = document.getElementById('linkWhatsapp');

        if (!linkWhatsapp) return;

        if (cor && armazenamento && nome) {
            const mensagem = this.buildWhatsAppMessage(nome, cor, armazenamento, quantidade);
            const numero = '5544998011086';
            const url = `https://api.whatsapp.com/send?phone=${numero}&text=${encodeURIComponent(mensagem)}`;

            linkWhatsapp.href = url;
            linkWhatsapp.style.opacity = '1';
            linkWhatsapp.style.transform = 'scale(1)';
        } else {
            linkWhatsapp.href = '#';
            linkWhatsapp.style.opacity = '0.6';
            linkWhatsapp.style.transform = 'scale(0.95)';
        }
    }

    buildWhatsAppMessage(nome, cor, armazenamento, quantidade) {
        return `Olá! Tenho interesse no *${nome}*.

        📱 Produto: *${nome}*
        🎨 Cor: *${cor}*
        💾 Armazenamento: *${armazenamento}*
        📦 Quantidade: *${quantidade}*

        Poderia me passar mais informações sobre disponibilidade e formas de pagamento?`;
    }

    handleWhatsAppClick(e, linkWhatsapp) {
        if (linkWhatsapp.href === '#' || linkWhatsapp.href.includes('#')) {
            e.preventDefault();
            this.showFormValidationFeedback();
        }
    }

    showFormValidationFeedback() {
        const linkWhatsapp = document.getElementById('linkWhatsapp');
        const cor = document.getElementById('corProduto');
        const armazenamento = document.getElementById('armazenamentoProduto');

        // Animação de erro no botão
        linkWhatsapp.style.animation = 'pulse 0.5s ease-in-out';

        // Highlight campos vazios
        [cor, armazenamento].forEach(field => {
            if (field && !field.value) {
                field.style.borderColor = '#dc3545';
                field.style.animation = 'pulse 0.5s ease-in-out';
            }
        });

        // Reset após animação
        setTimeout(() => {
            [cor, armazenamento, linkWhatsapp].forEach(el => {
                if (el) {
                    el.style.borderColor = '';
                    el.style.animation = '';
                }
            });
        }, 500);
    }

    async preloadImages() {
        const images = document.querySelectorAll('.card-img-top');
        const imagePromises = Array.from(images).map(img => {
            return new Promise((resolve, reject) => {
                const imageLoader = new Image();
                imageLoader.onload = resolve;
                imageLoader.onerror = reject;
                imageLoader.src = img.src;
            });
        });

        try {
            await Promise.allSettled(imagePromises);
            console.log('Imagens pré-carregadas com sucesso');
        } catch (error) {
            console.warn('Algumas imagens falharam ao pré-carregar:', error);
        }
    }

    vibrate(duration) {
        if (navigator.vibrate) {
            navigator.vibrate(duration);
        }
    }

    delay(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
}

// Inicialização
document.addEventListener('DOMContentLoaded', () => {
    new IPhoneStore();
});

// Service Worker para cache (opcional)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => console.log('SW registrado'))
            .catch(error => console.log('SW falhou:', error));
    });
}


// script para modal de mais detalhes
document.querySelectorAll('[data-bs-target="#modalDetalhes"]').forEach(btn => {
    btn.addEventListener('click', function () {
        const nome = this.getAttribute('data-nome');
        const id = this.getAttribute('data-id');
        const pasta = this.getAttribute('data-pasta'); // vem do PHP

        document.getElementById('detalheTitulo').textContent = nome;

        // Chama o PHP que retorna as imagens da pasta
        fetch(`getImages.php?pasta=${pasta}`)
            .then(res => res.json())
            .then(imagens => {
                const carouselInner = document.getElementById('carouselDetalhesInner');
                const carousel = document.getElementById('carouselDetalhes');

                // Adiciona imagens
                carouselInner.innerHTML = imagens.map((img, index) => `
                    <div class="carousel-item ${index === 0 ? 'active' : ''}">
                        <img src="${img}" class="d-block w-100 rounded" alt="${nome} imagem ${index + 1}">
                    </div>
                `).join('');

                // Adiciona botões de navegação se houver mais de uma imagem
                if (imagens.length > 1) {
                    carousel.insertAdjacentHTML('beforeend', `
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselDetalhes" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visuall    y-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselDetalhes" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    `);
                }

                // Atualiza especificações
                const specs = [{
                    label: 'Processador',
                    valor: this.getAttribute('data-processador') || 'N/A'
                },
                {
                    label: 'Câmera',
                    valor: this.getAttribute('data-camera') || 'N/A'
                },
                {
                    label: 'Bateria',
                    valor: this.getAttribute('data-bateria') || 'N/A'
                }
                ];
                const listaSpecs = document.getElementById('listaEspecificacoes');
                listaSpecs.innerHTML = specs.map(spec =>
                    `    <li class="list-group-item"><strong>${spec.label}:</strong> ${spec.valor}</li>`
                ).join('');


                const modalDetalhesEl = document.getElementById('modalDetalhes');
                const modalComprarEl = document.getElementById('modalComprar');

                document.getElementById('btnIrParaCompra').onclick = () => {
                    const nome = document.getElementById('detalheTitulo').textContent;
                    const id = document.getElementById('produtoId').value;

                    // Força fechar o modal de detalhes corretamente
                    const modalDetalhes = bootstrap.Modal.getInstance(modalDetalhesEl);
                    if (modalDetalhes) {
                        modalDetalhes.hide();
                    }

                    // Aguarda evento de fechamento
                    modalDetalhesEl.addEventListener('hidden.bs.modal',
                        function abrirModalCompra() {
                            // Garante que não ficou nenhum backdrop visível
                            const backdrop = document.querySelector('.modal-backdrop');
                            if (backdrop) backdrop.remove();

                            document.body.classList.remove(
                                'modal-open'); // evita fundo travado

                            // Atualiza os dados antes de abrir
                            document.getElementById('produtoId').value = id;
                            document.getElementById('nomeProduto').textContent = nome;

                            // Abre o modal de compra
                            const modalComprar = new bootstrap.Modal(modalComprarEl);
                            modalComprar.show();

                            // Remove o listener para evitar chamadas duplicadas
                            modalDetalhesEl.removeEventListener('hidden.bs.modal',
                                abrirModalCompra);
                        }, {
                        once: true
                    });
                };

            })
            .catch(error => {
                console.error('Erro ao carregar imagens:', error);
                document.getElementById('carouselDetalhesInner').innerHTML = `
                    <div class="text-danger">Erro ao carregar imagens.</div>
                `;
            });
    });
});