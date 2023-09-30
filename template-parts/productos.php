  <section id="service-section" class="service-section service-home ">

    <div class="container">
      <div class="row g-3">
        <div class="col-lg-6 col-12 mx-lg-auto mb-5 text-center">
          <div class="heading-default  ">
            <?php $titulo = get_post_meta(get_the_ID(), 'eds_producto_titulo_seccion_productos', false) ?>
            <?php $subtitulo = get_post_meta(get_the_ID(), 'eds_producto_subtitulo_seccion_productos', false) ?>
            <h3><?php echo isset($titulo[0]) ? $titulo[0] : ''; ?></h3>
            <span class="hr-line"><img src="<?php echo get_template_directory_uri(); ?>/img/separador_green.png" class="separador"></span>
            <p><?php echo isset($subtitulo[0]) ? $subtitulo[0] : ''; ?></p>
          </div>
        </div>
      </div>
      <div class="row g-3 hm-serv-content justify-content-center owl-carousel owl-theme" id="owl-productos">
        <?php
        $productos = get_post_meta(get_the_ID(), 'eds_producto_productos', true);

        if (is_array($productos) && !empty($productos)) { // Verifica que $productos es un array y que no está vacío
          foreach ($productos as $producto) {
            // Verificamos que los índices que vamos a usar existen en el array $producto
            $imageProducto = isset($producto['image_Producto']) ? $producto['image_Producto'] : '';
            $tituloItem = isset($producto['titulo_item']) ? $producto['titulo_item'] : '';
            $description = isset($producto['description']) ? $producto['description'] : '';
        ?>

              <div class="service-item ">
                <div class="service-item-overlay">
                  <img src="<?php echo esc_url($imageProducto); ?>" class="img-fluid">
                  <span class="badge"><?php echo esc_html($tituloItem); ?></span>
                </div>
                <div class="service-content">
                  <h5><a href="#"><?php echo esc_html($description); ?></a></h5>
                  <a href="#" class="btn btn-link btn-like-icon">Leer más <span class="bticn"><i class="fa fa-chevron-right"></i></span></a>
                </div>
              </div>

        <?php
          }
        }
        ?>

      </div>
    </div>
    <div class="lg-shape1_hojas clipartss"><img src="<?php echo get_template_directory_uri(); ?>/img/hojas.png" alt="image"></div>
    <div class="lg-shape2_hojas clipartss"><img src="<?php echo get_template_directory_uri(); ?>/img/hojas.png" alt="image"></div>
    <div class="lg-shape2 clipartss"><img src="<?php echo get_template_directory_uri(); ?>/img/icono1.png" alt="image"></div>
    <div class="lg-shape3 clipartss"><img src="<?php echo get_template_directory_uri(); ?>/img/icono2.png" alt="image"></div>
    <div class="lg-shape4 clipartss"><img src="<?php echo get_template_directory_uri(); ?>/img/icono3.png" alt="image"></div>
    <div class="lg-shape5 clipartss"><img src="<?php echo get_template_directory_uri(); ?>/img/icono1.png" alt="image"></div>

  </section>