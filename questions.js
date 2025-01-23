const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');

navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    document.body.classList.toggle('nav-active');
    navToggle.classList.toggle('active');
});


document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const toggleButton = item.querySelector('.faq-toggle');
        toggleButton.addEventListener('click', () => {
            const content = item.querySelector('.faq-content');
            content.classList.toggle('active');
            toggleButton.textContent = content.classList.contains('active') ? '-' : '+';
        });
    });
});




