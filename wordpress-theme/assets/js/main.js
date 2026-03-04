// Tilman Gerhardt – Theme JS
// (Smooth scroll, nav, modal etc. werden via Block JS eingebunden)
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', function(e) {
            const id = this.getAttribute('href');
            const el = document.querySelector(id);
            if (el) { e.preventDefault(); el.scrollIntoView({behavior: 'smooth'}); }
        });
    });
    // Nav scroll
    const nav = document.querySelector('header');
    if (nav) window.addEventListener('scroll', () => nav.classList.toggle('scrolled', window.scrollY > 50));
});
