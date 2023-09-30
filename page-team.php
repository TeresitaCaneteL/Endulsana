<?php

/**
 * Template Name: Página Team
 */

get_header(); ?>
<?php while (have_posts()) : the_post();
  get_template_part('template-parts/content', 'page');
  get_template_part('template', 'parts/team');

 endwhile; ?>
<?php get_footer(); ?>