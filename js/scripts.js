document.addEventListener('DOMContentLoaded', function() {
    // Menú móvil
    const menuToggle = document.getElementById('mobile-menu');
    const navMenu = document.getElementById('nav-menu');
    
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            menuToggle.classList.toggle('active');
        });
    }

    // Cerrar menú al hacer click en enlaces
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            if (navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                menuToggle.classList.remove('active');
            }
        });
    });

    // Validación de formulario de contacto
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const honeypot = document.getElementById('honeypot')?.value;
            if (honeypot && honeypot !== '') {
                e.preventDefault();
                return false;
            }

            const phone = document.getElementById('phone')?.value;
            if (!/^\d{9}$/.test(phone)) {
                e.preventDefault();
                alert('Por favor ingrese un número de 9 dígitos válido.');
                return false;
            }
        });

        // Formateo automático de teléfono (solo números)
        document.getElementById('phone')?.addEventListener('input', function() {
            this.value = this.value.replace(/\D/g, '');
        });
    }

    // Smooth Scroll para navegación
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Tooltips para botones sociales
    document.querySelectorAll('.social-btn').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            const tooltip = this.querySelector('.tooltip');
            if (tooltip) tooltip.style.opacity = '1';
        });
        
        btn.addEventListener('mouseleave', function() {
            const tooltip = this.querySelector('.tooltip');
            if (tooltip) tooltip.style.opacity = '0';
        });
    });

    // Cerrar lightbox
    const closeBtn = document.querySelector('.close-btn');
    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            document.querySelector('.lightbox').style.display = 'none';
        });
    }

    // Manejo de teclado en lightbox
    document.addEventListener('keydown', (e) => {
        const lightbox = document.querySelector('.lightbox');
        if (lightbox && getComputedStyle(lightbox).display === 'flex') {
            if (e.key === 'Escape') {
                lightbox.style.display = 'none';
            }
        }
    });
});
