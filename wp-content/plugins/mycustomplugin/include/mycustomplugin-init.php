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
			'title', 'thumbnail','custom-fields', 'comments',
			'revisions', 'page-attributes', 'post-formats'
			)
	);

	register_post_type( 'books', $args );
}

add_action( 'init', 'book_register_post_type' );
/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function author_taxonomy_register() {

	$labels = array(
		'name'					=> _x( 'Authors Name', 'Taxonomy Authors name', 'text-domain' ),
		'singular_name'			=> _x( 'Author Name', 'Taxonomy Author name', 'text-domain' ),
		'search_items'			=> __( 'Search Authors Name', 'text-domain' ),
		'popular_items'			=> __( 'Popular Authors Name', 'text-domain' ),
		'all_items'				=> __( 'All Authors Name', 'text-domain' ),
		'parent_item'			=> __( 'Parent Author Name', 'text-domain' ),
		'parent_item_colon'		=> __( 'Parent Author Name', 'text-domain' ),
		'edit_item'				=> __( 'Edit Author Name', 'text-domain' ),
		'update_item'			=> __( 'Update Author Name', 'text-domain' ),
		'add_new_item'			=> __( 'Add New Author Name', 'text-domain' ),
		'new_item_name'			=> __( 'New Author Name Name', 'text-domain' ),
		'add_or_remove_items'	=> __( 'Add or remove Authors Name', 'text-domain' ),
		'choose_from_most_used'	=> __( 'Choose from most used text-domain', 'text-domain' ),
		'menu_name'				=> __( 'Author Name', 'text-domain' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'book_author', array( 'books' ), $args );
}

add_action( 'init', 'author_taxonomy_register' );

function book_add_shortcode_to_content($ID, $post){
	 $update_post=array(
	 	'post_content'=>"[book]".$ID."[/book]",
	 	// 'post-formats'=>
	 );
	wp_update_post($update_post);
}
add_action("publish_books","book_add_shortcode_to_content" );
?>