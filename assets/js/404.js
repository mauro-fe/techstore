// Animação emoji interativo
const errorEmoji = document.querySelector('.error-emoji');
const emojis = ['😵', '🤔', '😅', '🤖', '👻', '📱', '🔌', '📡'];
let currentIndex = 0;

errorEmoji.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % emojis.length;
    errorEmoji.textContent = emojis[currentIndex];
    errorEmoji.style.animation = 'none';
    setTimeout(() => {
        errorEmoji.style.animation = 'float 3s ease-in-out infinite';
    }, 10);
});