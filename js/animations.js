document.addEventListener('DOMContentLoaded', function() {
    // Animación para los elementos al hacer scroll
    const observerOptions = {
        threshold: 0.2, // Se activa cuando el 20% del elemento es visible
        rootMargin: '0px 0px -50px 0px' // Activa un poco antes
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target); // Deja de observar una vez activado
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(element => {
        if (element) observer.observe(element);
    });

    // Smooth scroll para enlaces internos
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
});



// Activar tooltips para certificaciones
document.querySelectorAll('.certification-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-5px)';
        this.style.transition = 'transform 0.3s ease';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
    });
});

// Sistema de scroll para anchors
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', function(e) {
        if(this.hash !== "") {
            e.preventDefault();
            const hash = this.hash;
            document.querySelector(hash).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});


// Filtrado de Galería
document.querySelectorAll('.filter-btn').forEach(button => {
    button.addEventListener('click', function() {
        // Activar filtro
        document.querySelector('.filter-btn.active').classList.remove('active');
        this.classList.add('active');
        const filter = this.dataset.filter;

        // Filtrar elementos
        document.querySelectorAll('.gallery-item').forEach(item => {
            if(filter === 'all' || item.dataset.category === filter) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});

// Lightbox
const lightbox = document.querySelector('.lightbox');
const lightboxImg = document.querySelector('.lightbox-img');
const caption = document.querySelector('.caption');
const images = document.querySelectorAll('.gallery-item img');
let currentIndex = 0;

document.querySelectorAll('.view-btn').forEach((btn, index) => {
    btn.addEventListener('click', () => {
        currentIndex = index;
        updateLightbox();
        lightbox.style.display = 'flex';
    });
});

document.querySelector('.close-btn').addEventListener('click', () => {
    lightbox.style.display = 'none';
});

document.querySelector('.prev-btn').addEventListener('click', showPrev);
document.querySelector('.next-btn').addEventListener('click', showNext);

// Navegación con teclado
document.addEventListener('keydown', (e) => {
    if(lightbox.style.display === 'flex') {
        if(e.key === 'ArrowLeft') showPrev();
        if(e.key === 'ArrowRight') showNext();
        if(e.key === 'Escape') lightbox.style.display = 'none';
    }
});

function showPrev() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateLightbox();
}

function showNext() {
    currentIndex = (currentIndex + 1) % images.length;
    updateLightbox();
}

function updateLightbox() {
    const activeImage = images[currentIndex];
    lightboxImg.src = activeImage.src;
    caption.textContent = activeImage.parentElement.querySelector('h3').textContent;
}



// Validación de Formulario
document.getElementById('contactForm').addEventListener('submit', function(e) {
    const honeypot = document.getElementById('honeypot').value;
    if(honeypot !== '') {
        e.preventDefault();
        return false;
    }

    const phone = document.getElementById('phone').value;
    const phonePattern = /^[0-9]{9}$/;
    
    if(!phonePattern.test(phone)) {
        e.preventDefault();
        alert('Por favor ingrese un número de teléfono válido (9 dígitos)');
        return false;
    }
});

// Limpieza de número telefónico
document.getElementById('phone').addEventListener('input', function(e) {
    this.value = this.value.replace(/[^0-9]/g, '');
});