<?php

function eds_posttype_productos()
{
  $labels = array(
    'name'                  => _x('Productos', 'eds'),
    'singular_name'         => _x('Producto',  'eds'),
    'menu_name'             => _x('Productos', 'Admin Menu text', 'eds'),
    'name_admin_bar'        => _x('Producto', 'Add New on Toolbar', 'eds'),
    'add_new'               => __('Agregar Nuevo', 'eds'),
    'add_new_item'          => __('Agregar Nuevo Producto', 'eds'),
    'new_item'              => __('Nuevo Producto', 'eds'),
    'edit_item'             => __('Editar Producto', 'eds'),
    'view_item'             => __('Ver Producto', 'eds'),
    'all_items'             => __('Todos los Productos', 'eds'),
    'search_items'          => __('Buscar Productos', 'eds'),
    'parent_item_colon'     => __('Padre Productos:', 'eds'),
    'not_found'             => __('No se encontraron Productos.', 'eds'),
    'not_found_in_trash'    => __('No se encontrar Productos en la Papelera', 'eds'),
    'featured_image'        => _x('Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'eds'),
    'set_featured_image'    => _x('Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'eds'),
    'remove_featured_image' => _x('Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'eds'),
    'use_featured_image'    => _x('Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'eds'),
    'archives'              => _x('Archivo de Productos', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'eds'),
    'insert_into_item'      => _x('Insertar en Productos', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'eds'),
    'uploaded_to_this_item' => _x('Cargadas En Productos', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'eds'),
    'filter_items_list'     => _x('Filtrar Lista de Productos', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'eds'),
    'items_list_navigation' => _x('Productos navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'eds'),
    'items_list'            => _x('Productos lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'eds'),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'productos-1'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'menu_icon'          => 'dashicons-products',
    // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
    'hierarchical'       => false,
    'menu_position'      => 6,
    'supports'           => array('title', 'editor',  'thumbnail'),
    'show_in_rest'       => true,
    'rest_base'          => 'productos'
  );

  register_post_type('productos', $args);
}

add_action('init', 'eds_posttype_productos');
