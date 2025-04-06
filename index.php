<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESGER</title>
    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main>
        <!-- Sección Hero -->
        <section class="hero">
            <div class="hero-content animate-on-scroll">
                <a href="services.php" class="cta-button">Nuestros Servicios</a>
            </div>
        </section>

        <!-- Sección de características -->
        <section class="features">
            <div class="section-title animate-on-scroll">
                <h2>¿Por qué elegir Esger?</h2>
            </div>
            
            <div class="features-grid">
                <div class="feature-card animate-on-scroll">
                    <i class="fas fa-certificate"></i>
                    <h3>Profesionales Certificados</h3>
                    <p>Personal técnico certificado por la SEC</p>
                </div>
                
                <div class="feature-card animate-on-scroll">
                    <i class="fas fa-bolt"></i>
                    <h3>Materiales de Calidad</h3>
                    <p>Componentes de primera línea garantizados</p>
                </div>
                
                <div class="feature-card animate-on-scroll">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Garantía Total</h3>
                    <p>Soporte técnico y garantía en todas nuestras instalaciones</p>
                </div>
            </div>
        </section>

        <!-- Sección de servicios destacados -->
        <section class="highlighted-services">
            <div class="section-title animate-on-scroll">
                <h2>Nuestros Servicios Principales</h2>
            </div>

            <div class="services-grid">
                <div class="service-card animate-on-scroll">
                    <img src="images/services/panel-solar.jpeg" alt="Paneles Solares">
                    <div class="service-info">
                        <h3>Energía Solar</h3>
                        <p>Instalación y mantenimiento de sistemas fotovoltaicos</p>
                        <a href="services.php#solar" class="service-link">Más información</a>
                    </div>
                </div>

                <div class="service-card animate-on-scroll">
                    <img src="images/services/Soldadura.jpg" alt="Soldadura">
                    <div class="service-info">
                        <h3>Soldadura Industrial</h3>
                        <p>Servicios profesionales de soldadura y estructuras metálicas</p>
                        <a href="services.php#welding" class="service-link">Más información</a>
                    </div>
                </div>

                <div class="service-card animate-on-scroll">
                    <img src="images/services/porton.jpg" alt="Portones Eléctricos">
                    <div class="service-info">
                        <h3>Portones Automáticos</h3>
                        <p>Instalación y reparación de sistemas automatizados</p>
                        <a href="services.php#gates" class="service-link">Más información</a>
                    </div>
                </div>

                <div class="service-card animate-on-scroll">
                    <img src="images/services/instalacion-electrica.jpg" alt="Instalaciones Eléctricas">
                    <div class="service-info">
                        <h3>Electricidad Domiciliaria e Industrial</h3>
                        <p>Cableado estructurado, instalaciones Eléctricas con cumplimiento de normas SEC</p>
                        <a href="services.php#electrical" class="service-link">Más información</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/social-buttons.php'; ?>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
