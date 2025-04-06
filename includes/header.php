<?php
// Configuración dinámica del título
$pageTitle = isset($pageTitle) ? $pageTitle : "Esger - Soluciones Energéticas Inteligentes";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Especialistas en instalaciones eléctricas, energía solar, soldadura industrial y automatización de portones. Certificados por la SEC.">
    <title><?php echo $pageTitle; ?></title>
    
    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Iconos Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Preconexión para fuentes y recursos externos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="images/favicon.png" type="image/png">


</head>
<body>
    <header class="main-header">
        <!-- Navegación principal -->
        <nav class="navbar">
            <div class="nav-container">
                <!-- Logo -->
                <a href="index.php" class="brand-logo">
                    <img src="images/logo/logo esger.jpeg" alt="Esger Logo" class="logo-img">
                </a>

                <!-- Clima -->
                <div class="weather-info" id="weather-info">
    <i class="fas fa-spinner fa-spin"></i> <!-- Se mostrará mientras carga -->
</div>

<!-- control de audio -->
<audio id="welcomeAudio" src="/images/audio/sound mp3.mp3"></audio>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const welcomeAudio = document.getElementById('welcomeAudio');

    if (!welcomeAudio) {
        console.error('El elemento de audio no se encontró.');
        return;
    }

    // Intentar reproducir el audio automáticamente
    welcomeAudio.play().catch(error => {
        console.warn('La reproducción automática fue bloqueada por el navegador.', error);
    });

    // Detener audio al salir de la página
    window.addEventListener('beforeunload', function() {
        welcomeAudio.pause();
        welcomeAudio.currentTime = 0;
    });
});
</script>





                <!-- Menú Hamburguesa para móviles -->
                <div class="menu-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                

                <!-- Navegación Desktop -->
                <ul class="nav-menu" id="nav-menu">
                    <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''); ?>">
                        <a href="index.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''); ?>">
                        <a href="services.php" class="nav-link">Servicios</a>
                    </li>
                    <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : ''); ?>">
                        <a href="gallery.php" class="nav-link">Proyectos</a>
                    </li>
                    <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''); ?>">
                        <a href="about.php" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''); ?>">
                        <a href="contact.php" class="nav-link cta-contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    
    <!-- Agregamos el script al final del body para asegurar que el DOM esté cargado -->
    <script src="js/weather.js"></script>
</body>
</html>
