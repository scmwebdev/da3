<?php
/**
 * The Template for displaying all single posts.
 *
 * @package dazzling
 */

get_header(); ?>
	<div id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php 
				$postCat = getPostCat();
				if ($postCat == 'artikel') {
					get_template_part( 'template/content', 'single' ); 
				} elseif ($postCat == 'video') {
					get_template_part( 'template/content', 'single-video' ); 
				}
				
			?>
	
			<?php //dazzling_post_nav(); ?>
			
			<!-- comment out user comment -->
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				//if ( comments_open() || '0' != get_comments_number() ) :
				//	comments_template();
				//endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>