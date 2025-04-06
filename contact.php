<?php 
$pageTitle = "Esger - Contacto";
include 'includes/header.php'; 
?>

<main class="contact-main">
    <!-- Sección Hero -->
    <section class="contact-hero">
        <div class="hero-content animate-on-scroll">
            <h1>Contáctenos</h1>
            <p>Estamos aquí para responder sus consultas y brindarle toda la información que necesita</p>
        </div>
    </section>

    <div class="contact-container">
        <!-- Información de Contacto -->
        <section class="contact-info">
            <div class="info-card animate-on-scroll">
                <h2><i class="fas fa-map-marker-alt"></i> Ubicación</h2>
                <p>Camino Relun <br>Villarrica, Chile</p>
            </div>

            <div class="info-card animate-on-scroll">
                <h2><i class="fas fa-phone"></i> Teléfono</h2>
                <p>+56 9 989235286<br></p>
                <!-- Botón de WhatsApp -->
                <a href="https://wa.me/56989235286?text=Hola%20!%2C%20me%20gustaría%20obtener%20más%20información%20sobre%20sus%20servicios." target="_blank" class="contact-btn whatsapp-btn">
                Enviar WhatsApp
            </a>

            </div>

            <div class="info-card animate-on-scroll">
                <h2><i class="fas fa-envelope"></i> Correo</h2>
                <p>esgerspa@gmail.com<br></p>
                <!-- Botón de Correo -->
                <a href="mailto:esgerspa@gmail.com" class="contact-btn email-btn">
                    Enviar Correo
                </a>
            </div>

            <div class="info-card animate-on-scroll">
                <h2><i class="fas fa-clock"></i> Horario</h2>
                <p>Lunes a Viernes: 8:30 - 19:00<br>Sábados: 9:00 - 14:00</p>
            </div>
        </section>

        <!-- Mapa -->
        <section class="contact-map">
        <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100000!2d-72.245530!3d-39.325750!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzkmMTknMzIuNyJTIDcywrAxNCc0My45Ilc!5e0!3m2!1ses-419!2scl!4v1710598945678" 
    width="100%" 
    height="450" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy">
</iframe>

        </section> 
    </div>
</main>

<?php include 'includes/social-buttons.php'; ?>
<?php include 'includes/footer.php'; ?>

