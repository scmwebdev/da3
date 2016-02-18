<?php
/**
 * The template used for displaying content in artikel.php
 */
?>

<div class="item-list col-xs-12 spacemar">
	<div class="item-list-img">
		<?php the_post_thumbnail('featuredImage_desktop', array('class' => 'img-responsive')); ?>
	</div>
	<div class="item-list-content">
		<div class="item-list-title">
			<?php the_title('<h3>', '</h3>'); ?>
		</div>
		<div class="item-list-desc">
			<?php the_excerpt(); ?>
		</div>
		<div class="item-list-readmore">
			<a href="<?php echo get_permalink(); ?>"><button type="button" class="btn btn-primary">Baca selanjutnya</button></a>
		</div>
	</div>
</div>
