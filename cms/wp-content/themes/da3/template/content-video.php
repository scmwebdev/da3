<?php
/**
 * @package da3
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('col-xs-12 col-sm-4')); ?>>
	<header class="entry-header page-header">
		<a target="_blank" href="<?php echo get_permalink(); ?>">
			<?php the_post_thumbnail(); ?>
		</a>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<p class="bold"><?php the_title(); ?></p>
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
