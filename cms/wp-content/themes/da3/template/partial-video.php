<?php
/**
 * The template used for displaying latest video
 * content on the homepage
 */
?>

<div class="video col-xs-12 col-sm-4">
	<a href=<?php echo get_permalink(); ?>>
		<div class="video-thumb">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="video-title">
			<?php the_title(); ?>
		</div>
	</a>
</div>
