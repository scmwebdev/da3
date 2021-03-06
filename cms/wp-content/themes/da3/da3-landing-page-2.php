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
				<div class="container">
						<div class="page-title">
						<h2 class="title">Video</h2>
					</div>
				</div>
				
				<div class="video-audisi-vid clearfix">
					<div class="container">
						<?php 
							$args = 'category_name=video&showposts=3';
							query_posts($args);
							while (have_posts()) : the_post();
								get_template_part('template/partial', 'video');
							endwhile;
							wp_reset_query();
						?>
						<div class="col-xs-12 spacepad text-right">
							<a href="<?php echo site_url(); ?>/video">
								<button type="button" class="btn btn-primary">Pergi ke Video</button>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="content-segment gallery-post">
				<div class="container">
						<div class="page-title">
						<h2 class="title">Galeri</h2>
					</div>
				</div>
				<div class="gallery-instagram spacepad">
					<?php
						$postId = 206;
						$getPost = get_post($postId);
						echo apply_filters('the_content', $getPost->post_content);
					?>
					<div class="container text-right">
						<a href="<?php echo site_url(); ?>/galeri"><button type="button" class="btn btn-primary">Pergi ke galeri</button>
						</a>
					</div>
					
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>