<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?> <!-- Asegúrate de incluir wp_head() -->
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>



  <header id="main-header" class="main-header">
    <div class="navigation-wrapper ">
      <div class="main-navigation-area d-none d-lg-block">
        <div class="main-navigation is-sticky-on">
          <div class="container">
            <div class="row">
              <div class="col-2 my-auto">
                <div class="logo">
                  <a href="<?php echo esc_url(home_url('/')) ?>" class="navbar-brand">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/endulsana-logo.png" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
              <div class="col-10 my-auto">
                <nav class="navbar-area">
                  <!-- <div class="main-navbar">
                    <ul>
                      <li><a href="nosotros.html" class="nav-link">Nosotros</a></li>
                      <li><a href="blog.html" class="nav-link">Blog</a></li>
                      <li><a href="galeria.html" class="nav-link">Galería</a></li>
                      <li><a href="contacto.html" class="nav-link ">Contacto</a></li>
                    </ul>


                  </div>-->
                  <?php
                  $args = array(
                    'menu_class' => 'nav nav-justified flex-column flex-md-row text-center',
                    'container_class'  => 'main-navbar',
                    'theme_location' => 'menu_principal'
                  );
                  wp_nav_menu($args)
                  ?>

                  <div class="main-menu-right">
                    <ul class="menu-right-list">

                      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>


                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="main-mobile-nav is-sticky-on">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="main-mobile-menu">
                <div class="mobile-logo">
                  <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')) ?>" class="navbar-brand">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/endulsana-logo.png" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>
                <div class="menu-collapse-wrap">
                  <div class="hamburger-menu">
                    <button type="button" id="menu-toggle-button" class="menu-collapsed" aria-label="hamburguesa">
                      <div class="top-bun"></div>
                      <div class="meat"></div>
                      <div class="bottom-bun"></div>
                    </button>
                  </div>
                </div>
                <div class="main-mobile-wrapper" tabindex="0">
                  <div id="mobile-menu-build" class="main-mobile-build">
                    <button type="button" class="header-close-menu close-style" aria-label="cerrar"></button>
                    <!--ul id="menu-principal_menu" class="main-menu">

                        <li><a href="nosotros.html" class="nav-link">Nosotros</a></li>
                        <li><a href="blog.html" class="nav-link">Blog</a></li>
                        <li><a href="galeria.html" class="nav-link">Galería</a></li>
                        <li><a href="contacto.html" class="nav-link">Contacto</a></li>

                  </ul>-->
                    <?php
                    // Mostrar el menú móvil registrado en WordPress con un ID personalizado
                    $args_mobile = array(
                      'theme_location' => 'menu_mobile', // Nombre del menú móvil registrado en WordPress
                      'container' => false, // No envolver en un contenedor adicional
                      'menu_class' => 'main-menu', // Clase CSS para el menú
                      'menu_id' => 'menu-principal_menu', // ID personalizado para el menú
                    );
                    wp_nav_menu($args_mobile);
                    ?>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!--navigation-wraper-fin-->
  </header>