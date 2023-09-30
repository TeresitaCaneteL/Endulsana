<section class="nosotros my-5 container">

  <?php $titulo = get_post_meta(get_the_ID(), 'eds_group_titulo_seccion', false) ?>
  <h3 class="text-center"><?php echo $titulo[0]; ?></h3>
  <span class="hr-line mt-0 mb-3"><img src="<?php echo get_template_directory_uri(); ?>/img/separador_green.png" class="img-fluid"></span>
  <div class="container text-center">
    <div class="row">
      <?php
      $mienbros = get_post_meta(get_the_ID(), 'eds_group_nosotros', true);
      foreach ($mienbros as $miembro) {
      ?>
        <div class="col-md-4">
          <img src="<?php echo $miembro['image_team'] ?>" class="img-fluid mb-3" alt="">
          <h4><?php echo $miembro['name'] ?></h4>
          <p><?php echo $miembro['description'] ?></p>
        </div>
      <?php } ?>

    </div>
  </div>
</section>