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
					$title = get_the_title();
					$args = 'category_name='. $title .'&order=ASC';
					query_posts($args);
					while (have_posts()) : the_post();
						get_template_part( 'template/content', $title ); //get the jury page template
					endwhile;
				?>
		    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>