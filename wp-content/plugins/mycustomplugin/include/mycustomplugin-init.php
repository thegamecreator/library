<?php
/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function book_register_post_type() {

	$labels = array(
		'name'                => __( 'Books Name', 'text-domain' ),
		'singular_name'       => __( 'Book Name', 'text-domain' ),
		'add_new'             => _x( 'Add New Book Name', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Add New Book Name', 'text-domain' ),
		'edit_item'           => __( 'Edit Book Name', 'text-domain' ),
		'new_item'            => __( 'New Book Name', 'text-domain' ),
		'view_item'           => __( 'View Book Name', 'text-domain' ),
		'search_items'        => __( 'Search Books Name', 'text-domain' ),
		'not_found'           => __( 'No Books Name found', 'text-domain' ),
		'not_found_in_trash'  => __( 'No Books Name found in Trash', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Book Name:', 'text-domain' ),
		'menu_name'           => __( 'Books Name', 'text-domain' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array('post_tag','category'),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-book',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author', 'thumbnail',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats'
			)
	);

	register_post_type( 'book', $args );
}

add_action( 'init', 'book_register_post_type' );

?>