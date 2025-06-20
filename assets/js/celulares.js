
// Versão otimizada com melhor performance e tratamento de erros

class CellStory {
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
    new CellStory();
});


// Função para carregar imagens diretamente (RECOMENDADO)
function abrirGaleriaDirecta(imagens) {
    if (imagens && imagens.length > 0) {
        const lightbox = new FsLightbox();
        lightbox.props.sources = imagens;
        lightbox.props.type = 'image';

        // Opções adicionais do fslightbox
        lightbox.props.showThumbsOnMount = true;
        lightbox.props.exitFullscreenOnClose = true;
        lightbox.props.loadOnlyCurrentSource = false;

        lightbox.open();
    } else {
        alert('Nenhuma imagem encontrada para este produto.');
    }
}

