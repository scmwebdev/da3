<?php 
/*
 * Template Name: da3-content-page
 */
?>
<?php get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">
			<div class="page-title">
				<h1 class="title"><?php the_title(); ?></h1>
			</div>
			<div class="item spacemar clearfix">
				<?php
					$title = strtolower(get_the_title());
					$args = 'category_name='. $title .'&order=ASC';
					query_posts($args);
					while (have_posts()) : the_post();
						get_template_part( 'template/content', $title ); 
					endwhile;
					wp_reset_query();
				?>
		    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>