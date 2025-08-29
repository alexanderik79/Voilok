document.addEventListener('DOMContentLoaded', () => {
    const nav = document.getElementById('main-nav');
    const toggleBtn = document.querySelector('.menu-toggle');

    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            nav.classList.toggle('active');
        });
    }

    // Закрытие меню при клике на ссылку
    const navLinks = document.querySelectorAll('#main-nav a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            nav.classList.remove('active');
        });
    });
});