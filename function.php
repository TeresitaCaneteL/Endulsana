<?php

/**
 * cargar script y css
 */

function eds_scripts(){

      wp_enqueue_style( 'bootstrap', get_template_directory_uri() . 'css/bootstrap.css', array(), '5.3' );
      wp_enqueue_style('style', get_stylesheet_uri(), array());
      wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js',array(), '5.3', true );

      wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js', array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'eds_scripts');