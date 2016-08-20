<?php 
get_header( );
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		?><h1><?php the_title();?></h1>
		<section class="container">
		<?php
		the_content( );
		//
		?></section><?php
	} // end while
} // end if
get_footer( );
?>