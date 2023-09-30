<?php get_header(); ?>


<main>
  <?php while (have_posts()) : the_post();
    get_template_part('template', 'parts/slider');

  ?>
    <?php
    $productos_destacados = new WP_Query(array(
      'pagename' => 'productos',
    ));

    if ($productos_destacados->have_posts()) :
      while ($productos_destacados->have_posts()) : $productos_destacados->the_post();
        get_template_part('template-parts/productos');
      endwhile;
      wp_reset_postdata();
    endif;
    ?>

    <section class="description st-py-default  works">
      <div class="container img-principales ">
        <div class="row g-3">
          <div class="col-lg-6 col-12 mx-lg-auto mt-lg-5 ">
            <div class="heading-default  text-center">
              <!--<h3>Materias Primas</h3>-->
              <h3><?php echo get_post_meta(get_the_ID(), 'eds_homepage_Titulo_seccion_info', true); ?></h3>
              <!--<span class="hr-line"><img src="img/separador_green.png" class="separador"></span>-->
              <span class="hr-line"><img src="<?php echo get_template_directory_uri(); ?>/img/separador_green.png" class="separador"></span>
              <p><?php echo get_post_meta(get_the_ID(), 'eds_homepage_subtitulo_seccion_info', true); ?></p>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row imagen-sup imagen">
            <div class="col-md-6 bg-imagen-home">
              <img src="<?php echo get_post_meta(get_the_ID(), 'eds_homepage_imagen_informacion', true); ?>" class="img-fluid  w-50 ">

            </div>
            <div class="col-md-6">
              <div class="row justify-content-center align-items-center h-100">

                <div class="col-sm-11 col-md-8">
                  <div class="contenido my-lg-5 my-0 text-start works_box" id="white_bg">
                    <h3><?php echo get_post_meta(get_the_ID(), 'eds_homepage_Titulo_seccion_info_interior', true); ?></h3>
                    <?php
                    $contenido_completo = get_post_meta(get_the_ID(), 'eds_homepage_Texto_descripcion', true);
                    $resumen = wp_trim_words($contenido_completo, 25, ' ');
                    ?>
                    <p> <span class="resumen"><?php echo $resumen; ?></span></p>
                    <div class="collapse" id="contenidoCompleto_<?php echo get_the_ID(); ?>">
                      <div class="card card-body ">
                        <?php echo $contenido_completo; ?>
                      </div>
                    </div>
                    <p class="d-flex gap-1">
                      <a class="ver_mas text-info-emphasis" data-bs-toggle="collapse" href="#contenidoCompleto_<?php echo get_the_ID(); ?>" role="button" aria-expanded="false">
                        Ver más
                      </a>
                      <a class="ver_menos text-info-emphasis collapse" data-bs-toggle="collapse" href="#contenidoCompleto_<?php echo get_the_ID(); ?>" role="button" aria-expanded="false">
                        Ver menos
                      </a>
                    </p>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('template', 'parts/banner'); ?>

    <section class="productos_ my-4  gallary">
      <div class="container">
        <h3 class="text-center">Productos</h3>
        <div class="row justify-content-center row-cols-1 row-cols-lg-3 row-cols-md-2 g-1 g-lg-3">
          <?php eds_query_productos(3); ?>
        </div>
        <div class="row justify-content-center text-center mt-3">
          <div class="col-sm-4">
            <a href="<?php echo get_page_link(get_page_object('productos')->ID); ?>" class="p-2 my-5 border border-warning-subtle rounded-3 ">Ver todos los productos</a>
          </div>
        </div>
      </div>
    </section>


  <?php endwhile; ?>


</main>
<?php get_footer(); ?>