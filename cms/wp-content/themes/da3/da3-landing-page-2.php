<?php 
/*
 * Template Name: da3-landing-page-2
 */
?>
<?php get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">
			<div class="content-segment header clearfix">
				<div class="latest-post">
					<?php 
						$args = 'category_name=artikel&showposts=1';
						query_posts($args);
						while (have_posts()) : the_post();
							get_template_part('template/partial', 'post');
						endwhile;
						wp_reset_query();
					?>
				</div>
			</div>
			<div class="content-segment video-audisi">
				<div class="video-audisi-title">
					<?php 
						if (wp_is_mobile()) {
							echo '<h2 class="text-center bold">Di balik audisi D\'Academy 3</h2>';
						} else {
							echo '<img class="img-responsive" src="'. get_stylesheet_directory_uri() .'/inc/img/da3_title_videoaudisi.png">';
						}
					?>
				</div>
				<div class="video-audisi-vid spacepad spacemar clearfix">
					<div class="container">
						<?php 
							$args = 'category_name=video&showposts=3';
							query_posts($args);
							while (have_posts()) : the_post();
								get_template_part('template/partial', 'video');
							endwhile;
							wp_reset_query();
						?>
					</div>
				</div>
			</div>
			<div class="content-segment gallery-post">
				<div class="gallery-post-title">
					<?php 
						if (wp_is_mobile()) {
							echo '<h2 class="text-center bold">Gallery Photo</h2>';
						} else {
							echo '<img class="img-responsive" src="'. get_stylesheet_directory_uri() .'/inc/img/da3_title_galleri.jpg">';
						}
					?>
				</div>
				<div class="gallery-instagram">
					<?php
						$postId = 206;
						$getPost = get_post($postId);
						echo apply_filters('the_content', $getPost->post_content);
					?>
					<div class="container text-right">
						<a href="<?php echo site_url(); ?>/galeri"><button type="button" class="btn btn-primary">pergi ke galeri</button>
						</a>
					</div>
					
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>