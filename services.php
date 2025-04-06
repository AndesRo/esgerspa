<?php 
$pageTitle = "Esger - Servicios Especializados";
include 'includes/header.php'; 
?>


<main class="services-main">
    <!-- Hero Section Servicios -->
    <section class="services-hero">
        <div class="hero-content animate-on-scroll">
        <h1>Servicios Especializados</h1>
        <p>Soluciones integrales en energía y sistemas eléctricos</p>
    </div>
    </section>

    <!-- Listado de Servicios -->
    <section class="service-details">
        <!-- Paneles Solares -->
        <div class="service-section" id="solar">
            <div class="service-grid animate-on-scroll">
                <div class="service-image">
                    <img src="images/services/paneles.png" alt="Instalación de Paneles Solares">
                </div>
                <div class="service-description">
                    <h2><i class="fas fa-solar-panel"></i> Energía Solar Fotovoltaica</h2>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Instalación residencial e industrial</li>
                        <li><i class="fas fa-check-circle"></i> Sistemas on-grid y off-grid</li>
                        <li><i class="fas fa-check-circle"></i> Mantenimiento preventivo y correctivo</li>
                        <li><i class="fas fa-check-circle"></i> Estudios de eficiencia energética</li>
                    </ul>
                    <div class="service-benefits">
                        <h3>Beneficios:</h3>
                        <p>Reducción hasta 90% en tu factura eléctrica · Amigable con el medio ambiente.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Soldadura -->
        <div class="service-section" id="welding">
            <div class="service-grid animate-on-scroll">
                <div class="service-description">
                    <h2><i class="fas fa-tools"></i> Servicios de Soldadura</h2>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Estructuras metálicas</li>
                        <li><i class="fas fa-check-circle"></i> Fabricación de soportes para paneles solares</li>
                        <li><i class="fas fa-check-circle"></i> Reparaciones industriales</li>
                        <li><i class="fas fa-check-circle"></i> Soldadura MIG/MAG y TIG</li>
                    </ul>
                    <div class="service-benefits">
                        <h3>Ventajas:</h3>
                        <p>Personal certificado · Materiales de primera calidad · Cumplimiento de normas de seguridad</p>
                    </div>
                </div>
                <div class="service-image">
                    <img src="images/services/soldadura industrial.jpeg" alt="Trabajos de Soldadura">
                </div>
            </div>
        </div>

        <!-- Portones Eléctricos -->
        <div class="service-section" id="gates">
            <div class="service-grid animate-on-scroll">
                <div class="service-image">
                    <img src="images/services/Porton-electrico.jpg" alt="Portón Eléctrico Automático">
                </div>
                <div class="service-description">
                    <h2><i class="fas fa-robot"></i> Automatización de Portones</h2>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Instalación de motores y sistemas automáticos</li>
                        <li><i class="fas fa-check-circle"></i> Reparación y mantenimiento</li>
                        <li><i class="fas fa-check-circle"></i> Sistemas con control remoto y APP móvil</li>
                        <li><i class="fas fa-check-circle"></i> Certificación de seguridad SEC</li>
                    </ul>
                    <div class="service-benefits">
                        <h3>Ventajas:</h3>
                        <p>Mayor seguridad · Comodidad de uso · Integración con sistemas inteligentes</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instalaciones Eléctricas -->
        <div class="service-section" id="electrical">
            <div class="service-grid animate-on-scroll">
                <div class="service-description">
                    <h2><i class="fas fa-bolt"></i> Electricidad Domiciliaria e Industrial</h2>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle"></i> Cableado estructurado</li>
                        <li><i class="fas fa-check-circle"></i> Tableros eléctricos normados</li>
                        <li><i class="fas fa-check-circle"></i> Iluminación eficiente</li>
                        <li><i class="fas fa-check-circle"></i> Certificación SEC</li>
                    </ul>
                    <div class="service-benefits">
                        <h3>Garantías:</h3>
                        <p>Cumplimiento de normativas · Materiales certificados · Presupuestos sin costo</p>
                    </div>
                </div>
                <div class="service-image">
                    <img src="images/services/instalacion electrica.jpg" alt="Instalación Eléctrica">
                </div>
            </div>
        </div>
    </section>
    
<?php include 'includes/social-buttons.php'; ?>
<?php include 'includes/footer.php'; ?>