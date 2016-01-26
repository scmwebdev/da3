<?php 
/*
 * Template Name: da3-template
 */
?>
<?php get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_front_page() ) {
					get_template_part( 'content', 'home' );
				}
				else {
					get_template_part( 'content', 'page' );
				}
			?>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>