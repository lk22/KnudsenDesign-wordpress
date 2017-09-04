<?php 

/**
 * get header
 */
get_header();

// check if content exists
if(have_posts()) {

	// having content posts
	while(have_posts()){
		// get the ppost
		the_post();

		// get content part
		get_template_part('content', get_post_format());
	}
}

/**
 * get footer
 */
get_footer();

 ?>