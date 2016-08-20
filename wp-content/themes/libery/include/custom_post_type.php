<?php
	add_action( 'init', 'codex_book_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Books', 'post type general name', 'libery-custom-theme' ),
		'singular_name'      => _x( 'Book', 'post type singular name', 'libery-custom-theme' ),
		'menu_name'          => _x( 'Books', 'admin menu', 'libery-custom-theme' ),
		'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'libery-custom-theme' ),
		'add_new'            => _x( 'Add New', 'book', 'libery-custom-theme' ),
		'add_new_item'       => __( 'Add New Book', 'libery-custom-theme' ),
		'new_item'           => __( 'New Book', 'libery-custom-theme' ),
		'edit_item'          => __( 'Edit Book', 'libery-custom-theme' ),
		'view_item'          => __( 'View Book', 'libery-custom-theme' ),
		'all_items'          => __( 'All Books', 'libery-custom-theme' ),
		'search_items'       => __( 'Search Books', 'libery-custom-theme' ),
		'parent_item_colon'  => __( 'Parent Books:', 'libery-custom-theme' ),
		'not_found'          => __( 'No books found.', 'libery-custom-theme' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'libery-custom-theme' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'libery-custom-theme' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'book', $args );
}
?>