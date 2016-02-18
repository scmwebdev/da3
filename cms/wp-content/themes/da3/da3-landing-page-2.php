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
				<div class="spacemar subtitle">
					<div class="container">
						<h4 class="text-center bold">Di balik audisi D’Academy 3</h4>
					</div>
				</div>
				<div class="video-audisi-vid spacepad spacemar">
					<?php 
						$args = 'category_name=livestream';
						query_posts($args);
						while (have_posts()) : the_post();
							the_content();
						endwhile;
					?>
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
				<div class="gallery-post-photo">
					<div class="container-fluid da3-slider">
					<?php 
						$cat = 'galeri';
						$args = 'category_name=galeri';
						query_posts($args);
						while (have_posts()) : the_post();
							get_template_part('template/content', 'galeri');
						endwhile;
					?>
					</div>
					<div class="clearfix container readmore">
						<div class="col-xs-12 spacepad text-right bold"><a href="<?php echo site_url(); ?>/galeri">selanjutnya.. </a></div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>