<?php
/**
 * Featured Post Slider
 *
 */

// Get our Featured Content posts
$slider_posts = dukan_get_featured_content(); 

// Limit the number of words in slideshow post excerpts
add_filter('excerpt_length', 'dukan_featured_content_excerpt_length');

?>

	<div id="featured-content-bg">
	
		<div id="featured-content-wrap" class="container">
		
			<div id="featured-content" class="clearfix">

				<?php // Display Featured Content
				foreach ( $slider_posts as $post ) : setup_postdata( $post ); 
				
					get_template_part( 'content', 'featured' );

				endforeach;
				?>
			
			</div>
			
		</div>
		
	</div>

<?php

// Remove excerpt filter
remove_filter('excerpt_length', 'dukan_featured_content_excerpt_length');
// Reset Postdata
wp_reset_postdata();
?>