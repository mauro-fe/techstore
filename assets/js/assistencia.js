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
    card.addEventListener('mouseenter', function () {
        this.style.transform = 'translateY(-10px) scale(1.02)';
    });

    card.addEventListener('mouseleave', function () {
        this.style.transform = 'translateY(0) scale(1)';
    });
});

// Loading animation
window.addEventListener('load', function () {
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

document.getElementById('enviarAssistencia').addEventListener('click', function (e) {
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