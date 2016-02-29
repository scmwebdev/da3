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
					// $title = strtolower(get_the_title());
					// $args = 'category_name='. $title .'&order=ASC';
					// query_posts($args);
					// while (have_posts()) : the_post();
					// 	get_template_part( 'template/content', $title ); 
					// endwhile;
					// wp_reset_query();
				?>
				
				<?php
					// set up or arguments for our custom query
					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					$title = strtolower(get_the_title());
					$query_args = array(
						'post_type' => 'post',
						'category_name' => $title,
						'posts_per_page' => 25,
						'paged' => $paged
					);
					// create a new instance of WP_Query
					$the_query = new WP_Query( $query_args );
				?>
				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
				  <?php get_template_part( 'template/content', $title ); ?>
				<?php endwhile; ?>
				<?php else: ?>
				    <h1>Sorry...</h1>
				    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				</div>
		    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>