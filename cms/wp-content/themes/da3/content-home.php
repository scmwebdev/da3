<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package dazzling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="header clearfix">
		<div class="latest-post">
			<img class="img-responsive gem" src="<?php echo get_stylesheet_directory_uri();  ?>/inc/img/da3_gem_1.png" alt="gem - blur">
			<?php
				$args = array( 'numberposts' => '1' );
				$recent_posts = wp_get_recent_posts( $args ); 
				foreach( $recent_posts as $recent ){
					imgResponsive();
					$postThumb = get_the_post_thumbnail($recent["ID"], array(250));
					$postLink = get_permalink($recent["ID"]);
					$postTitle = $recent["post_title"];
					$postExcerpt = $recent["post_excerpt"];
					echo '<div class="_leftCol col-sm-7">
					        <div class="post-title"><h2 class="bold">'. $postTitle .'</h2></div>
					        <div class="post-excerpt">'. $postExcerpt.'</div>
					        <div class="post-link"><a href="'. $postLink .'">baca selanjutnya ...</a></div>
					    </div>
					    <div class="_rightCol col-sm-5">
					        <div class="post-thumb"><a href="">'. $postThumb .'</a></div>
					    </div>';
				}
			?>
		</div>
	</div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'dazzling' ),
				'after'  => '</div>',
			) );
		?>
            <?php
            // Checks if this is homepage to enable homepage widgets
            if ( is_front_page() ) :
              get_sidebar( 'home' );
            endif;
          ?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'dazzling' ), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
