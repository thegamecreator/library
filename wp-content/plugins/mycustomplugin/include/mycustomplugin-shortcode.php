<?php
function book_post_page( $atts, $content = ""){
	// The Query
$args=array(
	'post_type'=>array('books','page'),
	// 'p'		=>		$content,
	'post_status' => 'publish',
);
$the_query = new WP_Query( $args );

// var_dump($the_query);
// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$a=$a.'<li>'.get_the_content( ).'</li>';
	}
	/* Restore original Post Data */
	wp_reset_postdata();
	return $a;
} else {
	// no posts found
	return "ID=".$content;
}
}
add_shortcode('books','book_post_page' );
?>