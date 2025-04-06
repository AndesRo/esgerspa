<?php
// Botones sociales con posición fija
// Los enlaces deben ser actualizados con los perfiles reales
?>
<div class="social-floating">
    <div class="social-container">
        <!-- WhatsApp -->
        <a href="https://wa.me/56989235286?text=Hola%20!%2C%20me%20gustaría%20obtener%20más%20información%20sobre%20sus%20servicios."
   target="_blank" 
   class="social-btn whatsapp"
   aria-label="Contactar por WhatsApp">
    <i class="fab fa-whatsapp"></i>
    <span class="tooltip">¡Escríbenos!</span>
</a>

        <!-- Facebook -->
        <a href="https://www.facebook.com/share/1FLt1Bx6RW/" 
           target="_blank" 
           class="social-btn facebook"
           aria-label="Síguenos en Facebook">
            <i class="fab fa-facebook-f"></i>
            <span class="tooltip">Síguenos en Facebook</span>
        </a>

        <!-- Instagram -->
        <a href="https://www.instagram.com/esgerspa/?igsh=MTdydzYxZTU5cWtzcw%3D%3D#" 
           target="_blank" 
           class="social-btn instagram"
           aria-label="Síguenos en Instagram">
            <i class="fab fa-instagram"></i>
            <span class="tooltip">Síguenos en Instagram</span>
        </a>
    </div>
</div>

<style>
/* Estilos para los botones sociales */
.social-floating {
    position: fixed;
    right: 20px;
    bottom: 20px;
    z-index: 1000;
}

.social-container {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.social-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.social-btn i {
    font-size: 1.4rem;
    color: white;
}

.tooltip {
    position: absolute;
    right: 70px;
    background: rgba(0,0,0,0.8);
    color: white;
    padding: 8px 15px;
    border-radius: 5px;
    font-size: 0.9rem;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}

.social-btn:hover .tooltip {
    opacity: 1;
    right: 60px;
}

/* Colores y efectos específicos */
.whatsapp {
    background: #25D366;
}

.facebook {
    background: #3B5998;
}

.instagram {
    background: #E1306C;
}

.social-btn:hover {
    transform: translateY(-3px) scale(1.1);
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
}

/* Responsive para móviles */
@media (max-width: 768px) {
    .social-floating {
        bottom: 10px;
        right: 10px;
    }
    
    .social-btn {
        width: 45px;
        height: 45px;
    }
    
    .tooltip {
        display: none;
    }
}
</style>