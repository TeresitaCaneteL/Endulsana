<?php

/**Agregar CMB2 */
require_once dirname(__FILE__) . '/CMB2-develop/init.php';
require_once dirname(__FILE__) . '/cmb2.php';
require_once dirname(__FILE__) . '/inc/posttype.php';
/**
 * queries reutilizables
 */
require_once dirname(__FILE__) . '/inc/queries.php';
/**Carga Custom fiels */
require_once dirname(__FILE__) . '/inc/custom-fields.php';
/**Carga widgets*/
require_once dirname(__FILE__) . '/inc/widgets.php';



add_action('init', 'eds_imagen_destacada');
function eds_imagen_destacada($id) {
  $imagen = get_the_post_thumbnail_url($id, 'full');

  $html = '';
  $clase = false;
  if($imagen){
    $clase = true;
    $html .= '<div class="container">';
    $html .=        '<div class="row imagen-destacada page-bg"></div>';
    $html .= '</div>';

    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $imagen_destacada_css = "
    .page-bg{
      background-image: url({$imagen});
      width: 100%;
      height: 400px;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
    ";
    wp_add_inline_style('custom', $imagen_destacada_css);
  }
  return array($html, $clase);
}


function eds_setup() {
  load_theme_textdomain('endulsana', get_template_directory() . '/languages');

   //imagen size
   add_image_size('mediano', 510, 340, true);
  add_image_size('cuadrada', 600, 600, true);

  /***
   * imagen destacada
   */
   add_theme_support('post-thumbnails');

    // Registra los menús
   register_nav_menus(array(
        'menu_principal' => esc_html__('Menu Principal', 'endulsana'),
        'menu_mobile' => esc_html__('Menú Móvil', 'endulsana'), // Menú de dispositivos móviles
    ));
}
add_action('after_setup_theme', 'eds_setup');

function ads_enlace_class($atts, $item, $args) {
    if ($args->theme_location == 'menu_principal' || $args->theme_location == 'menu_mobile') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'ads_enlace_class', 10, 3);

/**
 * cargar script y css
 */
/**
 *  jQuery
 */
function enqueue_jquery()
{
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'enqueue_jquery');

function eds_scripts()
{
  // Styles
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.3');
  wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap'));
  wp_enqueue_style('owl-carousel-min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '5.3');
  wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '5.3');
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/font-awesome/css/all.min.css', array(), '5.3');
  wp_enqueue_style('font-awesome2', get_template_directory_uri() . '/font-awesome/css/fontawesome.min.css', array(), '5.3');

  // Scripts

  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '5.3', true);
  wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js', array('jquery'), '2.9.3', true);
  wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '5.3', true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '5.3', true);
  wp_enqueue_script('sticky-js', get_template_directory_uri() . '/js/sticky-menu.js', array('jquery'), '5.3', true);
  wp_enqueue_script('slider-js', get_template_directory_uri() . '/js/slider.js', array('jquery'), '5.3', true);

  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . 'font-awesome/js/all.min.cs', array(), '', true);
  $slider_arrow_left = '<img src="' . esc_url(get_template_directory_uri() . '/img/arrow-left.gif') . '">';
  $slider_arrow_right = '<img src="' . esc_url(get_template_directory_uri() . '/img/arrow-right.gif') . '">';

  // Pasando data al script
  $data = array(
    'arrowLeft' => $slider_arrow_left,
    'arrowRight' => $slider_arrow_right,
  );
  wp_localize_script('slider-js', 'sliderData', $data);

}

add_action('wp_enqueue_scripts', 'eds_scripts');

function get_page_object($title)
{
  $query = new WP_Query(
    array(
      'post_type'              => 'page',
      'name'                  =>  $title,
      'post_status'            => 'all',
      'posts_per_page'         => 1,
      'no_found_rows'          => true,
      'ignore_sticky_posts'    => true,
      'update_post_term_cache' => false,
      'update_post_meta_cache' => false,
      'orderby'                => 'post_date ID',
      'order'                  => 'ASC',
    )
  );

  if (!empty($query->post)) {
    $page = $query->post;
  } else {
    $page  = null;
  }
  return $page;
}

add_filter('display_post_states', 'eds_cambiar_estado', 10, 2);

function eds_cambiar_estado($states, $post)
{
  if ('page' === get_post_type($post->ID) && get_permalink($post->ID) === 'http://tclientes.website/EndulsanaDev/productos/') {
    $link = '<a href="post-new.php?post_type=productos">' . esc_html__('Agregar Producto', 'endulsana') . '</a>';
    $states[] = sprintf(esc_html__('Página de productos %s', 'endulsana'), $link);
  }
  return $states;
}
/**Soporte widgets */
add_action('widgets_init', 'eds_widgets_sidebar');

function eds_widgets_sidebar(){
  register_sidebar(array(
    'name'          => 'Widget Lateral',
    'id'            => 'sidebar_widget',
    'before_widget' => '<div class="comming-entry pt-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="text-center m-0">',
    'after_title'   => '</h3>'
  ));
}




define('WPLANG', 'es_ES');
