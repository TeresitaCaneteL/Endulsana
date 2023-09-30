<?php

/**
 * metaboxes para el homepage
 */

add_action( 'cmb2_admin_init', 'eds_campos_homepage' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function eds_campos_homepage() {

  $prefix = 'eds_homepage_';
  $id_home = get_option('page_on_front');
	/**
	 * Metabox to be displayed on a single page ID*/

	$eds_campos_homepage = new_cmb2_box( array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__( 'About Page Metabox', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );

	$eds_campos_homepage->add_field( array(
		'name' => esc_html__( 'Titulo Sección info home', 'cmb2' ),
		'desc' => esc_html__( 'Texto inicial', 'cmb2' ),
		'id'   =>  $prefix . 'Titulo_seccion_info',
		'type' => 'text',
	) );
 	$eds_campos_homepage->add_field( array(
		'name' => esc_html__( 'Subtitulo', 'cmb2' ),
		'desc' => esc_html__( 'Texto bajada (opcional)', 'cmb2' ),
		'id'   =>  $prefix . 'subtitulo_seccion_info',
		'type' => 'text',
	) );

  /** campos interior materias primas o info */
	$eds_campos_homepage->add_field( array(
		'name' => esc_html__( 'Titulo interior Sección info home', 'cmb2' ),
		'desc' => esc_html__( 'Texto inicial', 'cmb2' ),
		'id'   =>  $prefix . 'Titulo_seccion_info_interior',
		'type' => 'text',
	) );

  	$eds_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Descripción ', 'cmb2' ),
		'desc'    => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'      =>  $prefix . 'Texto_descripcion',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );
  	$eds_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen home información', 'cmb2' ),
		'desc' => esc_html__( 'subir imagen.', 'cmb2' ),
		'id'   => $prefix . 'imagen_informacion',
		'type' => 'file',
	) );
}
/**
 * Teasm
 */
add_action('cmb2_admin_init', 'eds_campos_team');
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function eds_campos_team(){
   $prefix = 'eds_group_';
  /**
   * Repeatable Field Groups team
   */
  $eds_team = new_cmb2_box(array(
    'id'           =>  $prefix . 'metabox',
    'title'        => esc_html__('Miembros del team', 'cmb2'),
    'object_types' => array('page'),
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => 'true',
    'show_on'      => array(
          'key'    => 'page-template',
          'value' => 'page-team.php'
    )
  ));
  $eds_team->add_field(array(
    'name' => esc_html__('Titulo Sección', 'cmb2'),
    'desc' => esc_html__('Descripción seccion (optional)', 'cmb2'),
    'id'   => $prefix . 'titulo_seccion',
    'type' => 'text',
  ));

  // $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
  $group_field_id = $eds_team->add_field(array(
    'id'          => $prefix . 'nosotros',
    'type'        => 'group',
    'description' => esc_html__('Agregar miembros', 'cmb2'),
    'options'     => array(
      'group_title'    => esc_html__('Persona {#}', 'cmb2'), // {#} gets replaced by row number
      'add_button'     => esc_html__('Agregar otra entrada', 'cmb2'),
      'remove_button'  => esc_html__('Eliminar entrada', 'cmb2'),
      'sortable'       => true,
      // 'closed'      => true, // true to have the groups closed by default
      // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
    ),
  ));


  $eds_team->add_group_field($group_field_id, array(
    'name'       => esc_html__('Nombre', 'cmb2'),
    'id'         => 'name',
    'type'       => 'text',
    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ));

  $eds_team->add_group_field($group_field_id, array(
    'name'        => esc_html__('Testimonio', 'cmb2'),
    'description' => esc_html__('Agregue un testimonio', 'cmb2'),
    'id'          => 'description',
    'type'        => 'textarea_small',
  ));

  $eds_team->add_group_field($group_field_id, array(
    'name' => esc_html__('subir imagen', 'cmb2'),
    'id'   => 'image_team',
    'type' => 'file',
  ));

}



/**hook slider */

add_action('cmb2_admin_init', 'eds_campos_slider');
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function eds_campos_slider()
{
  $prefix = 'eds_slider_';
  $id_home = get_option('page_on_front');
  /**
   * Repeatable Field Groups slider
   */
  $eds_slider = new_cmb2_box(array(
    'id'           =>  $prefix . 'metabox',
    'title'        => esc_html__('Item slider', 'cmb2'),
    'object_types' => array('page'),
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => 'true',
    'show_on'      => array(
      'id' => array($id_home),
    )
  ));

  // $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
  $group_field_id = $eds_slider->add_field(array(
    'id'          => $prefix . 'slider',
    'type'        => 'group',
    'description' => esc_html__('Agregar Item', 'cmb2'),
    'options'     => array(
      'group_title'    => esc_html__('Items {#}', 'cmb2'), // {#} gets replaced by row number
      'add_button'     => esc_html__('Agregar otra entrada', 'cmb2'),
      'remove_button'  => esc_html__('Eliminar entrada', 'cmb2'),
      'sortable'       => true,
      // 'closed'      => true, // true to have the groups closed by default
      // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
    ),
  ));


  $eds_slider->add_group_field($group_field_id, array(
    'name'       => esc_html__('Titulo', 'cmb2'),
    'id'         => 'titulo_item',
    'type'       => 'text',
    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ));

  $eds_slider->add_group_field($group_field_id, array(
    'name'        => esc_html__('Subtitulo', 'cmb2'),
    'description' => esc_html__('Agregue subtitulo', 'cmb2'),
    'id'          => 'description',
    'type'        => 'text',
  ));
  $eds_slider->add_group_field($group_field_id, array(
    'name'        => esc_html__('Slogan', 'cmb2'),
    'description' => esc_html__('Agregue Slogan(opcional)', 'cmb2'),
    'id'          => 'slogan',
    'type'        => 'text',
  ));

  $eds_slider->add_group_field($group_field_id, array(
    'name' => esc_html__('subir imagen', 'cmb2'),
    'id'   => 'image_slider',
    'type' => 'file',
  ));
}


/**
 * productos hook
 */


add_action('cmb2_admin_init', 'eds_campos_productos');
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function eds_campos_productos()
{
  $prefix = 'eds_producto_';
  //$id_home = get_option('page_on_front');
  /**
   * Repeatable Field Groups slider
   */
  $eds_products = new_cmb2_box(array(
    'id'           =>  $prefix . 'metabox',
    'title'        => esc_html__('Item productos', 'cmb2'),
    'object_types' => array('page'),
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => 'true',
    'show_on'      => array(
          'key'    => 'page-template',
          'value' => 'page-productos.php'
    )
  ));
  $eds_products->add_field(array(
    'name' => esc_html__('Titulo Sección Productos', 'cmb2'),
    'desc' => esc_html__('Descripción seccion (optional)', 'cmb2'),
    'id'   => $prefix . 'titulo_seccion_productos',
    'type' => 'text',
  ));
  $eds_products->add_field(array(
    'name' => esc_html__('Subtítulo Sección Productos', 'cmb2'),
    'desc' => esc_html__('Descripción seccion (optional)', 'cmb2'),
    'id'   => $prefix . 'subtitulo_seccion_productos',
    'type' => 'text',
  ));
  // $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
  $group_field_id = $eds_products->add_field(array(
    'id'          => $prefix . 'productos',
    'type'        => 'group',
    'description' => esc_html__('Agregar Item', 'cmb2'),
    'options'     => array(
      'group_title'    => esc_html__('Items {#}', 'cmb2'), // {#} gets replaced by row number
      'add_button'     => esc_html__('Agregar otra entrada', 'cmb2'),
      'remove_button'  => esc_html__('Eliminar entrada', 'cmb2'),
      'sortable'       => true,
      // 'closed'      => true, // true to have the groups closed by default
      // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
    ),
  ));


  $eds_products->add_group_field($group_field_id, array(
    'name'       => esc_html__('Titulo', 'cmb2'),
    'id'         => 'titulo_item',
    'type'       => 'text',
    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ));

  $eds_products->add_group_field($group_field_id, array(
    'name'        => esc_html__('Subtitulo', 'cmb2'),
    'description' => esc_html__('Agregue subtitulo', 'cmb2'),
    'id'          => 'description',
    'type'        => 'text',
  ));

  $eds_products->add_group_field($group_field_id, array(
    'name' => esc_html__('subir imagen', 'cmb2'),
    'id'   => 'image_Producto',
    'type' => 'file',
  ));
}


/**
 * metaboxes para el blog
 */

add_action('cmb2_admin_init', 'eds_campos_blog');
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function eds_campos_blog()
{

  $prefix = 'eds_blog_';
  $id_blog = get_option('page_for_posts');
  /**
   * Metabox to be displayed on a single page ID*/

  $eds_campos_blog = new_cmb2_box(array(
    'id'           => $prefix . 'blog',
    'title'        => esc_html__('Campos blog', 'cmb2'),
    'object_types' => array('page'), // Post type
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => true, // Show field names on the left
    'show_on'      => array(
      'id' => array($id_blog),
    ), // Specific post IDs to display this metabox
  ));

  $eds_campos_blog->add_field(array(
    'name' => esc_html__('Slogan blog', 'cmb2'),
    'desc' => esc_html__('Texto inicial', 'cmb2'),
    'id'   =>  $prefix . 'Slogan_blog',
    'type' => 'text',
  ));
  $eds_campos_blog->add_field(array(
    'name' => esc_html__('Titulo blog', 'cmb2'),
    'desc' => esc_html__('Titulo blog', 'cmb2'),
    'id'   =>  $prefix . 'titulo_Blog',
    'type' => 'text',
  ));



}

//productos
add_action('cmb2_admin_init', 'eds_campos_prod');
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function eds_campos_prod()
{
  $prefix = 'eds_prod_';

  /**
   * Repeatable Field Groups slider
   */
  $eds_prod= new_cmb2_box(array(
    'id'           =>  $prefix . 'metabox',
    'title'        => esc_html__('Información de Productos', 'cmb2'),
    'object_types' => array('productos'),
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => 'true',

  ));
  $eds_prod->add_field(array(
    'name' => esc_html__('Nombre Producto', 'cmb2'),
    'desc' => esc_html__('Añada un nombre para producto', 'cmb2'),
    'id'   =>  $prefix . 'nombre_prod',
    'type' => 'text',
  ));
  $eds_prod->add_field(array(
    'name' => esc_html__('Peso Producto', 'cmb2'),
    'desc' => esc_html__('Añada un Peso para producto', 'cmb2'),
    'id'   =>  $prefix . 'peso_prod',
    'type' => 'text',
  ));
  $eds_prod->add_field(array(
    'name' => esc_html__('Precio Producto', 'cmb2'),
    'desc' => esc_html__('Añada el precio del producto', 'cmb2'),
    'id'   =>  $prefix . 'precio_prod',
    'type' => 'text_money',
    'before_field' => '$',
    'column'  => true,
  ));
  $eds_prod->add_field(array(
    'name' => esc_html__('Descripción breve', 'cmb2'),
    'desc' => esc_html__('Añada una breve descripción del producto', 'cmb2'),
    'id'   =>  $prefix . 'desc_prod',
    'type' => 'textarea_small',
  ));
  $eds_prod->add_field(array(
    'name' => esc_html__('Subtitulo para ingredientes', 'cmb2'),
    'desc' => esc_html__('Añada un subtitulo para ingredientes', 'cmb2'),
    'id'   =>  $prefix . 'ingredientes_prod_title',
    'type' => 'text',
  ));
  $eds_prod->add_field(array(
    'name' => esc_html__('Ingredientes', 'cmb2'),
    'desc' => esc_html__('Añada un ingrediente', 'cmb2'),
    'id'   =>  $prefix . 'ingredientes_prod',
    'type' => 'text',
    'repeatable' => true,
  ));


}

/**
 * banners
 */

add_action('cmb2_admin_init', 'eds_campos_banner');
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function eds_campos_banner()
{
  $prefix = 'eds_banner_';
  /**
   * Metabox to be displayed on a single page ID
   */
  $eds_banner = new_cmb2_box(array(
    'id'           => $prefix . 'reu',
    'title'        => esc_html__('Banner Metabox', 'cmb2'),
    'object_types' => array('page'),
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => true
  ));
  // Specific post IDs to display this metabox


  $eds_banner->add_field(array(
    'name' => esc_html__('titulo', 'cmb2'),
    'desc' => esc_html__('descripción (optional)', 'cmb2'),
    'id'   =>  $prefix . 'titulo_banner',
    'type' => 'text',
  ));
  $eds_banner->add_field(array(
    'name' => esc_html__('parrafo', 'cmb2'),
    'desc' => esc_html__('descripción (optional)', 'cmb2'),
    'id'   =>  $prefix . 'parrafo_banner',
    'type' => 'text',
  ));
  $eds_banner->add_field(array(
    'name'    => esc_html__('Agregar imagen', 'cmb2'),
    'desc'    => esc_html__('Imagen banner(optional)', 'cmb2'),
    'id'      => $prefix . 'imagen_banner',
    'type'    =>  'file',
  ));
}