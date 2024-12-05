<?php
    include 'elements.php';
    include 'db/connection.php';

    $jsonFilePath = 'db/data.json'; // Ruta a tu archivo JSON
    $reader = new JsonReader($jsonFilePath); // Crea una instancia de la clase con la ruta del JSON

    $navItems = $reader->getArray('navItems'); // Llama al método para obtener el array
    $slides = $reader->getArray('slides'); // Llama al método para obtener el array
    $socialLinks = $reader->getArray('socialLinks'); // Llama al método para obtener el array
    $aboutSections = $reader->getArray('aboutSections'); // Llama al método para obtener el array
    $products = $reader->getArray('products'); // Llama al método para obtener el array
    $services = $reader->getArray('services'); // Llama al método para obtener el array
    $contacts = $reader->getArray('contacts'); // Llama al método para obtener el array
?>

<header class="header">
    <?php
        renderNavbar('assets/img/logos/logo.jpg', $navItems);
        renderCarousel('myCarousel', $slides);
        renderSocialButtons($socialLinks);
    ?>
</header>

<main>
    <hr class="featurette-divider">

    <div id="services" class="container px-4 py-5" id="icon-grid">
    
        <h2 class="featurette-heading text-center fw-bold display-4 mb-5">Nuestros Servicios</h2>
        <p>
        Nos abrimos al enfoque B2B del sector empresarial que incluye la integración de huertos urbanos en el entorno laboral, enriqueciendo los espacios, ofreciendo pausas activas y actividades de trabajo en equipo que promueven un ambiente laboral más saludable y productivo. Además, buscamos expandir nuestro servicio a hoteles, restaurantes y bares, brindando una experiencia única a sus clientes y destacando su compromiso con la sustentabilidad y la calidad alimentaria.
        </p>
        <?php
        // Llama a la función renderService para generar los servicios
        renderService($services);
        ?>
    </div>
    <hr class="featurette-divider">
    <div id="about" class="container px-4 py-5">
        <h2 class="featurette-heading text-center fw-bold display-4 mb-5">Somos COMO EL AJO</h2>
        <?php
            // Llamar a la función para renderizar las secciones
            renderAboutSections($aboutSections);
        ?>

    </div>
    <hr class="featurette-divider">
    <div id="products" class="container px-4 py-5">
  
        <h2 class="featurette-heading text-center fw-bold display-4 mb-5">Nuestros Productos</h2>

        <?php
        // Llama a la función renderProduct para generar las tarjetas de productos
            renderProduct($products);
        ?>
    </div>
    <hr class="featurette-divider">
    <?php
        // Llama a la función renderContact para generar las tarjetas de contacto
        renderContact($contacts);
    ?>
<main>

<footer class="container">
        <!-- <p>© 2024-2029 Como el Ajo. · Página hecha por <a href="#">[MOL]</a></p> -->
    <?php
        // Llama a la función renderFooter para generar el pie de página
        renderFooter($socialLinks);;
    ?>
        <!-- Firma del desarrollador -->
    <div class="text-center mt-4">
        <p class="text-muted" style="font-size: 0.875rem;">Página desarrollada por PablojsGut</p>
    </div>
</footer>