<?php
// Función para renderizar el menú de navegación
function renderNavbar($logoSrc, $navItems) {
  // Apertura de la barra de navegación
  echo "<nav class='navbar navbar-expand-lg bg-body-tertiary fixed-top'>
          <div class='container-fluid'>
              <a class='navbar-brand' href='#'>
                  <img src='$logoSrc' alt='Logo' width='30' height='30' class='d-inline-block align-text-top'>
              </a>
              <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                  <span class='navbar-toggler-icon'></span>
              </button>
              <div class='collapse navbar-collapse' id='navbarNav'>
                  <ul class='navbar-nav'>";
  
  // Renderizar los elementos del menú
  foreach ($navItems as $item) {
      $activeClass = isset($item['active']) && $item['active'] ? 'active' : '';
      echo "<li class='nav-item'>
              <a class='nav-link $activeClass' href='{$item['link']}'>{$item['label']}</a>
            </li>";
  }

  echo "      </ul>
              </div>
          </div>
      </nav>";
}

function renderCarousel($carouselId, $slides) {
    echo "
    <div id='$carouselId' class='carousel slide mb-6' data-bs-ride='carousel'>
      <div class='carousel-indicators'>";
      
    // Generar los botones de los indicadores
    foreach ($slides as $index => $slide) {
        $activeClass = $index === 0 ? 'active' : '';
        echo "
        <button type='button' data-bs-target='#$carouselId' data-bs-slide-to='$index' class='$activeClass' aria-label='Slide " . ($index + 1) . "'></button>";
    }

    echo "
      </div>
      <div class='carousel-inner'>";

    // Generar los slides
    foreach ($slides as $index => $slide) {
        $activeClass = $index === 0 ? 'active' : '';
        echo "
        <div class='carousel-item $activeClass'>
          <div class='carousel-img-container'>
            <img src='{$slide['imageSrc']}' class='d-block carousel-img' alt='{$slide['imageAlt']}'>
          </div>
          <div class='container'>
            <div class='carousel-caption {$slide['captionAlign']}'>
              <h1>{$slide['title']}</h1>
              <p>{$slide['description']}</p>
              <p><a class='btn btn-lg btn-primary' href='{$slide['buttonLink']}'>{$slide['buttonText']}</a></p>
            </div>
          </div>
        </div>";
    }

    echo "
      </div>
      <button class='carousel-control-prev' type='button' data-bs-target='#$carouselId' data-bs-slide='prev'>
        <span class='carousel-control-prev-icon' aria-hidden='true'></span>
        <span class='visually-hidden'>Previous</span>
      </button>
      <button class='carousel-control-next' type='button' data-bs-target='#$carouselId' data-bs-slide='next'>
        <span class='carousel-control-next-icon' aria-hidden='true'></span>
        <span class='visually-hidden'>Next</span>
      </button>
    </div>";
}

// Función para renderizar los botones flotantes
function renderSocialButtons($socialLinks) {
  foreach ($socialLinks as $social) {
      echo "<a href='{$social['link']}' 
              class='social-btn {$social['platform']}-btn' 
              target='_blank' 
              rel='noopener noreferrer' 
              style='bottom: {$social['bottom']}; background-color: {$social['color']}'>
              <i class='bi {$social['icon']}'></i>
            </a>";
  }
}

// Función para renderizar las secciones "featurette" basadas en un array
function renderAboutSections($sections) {
  foreach ($sections as $section) {
      // Determinar las clases de orden según el valor de 'order'
      $colOrder1 = $section['order'] === 'reverse' ? 'order-md-2' : '';
      $colOrder2 = $section['order'] === 'reverse' ? 'order-md-1' : '';

      // Renderizar la sección
      echo "
      <hr class='featurette-divider'>
      <div class='row featurette d-flex align-items-center'>
        <div class='col-md-7 $colOrder1'>
          <h2 class='featurette-heading fw-normal lh-1'>{$section['heading']}</h2>
          <p class='lead'>{$section['content']}</p>
        </div>
        <div class='col-md-5 $colOrder2'>
          <img src='{$section['imageSrc']}' alt='{$section['imageAlt']}' class='bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto' width='500' height='500'>
        </div>
      </div>
      ";
  }
}

  function renderProduct($products) {
    echo '<div class="row">'; // Comienza el contenedor de la fila

    // Usamos un ciclo 'for' para iterar sobre el arreglo de productos
    for ($i = 0; $i < count($products); $i++) {
        $product = $products[$i]; // Obtenemos el producto en la posición actual

        echo '
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="' . $product['image'] . '" class="img-fluid rounded-start" alt="' . $product['alt'] . '">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title">' . $product['name'] . '</h5>
                            <p class="card-text">' . $product['description'] . '</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }

    echo '</div>'; // Cierra la fila
  }

  function renderService($services) {
    echo '<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">'; // Comienza la fila


    // Usamos un ciclo 'for' para iterar sobre el arreglo de servicios
    for ($i = 0; $i < count($services); $i++) {
        $service = $services[$i]; // Obtenemos el servicio en la posición actual

        echo '
        <div class="col d-flex align-items-start">
            <i class="' . $service['icon'] . ' icon-large"></i>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">' . $service['title'] . '</h3>
                <p>' . $service['description'] . '</p>
            </div>
        </div>';
    }

    echo '</div>'; // Cierra la fila
  }

  function renderContact($contacts) {
    echo '<div id="contacts" class="container py-5">';
    echo '<h2 class="text-center fw-bold display-4 mb-5">Hablanos y Síguenos</h2>';
    echo '<div class="row row-cols-1 row-cols-md-4 g-4">'; // Cambia row-cols-md-3 a row-cols-md-4

    // Iteramos sobre el arreglo de contactos
    foreach ($contacts as $contact) {
        echo '<div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi ' . $contact['icon'] . '" style="font-size: 4rem; color: ' . $contact['color'] . ';"></i>
                        <h5 class="card-title fw-bold mt-3">' . $contact['title'] . '</h5>
                        <p class="card-text">' . $contact['description'] . '</p>
                    </div>
                    <div class="card-footer">
                        <a href="' . $contact['link'] . '" target="_blank" class="btn ' . $contact['btn_class'] . '">' . $contact['btn_text'] . '</a>
                    </div>
                </div>
              </div>';
    }

    echo '</div>';
    echo '</div>';
}

  function renderFooter($socialLinks) {
    echo '<div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Como el Ajo</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">';

    // Iteramos sobre el arreglo de redes sociales para generar los íconos
    foreach ($socialLinks as $link) {
        echo '<li class="ms-3">
                <a class="text-body-secondary" href="' . $link['url'] . '" target="_blank" rel="noopener noreferrer">
                    <i class="bi ' . $link['icon'] . '" style="font-size: 1.5rem; color: ' . $link['color'] . ';"></i>
                </a>
              </li>';
    }

    echo '  </ul>
          </div>';
  }
?>