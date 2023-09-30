<?php get_header(); ?>
<?php while (have_posts()) : the_post();
  //get_template_part('template-parts/content', 'post');
?>

  <section id="about" class="light text-center my-5">
    <div class="title container">
      <h2><?php echo get_post_meta(get_the_ID(), 'eds_prod_nombre_prod', true); ?></h2>
      <p></p>
    </div>


    <div class="container position-relative">
      <div class="row table-row">
        <div class="col-sm-6 hidden-xs">
          <div class="section-content">
            <div class="big-image">
              <?php the_post_thumbnail('cuadrada', array('class' => 'img-fluid rounded-circle')); ?>
            </div>


          </div>
        </div>

        <div class="col-sm-6">
          <div class="section-content">
            <div class="about-content left animated" data-animate="fadeInLeft">
              <div class="about-icon">icon</div>
              <div class="about-detail">
                <h4><?php echo get_post_meta(get_the_ID(), 'eds_prod_ingredientes_prod_title', true); ?></h4>
                <ul>
                  <?php
                  $ingredientes = get_post_meta(get_the_ID(), 'eds_prod_ingredientes_prod', true);
                  foreach ($ingredientes as $ing) : ?>
                    <li><?php echo $ing ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>

            <div class="about-content left animated" data-animate="fadeInLeft">
              <div class="about-icon">icon</div>
              <div class="about-detail">
                <h4><?php echo get_post_meta(get_the_ID(), 'eds_prod_nombre_prod', true); ?></h4>
                <p><?php echo get_post_meta(get_the_ID(), 'eds_prod_peso_prod', true); ?></p>
                <?php
                $precio = get_post_meta(get_the_ID(), 'eds_prod_precio_prod', true);

                // Limpieza y transformación del precio
                $precio_cleaned = str_replace('.', '', $precio); // Elimina puntos
                $precio_cleaned = str_replace(',', '.', $precio_cleaned); // Cambia comas por puntos

                // Convierte a float
                 $precio_final = floatval($precio_cleaned);
                 $precio_formateado = "$" . number_format($precio_final, 0, ',', '.');

                ?>

                <p>Precio: <?php echo $precio_formateado; ?></p>

              </div>
            </div>

            <div class="about-content left animated" data-animate="fadeInLeft">
              <div class="about-icon">icon</div>
              <div class="about-detail">
                <h4>Descripción</h4>
                <p><?php echo get_post_meta(get_the_ID(), 'eds_prod_desc_prod', true); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /.row table-row -->
    </div> <!-- /.container -->
  </section>
<?php endwhile; ?>
<?php get_footer(); ?>