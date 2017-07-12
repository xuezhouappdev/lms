<?php get_header(); ?>

	<div id="wrap" class="container clearfix">
		
		<section id="content" class="primary" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post();

			//get_template_part( 'content', 'page' );
			get_template_part( 'content', get_post_format() );

			endwhile;

		endif; ?>
				
		</section>
		
		<?php get_sidebar(); ?>
		
	</div>
	
<?php get_footer(); ?>	