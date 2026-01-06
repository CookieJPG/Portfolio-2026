document.addEventListener('DOMContentLoaded', () => {
    const main = document.querySelector('main');
    const navLinks = document.querySelectorAll('nav a');
    const sections = document.querySelectorAll('section');

    // 1. Manejo de clics en los botones (con scroll suave)
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const targetId = link.getAttribute('href');
            if (targetId.startsWith('#')) {
                e.preventDefault();
                const targetSection = document.querySelector(targetId);

                if (targetSection) {
                    main.scrollTo({
                        left: targetSection.offsetLeft,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // 2. Observer para detectar qué sección está en pantalla (Touchpad/Touch)
    const observerOptions = {
        root: main,
        threshold: 0.6 // Se activa cuando el 60% de la sección es visible
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                updateActiveButton(id);
            }
        });
    }, observerOptions);

    sections.forEach(section => observer.observe(section));

    function updateActiveButton(activeId) {
        navLinks.forEach(link => {
            const href = link.getAttribute('href').replace('#', '');
            if (href === activeId) {
                link.classList.remove('text-slate-400', 'border-transparent');
                link.classList.add('text-blue-400', 'border-blue-400');
            } else {
                link.classList.remove('text-blue-400', 'border-blue-400');
                link.classList.add('text-slate-400', 'border-transparent');
            }
        });
    }
});