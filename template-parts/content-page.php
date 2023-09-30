<main>
    <?php $html =  eds_imagen_destacada( get_the_ID());
     echo $html[0];

     ?>
    <div class="container item-text-page">
      <div class="row justify-content-center">
        <div class="py-3 py-5 content-page <?php echo $html[1] ? 'col-md-8 destacada' : 'col-md-12 no-destacada'; ?>">
          <h3 class="text-center"><?php the_title(); ?></h3>
           <span class="hr-line mt-0 mb-3"><img src="<?php echo get_template_directory_uri(); ?>/img/separador_green.png" class="img-fluid"></span>
         <?php the_content(); ?>
        </div>
      </div>
    </div>
</main>