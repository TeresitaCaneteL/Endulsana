<?php

function eds_query_productos($cantidad = -1)
{
  $args = array(
    'post_type'      => 'productos',
    'posts_per_page' => $cantidad
  );
  $productos = new WP_Query($args);

  while ($productos->have_posts()) : $productos->the_post();


    $modal_id = 'imagen_prod' . get_the_ID();

?>
    <?php
    $nombre_producto  = get_post_meta(get_the_ID(), 'eds_prod_nombre_prod', true);
    $desc_producto    = get_post_meta(get_the_ID(), 'eds_prod_desc_prod', true);
    $precio_producto  = get_post_meta(get_the_ID(), 'eds_prod_precio_prod', true);
    $peso_producto    = get_post_meta(get_the_ID(), 'eds_prod_peso_prod', true);
    // Limpieza y transformación del precio
    $precio_cleaned = str_replace('.', '', $precio_producto);
    $precio_cleaned = str_replace(',', '.', $precio_cleaned);
    $precio_final = (float) $precio_cleaned;


    ?>
    <!-- <div class="col item_prod">

      <div class="grid">
        <figure class="effect-goliath">
          <?php the_post_thumbnail('mediano', array('class' => 'img-fluid')) ?>
          <figcaption class="text-center">
            <?php
            $nombre_producto  = get_post_meta(get_the_ID(), 'eds_prod_nombre_prod', true);
            $desc_producto    = get_post_meta(get_the_ID(), 'eds_prod_desc_prod', true);
            $precio_producto  = get_post_meta(get_the_ID(), 'eds_prod_precio_prod', true);
            $peso_producto    = get_post_meta(get_the_ID(), 'eds_prod_peso_prod', true);
            // Limpieza y transformación del precio
            $precio_cleaned = str_replace('.', '', $precio_producto);
            $precio_cleaned = str_replace(',', '.', $precio_cleaned);
            $precio_final = (float) $precio_cleaned;


            ?>
            <h2 class="fw-bold text-danger-emphasis"><?php echo esc_html($nombre_producto); ?> <span><?php echo esc_html($peso_producto); ?></span></h2>

            <p class="fw-bold text-danger-emphasis"><span class="fw-bold fs-4">Precio: <?php echo "$" . number_format($precio_final, 0, ',', '.'); ?></span><br> <?php echo wp_trim_words($desc_producto, 20); ?></p>


            <a href="#" data-bs-toggle="modal" data-bs-target="#<?php echo esc_attr($modal_id); ?>">View more</a>
          </figcaption>
        </figure>

        <div class="modal fade" id="<?php echo esc_attr($modal_id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body">
                <?php the_post_thumbnail('large', array('class' => 'img-fluid')) ?>
              </div>
            </div>
          </div>
        </div>
        <a href="<?php the_permalink() ?>" class="btn btn-bd-primary">Detalles</a>
      </div>

    </div>-->



    <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn text-center">
      <?php the_post_thumbnail('cuadrada', array('class' => 'img-fluid gallary-img')) ?>
      <a href="#" class="gallary-overlay" data-bs-toggle="modal" data-bs-target="#<?php echo esc_attr($modal_id); ?>">
        <i class="fa-solid fa-magnifying-glass fa-beat gallary-icon"></i>
      </a>

      <a href="<?php the_permalink() ?>" class="z-3 position-relative">Detalles</a>
      <div class="modal fade" id="<?php echo esc_attr($modal_id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <?php the_post_thumbnail('large', array('class' => 'img-fluid')) ?>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php
  endwhile;
  wp_reset_postdata();
}
