<?php 
$pageTitle = "Esger - Galería de Proyectos";
include 'includes/header.php'; 
?>

<main class="gallery-main">
    <!-- Hero Section Galería -->
    <section class="gallery-hero">
        <div class="hero-content animate-on-scroll">
            <h1>Nuestros Trabajos</h1>
            <p>Proyectos realizados con profesionalismo y excelencia</p>
        </div>
    </section>
    <link rel="stylesheet" href="css/styles.css">

    <!-- Filtros de Categorías -->
    <section class="gallery-filters">
        <div class="filter-container animate-on-scroll">
            <button class="filter-btn active" data-filter="all">Todos</button>
            <button class="filter-btn" data-filter="solar">Energía Solar</button>
            <button class="filter-btn" data-filter="electricidad">Electricidad</button>
            <button class="filter-btn" data-filter="portones">Portones</button>
            <button class="filter-btn" data-filter="soldadura">Soldadura</button>
        </div>
    </section>

    <!-- Grid de Galería -->
    <section class="gallery-grid">
        <?php
        // Array de imágenes (simulando base de datos)
        $projects = [
            ['cat' => 'solar', 'img' => 'instalacion paneles.jpeg', 'title' => 'Instalación Residencial 10kW'],
            ['cat' => 'solar', 'img' => 'instalacion paneles.png', 'title' => 'Instalacion Recidencial panel solar'],
            ['cat' => 'electricidad', 'img' => 'tablero1.jpeg', 'title' => 'Tablero Principal'],
            ['cat' => 'electricidad', 'img' => 'instalacion casa.jpeg', 'title' => 'Instalacion Electrica domiciliaria'],
            ['cat' => 'portones', 'img' => 'porton 1.jpeg', 'title' => 'Portón metalico Residencial'],
            ['cat' => 'portones', 'img' => 'porton 2.jpeg', 'title' => 'Reja perimetral domiciliaria'],
            ['cat' => 'soldadura', 'img' => 'porton3.jpeg', 'title' => 'Soporte metalico para luminaria led'],
            ['cat' => 'soldadura', 'img' => 'soporte led.jpeg', 'title' => 'Soporte Luminaria Led'],
        ];
        
        foreach ($projects as $project) {
            echo '
            <div class="gallery-item animate-on-scroll" data-category="'.$project['cat'].'">
                <img src="images/gallery/'.$project['img'].'" alt="'.$project['title'].'">
                <div class="overlay">
                    <h3>'.$project['title'].'</h3>
                    <button class="view-btn">Ampliar</button>
                </div>
            </div>';
        }
        ?>
    </section>

    <!-- Lightbox -->
    <div class="lightbox">
        <span class="close-btn">&times;</span>
        <span class="nav-btn prev-btn">&lsaquo;</span>
        <span class="nav-btn next-btn">&rsaquo;</span>
        <img class="lightbox-img" alt="Vista ampliada">
        <div class="caption"></div>
    </div>
</main>

<?php include 'includes/social-buttons.php'; ?>
<?php include 'includes/footer.php'; ?>