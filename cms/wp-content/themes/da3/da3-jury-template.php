<?php 
/*
 * Template Name: da3-jury-template
 */
?>
<?php get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">
			
			<?php
				while (have_posts()) : the_post();
					if ( wp_is_mobile() ) {
						the_title('<div class="page-title clearfix"><h1>', '</h1></div>');
					} else {
						the_content();
					}
				endwhile; ?>
			<div class="item clearfix">
			<?php

				query_posts('category_name=jury&order=ASC'); //set the condition for the posts query
				while (have_posts()) : the_post();
					get_template_part( 'template/content', 'jury' ); //get the jury page template
				endwhile;
			?>
		    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>