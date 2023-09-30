<?php get_header(); ?>
   <?php while (have_posts()) : the_post();
      get_template_part('template-parts/content', 'post'); ?>
       <div class="container comments">
        <?php
            if(comments_open() || get_comments_number()) :
              comments_template();
            else:
              echo "<p class'text-center no-comments alert-danger'>No están permitidos los comentarios en este momento</p>";
            endif;
        ?>
       </div>
    <?php endwhile; ?>
<?php get_footer(); ?>