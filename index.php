<?php get_header(); ?>
<main>
  <div class="container mb-4">
    <div class="row justify-content-center">
      <blockquote class="subtitulo text-center">
        <?php
        $id_blog = get_option('page_for_posts');
        echo get_post_meta($id_blog, 'eds_blog_Slogan_blog', true)
        ?>
      </blockquote>
    </div>
  </div>
  <div class="container">
    <div class="row ">
      <div class="col-lg-9 col-md-8 main-blog">
        <h1 class="text-center  ">
          <?php

          echo get_post_meta($id_blog, 'eds_blog_titulo_Blog', true)
          ?>
        </h1>
        <span class="hr-line mb-5"><img src="<?php echo get_template_directory_uri(); ?>/img/separador_green.png" class="img-fluid"></span>
        <?php while (have_posts()) : the_post(); ?>
          <div class="row mb-4 entry">
            <div class="col-md-4">
              <?php the_post_thumbnail('madiano', array('class' => 'img-fluid')); ?>
            </div>
            <div class="col-md-8">
              <div class="item-blog pt-4 pt-md-0">
                <!--contenido-->
                <a href="#">
                  <h3><?php the_title(); ?></h3>
                </a>
                <?php get_template_part('template-parts/meta', 'post'); ?>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink() ?>" class="btn btn-bd-primary">Ver entrada</a>
              </div>
            </div>
          </div>

        <?php endwhile; ?>

        <ul class="pagination justify-content-between">
          <li class="page-item">
            <?php
            previous_posts_link('
                  <span class="page-link" aria-hidden="true">&laquo; Anterior</span>
                  <span class="sr-only">Anterior</span>
                ')
            ?>
          </li>

          <li class="page-item">
            <?php
            next_posts_link('
                  <span class="page-link" aria-hidden="true">Siguiente &raquo;</span>
                  <span class="sr-only">Siguiente</span>
                ')
            ?>
          </li>

        </ul>


      </div>
      <?php get_sidebar(); ?>
    </div>

  </div>

</main>
<?php get_footer(); ?>