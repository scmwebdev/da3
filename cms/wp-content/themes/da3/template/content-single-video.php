<?php
/**
 * @package da3
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">
		<div class="container"><h1 class="entry-title "><?php the_title(); ?></h1></div>
		<?php the_content(); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			wp_link_pages( array(
				'before'            => '<div class="page-links">'.__( 'Pages:', 'dazzling' ),
				'after'             => '</div>',
				'link_before'       => '<span>',
				'link_after'        => '</span>',
				'pagelink'          => '%',
				'echo'              => 1
       		) );
    	?>
	</div><!-- .entry-content -->

<!-- .entry-meta -->
</article><!-- #post-## -->
