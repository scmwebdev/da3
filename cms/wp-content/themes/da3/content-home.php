<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package dazzling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="content-segment header clearfix">
		<div class="latest-post">
			<img class="img-responsive gem" src="<?php echo get_stylesheet_directory_uri();  ?>/inc/img/da3_gem_1.png" alt="gem - blur">
			<?php
				$args = array( 'numberposts' => '1', 'category_name' => 'article');
				$recent_posts = wp_get_recent_posts( $args ); 
				foreach( $recent_posts as $recent ){
					imgResponsive();
					$postThumb = get_the_post_thumbnail($recent["ID"]);
					$postThumb_mobile = get_the_post_thumbnail($recent["ID"], array(250));
					$postLink = get_permalink($recent["ID"]);
					$postTitle = $recent["post_title"];
					$postExcerpt = $recent["post_excerpt"];
					echo '<div class="_leftCol col-sm-7">
				        <div class="post-title" data-slide="left"><h2 class="bold">'. $postTitle .'</h2></div>
				        <div class="post-excerpt">'. $postExcerpt.'</div>
				        <div class="post-link"><a href="'. $postLink .'">baca selanjutnya ...</a></div>
				    </div>';

					if (wp_is_mobile()) {
						echo '<div class="_rightCol col-sm-5"><div class="post-thumb"><a href="">'. $postThumb_mobile .'</a></div></div>';
					} else {
						echo '<div class="_rightCol col-sm-5"><div class="post-thumb"><a href="">'. $postThumb .'</a></div></div>';
					} 
				}
			?>
		</div>
	</div>

	<div class="content-segment  gallery-post">
		<div class="gallery-post-title">
		<?php 
			if (wp_is_mobile()) {
				echo '<h2 class="text-center bold">Gallery Photo</h2>';
			} else {
				echo '<img class="img-responsive" src="'. get_stylesheet_directory_uri() .'/inc/img/da3_title_kontestan.png">';
			}
		?>
		</div>
		<div class="gallery-post-photo">
			<div class="spacemar subtitle">
				<div class="container">
					<h4 class="text-center bold">35 Calon Bintang D'Academy 335 Calon Bintang D'Academy 3</h4>
				</div>
			</div>
			<div class="container-fluid da3-slider">
				<div><img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri() ?>/inc/img/da3_gallery_1.jpg" alt="slider 1"></div>
				<div><img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri() ?>/inc/img/da3_gallery_2.jpg" alt="slider 2"></div>
				<div><img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri() ?>/inc/img/da3_gallery_1.jpg" alt="slider 1"></div>
			</div>
			<div class="clearfix container readmore"><div class="col-xs-12 spacepad text-right bold">selanjutnya.. </div></div>
		</div>
	</div>
	<div class="content-segment video-audisi">
		<img class="img-responsive gem hidden-xs" src="<?php echo get_stylesheet_directory_uri();  ?>/inc/img/da3_gem_2.png" alt="gem - blur">
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
				<h4 class="text-center bold">Dibalik audisi D’Academy 3</h4>
			</div>
		</div>
		<div class="video-audisi-vid spacepad spacemar">
	
			<?php
				$args = array( 'numberposts' => '1', 'category_name' => 'home_video');
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
					echo $recent["post_content"];
				}
			?>
		</div>
	</div>
	<!-- <div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'dazzling' ),
				'after'  => '</div>',
			) );
		?>
            <?php
            
            if ( is_front_page() ) :
              get_sidebar( 'home' );
            endif;
          ?>
	</div> -->
	<?php edit_post_link( __( 'Edit', 'dazzling' ), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
