document.addEventListener('DOMContentLoaded', () => {
    const main = document.querySelector('main');
    const navLinks = document.querySelectorAll('nav a');

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

                    updateActiveButton(link);
                }
            }
        });
    });

    function updateActiveButton(activeLink) {
        navLinks.forEach(link => {
            link.classList.remove('text-blue-400', 'border-blue-400');
            link.classList.add('text-slate-400', 'border-transparent');
        });
        activeLink.classList.remove('text-slate-400', 'border-transparent');
        activeLink.classList.add('text-blue-400', 'border-blue-400');
    }
});