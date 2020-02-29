<?php
add_action( 'init', 'brunca_zona_init' );
/**
 * Register Zona post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function brunca_zona_init() {
	$labels = array(
		'name'               => _x( 'Zona', 'post type general name', 'zonabrunca-cpt-cf' ),
		'singular_name'      => _x( 'Zona', 'post type singular name', 'zonabrunca-cpt-cf' ),
		'menu_name'          => _x( 'Zonas', 'menu admin', 'zonabrunca-cpt-cf' ),
		'name_admin_bar'     => _x( 'Zona', 'adicionar nuevo en la barra de admin', 'zonabrunca-cpt-cf' ),
		'add_new'            => _x( 'Adicionar', 'zona', 'zonabrunca-cpt-cf' ),
		'add_new_item'       => __( 'Adicionar nueva', 'zonabrunca-cpt-cf' ),
		'new_item'           => __( 'Nueva zona', 'zonabrunca-cpt-cf' ),
		'edit_item'          => __( 'Editar zona', 'zonabrunca-cpt-cf' ),
		'view_item'          => __( 'Ver zona', 'zonabrunca-cpt-cf' ),
		'all_items'          => __( 'Todas las zonas', 'zonabrunca-cpt-cf' ),
		'search_items'       => __( 'Buscar zonas', 'zonabrunca-cpt-cf' ),
		'parent_item_colon'  => __( 'Zona padre:', 'zonabrunca-cpt-cf' ),
		'not_found'          => __( 'No se encontraron zonas.', 'zonabrunca-cpt-cf' ),
		'not_found_in_trash' => __( 'No se encontraron zonas en la papelera.', 'zonabrunca-cpt-cf' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Descripción.', 'zonabrunca-cpt-cf' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'zona' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
    'taxonomies'         => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'zona', $args );
}



add_action( 'init', 'brunca_negocio_init' );
/**
 * Register Negocio post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function brunca_negocio_init() {
	$labels = array(
		'name'               => _x( 'Negocio', 'post type general name', 'zonabrunca-cpt-cf' ),
		'singular_name'      => _x( 'Negocio', 'post type singular name', 'zonabrunca-cpt-cf' ),
		'menu_name'          => _x( 'Negocios', 'menu admin', 'zonabrunca-cpt-cf' ),
		'name_admin_bar'     => _x( 'Negocio', 'adicionar nuevo en la barra de admin', 'zonabrunca-cpt-cf' ),
		'add_new'            => _x( 'Adicionar', 'negocio', 'zonabrunca-cpt-cf' ),
		'add_new_item'       => __( 'Adicionar nuevo', 'zonabrunca-cpt-cf' ),
		'new_item'           => __( 'Nuevo negocio', 'zonabrunca-cpt-cf' ),
		'edit_item'          => __( 'Editar negocio', 'zonabrunca-cpt-cf' ),
		'view_item'          => __( 'Ver negocio', 'zonabrunca-cpt-cf' ),
		'all_items'          => __( 'Todos los negocios', 'zonabrunca-cpt-cf' ),
		'search_items'       => __( 'Buscar negocios', 'zonabrunca-cpt-cf' ),
		'parent_item_colon'  => __( 'Negocio padre:', 'zonabrunca-cpt-cf' ),
		'not_found'          => __( 'No se encontraron negocios.', 'zonabrunca-cpt-cf' ),
		'not_found_in_trash' => __( 'No se encontraron negocios en la papelera.', 'zonabrunca-cpt-cf' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Descripción.', 'zonabrunca-cpt-cf' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'negocio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
    'taxonomies'         => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'negocio', $args );
}



add_action( 'init', 'brunca_cosas_que_hacer_init' );
/**
 * Register Cosas que Hacer post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function brunca_cosas_que_hacer_init() {
	$labels = array(
		'name'               => _x( 'Cosas que hacer', 'post type general name', 'zonabrunca-cpt-cf' ),
		'singular_name'      => _x( 'Cosas que hacer', 'post type singular name', 'zonabrunca-cpt-cf' ),
		'menu_name'          => _x( 'Cosas que hacer', 'menu admin', 'zonabrunca-cpt-cf' ),
		'name_admin_bar'     => _x( 'Cosas que hacer', 'adicionar nuevo en la barra de admin', 'zonabrunca-cpt-cf' ),
		'add_new'            => _x( 'Adicionar', '', 'zonabrunca-cpt-cf' ),
		'add_new_item'       => __( 'Adicionar nuevo', 'zonabrunca-cpt-cf' ),
		'new_item'           => __( 'Nuevo item', 'zonabrunca-cpt-cf' ),
		'edit_item'          => __( 'Editar item', 'zonabrunca-cpt-cf' ),
		'view_item'          => __( 'Ver item', 'zonabrunca-cpt-cf' ),
		'all_items'          => __( 'Todos los items', 'zonabrunca-cpt-cf' ),
		'search_items'       => __( 'Buscar items', 'zonabrunca-cpt-cf' ),
		'parent_item_colon'  => __( 'Item padre:', 'zonabrunca-cpt-cf' ),
		'not_found'          => __( 'No se encontraron Cosas que hacer.', 'zonabrunca-cpt-cf' ),
		'not_found_in_trash' => __( 'No se encontraron cosas que hacer en la papelera.', 'zonabrunca-cpt-cf' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Descripción.', 'zonabrunca-cpt-cf' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'cosas-que-hacer' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
    'taxonomies'         => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'cosas-que-hacer', $args );
}



add_action( 'init', 'brunca_donde_comer_init' );
/**
 * Register Donde Comer post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function brunca_donde_comer_init() {
	$labels = array(
		'name'               => _x( 'Donde comer', 'post type general name', 'zonabrunca-cpt-cf' ),
		'singular_name'      => _x( 'Donde comer', 'post type singular name', 'zonabrunca-cpt-cf' ),
		'menu_name'          => _x( 'Donde comer', 'menu admin', 'zonabrunca-cpt-cf' ),
		'name_admin_bar'     => _x( 'Donde comer', 'adicionar nuevo en la barra de admin', 'zonabrunca-cpt-cf' ),
		'add_new'            => _x( 'Adicionar', 'iten', 'zonabrunca-cpt-cf' ),
		'add_new_item'       => __( 'Adicionar nuevo', 'zonabrunca-cpt-cf' ),
		'new_item'           => __( 'Nuevo item', 'zonabrunca-cpt-cf' ),
		'edit_item'          => __( 'Editar item', 'zonabrunca-cpt-cf' ),
		'view_item'          => __( 'Ver item', 'zonabrunca-cpt-cf' ),
		'all_items'          => __( 'Todos los items', 'zonabrunca-cpt-cf' ),
		'search_items'       => __( 'Buscar item', 'zonabrunca-cpt-cf' ),
		'parent_item_colon'  => __( 'Item padre:', 'zonabrunca-cpt-cf' ),
		'not_found'          => __( 'No se encontraron Donde Comer.', 'zonabrunca-cpt-cf' ),
		'not_found_in_trash' => __( 'No se encontraron Donde comer en la papelera.', 'zonabrunca-cpt-cf' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Descripción.', 'zonabrunca-cpt-cf' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'donde-comer' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
    'taxonomies'         => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'donde-comer', $args );
}



add_action( 'init', 'brunca_donde_alojarse_init' );
/**
 * Register Donde Alojarse post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function brunca_donde_alojarse_init() {
	$labels = array(
		'name'               => _x( 'Donde Alojarse', 'post type general name', 'zonabrunca-cpt-cf' ),
		'singular_name'      => _x( 'Donde Alojarse', 'post type singular name', 'zonabrunca-cpt-cf' ),
		'menu_name'          => _x( 'Donde Alojarse', 'menu admin', 'zonabrunca-cpt-cf' ),
		'name_admin_bar'     => _x( 'Donde Alojarse', 'adicionar nuevo en la barra de admin', 'zonabrunca-cpt-cf' ),
		'add_new'            => _x( 'Adicionar', 'donde alojarse', 'zonabrunca-cpt-cf' ),
		'add_new_item'       => __( 'Adicionar nuevo', 'zonabrunca-cpt-cf' ),
		'new_item'           => __( 'Nuevo item', 'zonabrunca-cpt-cf' ),
		'edit_item'          => __( 'Editar item', 'zonabrunca-cpt-cf' ),
		'view_item'          => __( 'Ver item', 'zonabrunca-cpt-cf' ),
		'all_items'          => __( 'Todos los items', 'zonabrunca-cpt-cf' ),
		'search_items'       => __( 'Buscar items', 'zonabrunca-cpt-cf' ),
		'parent_item_colon'  => __( 'Negocio padre:', 'zonabrunca-cpt-cf' ),
		'not_found'          => __( 'No se encontraron Donde Alojarse.', 'zonabrunca-cpt-cf' ),
		'not_found_in_trash' => __( 'No se encontraron Donde Alojarse en la papelera.', 'zonabrunca-cpt-cf' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Descripción.', 'zonabrunca-cpt-cf' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'donde-alojarse' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
    'taxonomies'         => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'donde-alojarse', $args );
}



add_action( 'init', 'brunca_servicios_adicionales_init' );
/**
 * Register Servicios adicionales post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function brunca_servicios_adicionales_init() {
	$labels = array(
		'name'               => _x( 'Servicios Adicionales', 'post type general name', 'zonabrunca-cpt-cf' ),
		'singular_name'      => _x( 'Servicios Adicionales', 'post type singular name', 'zonabrunca-cpt-cf' ),
		'menu_name'          => _x( 'Servicios Adicionales', 'menu admin', 'zonabrunca-cpt-cf' ),
		'name_admin_bar'     => _x( 'Servicios Adicionales', 'adicionar nuevo en la barra de admin', 'zonabrunca-cpt-cf' ),
		'add_new'            => _x( 'Adicionar', 'Servicios Adicionales', 'zonabrunca-cpt-cf' ),
		'add_new_item'       => __( 'Adicionar nuevo', 'zonabrunca-cpt-cf' ),
		'new_item'           => __( 'Nuevo item', 'zonabrunca-cpt-cf' ),
		'edit_item'          => __( 'Editar item', 'zonabrunca-cpt-cf' ),
		'view_item'          => __( 'Ver item', 'zonabrunca-cpt-cf' ),
		'all_items'          => __( 'Todos los items', 'zonabrunca-cpt-cf' ),
		'search_items'       => __( 'Buscar items', 'zonabrunca-cpt-cf' ),
		'parent_item_colon'  => __( 'Item padre:', 'zonabrunca-cpt-cf' ),
		'not_found'          => __( 'No se encontraron Servicios Adicionales.', 'zonabrunca-cpt-cf' ),
		'not_found_in_trash' => __( 'No se encontraron Servicios Adicionales en la papelera.', 'zonabrunca-cpt-cf' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Descripción.', 'zonabrunca-cpt-cf' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'servicios-adicionales' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
    'taxonomies'         => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'servicios', $args );
}
