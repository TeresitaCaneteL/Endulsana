 <div class="meta py-3 pt-md-0">
   <p class="m-0">
     Escrito el: <span><?php the_time(get_option('date_format')); ?></span>
     por <a href="<?php echo get_the_author_posts(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>"><?php the_author(); ?></a>

   </p>
 </div>