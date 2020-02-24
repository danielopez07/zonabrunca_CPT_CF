<?php
add_action( 'init', 'brunca_zona_init' );
/**
 * Register a Zona post type.
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
 * Register a Negocio post type.
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
		'rewrite'            => array( 'slug' => 'zona' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
    'taxonomies'         => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'negocio', $args );
}
