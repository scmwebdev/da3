<?php
/**
 * The template used for displaying content in jury.php
 *
 */
?>

<div class="item-list col-xs-12 col-sm-3">
	<div class="item-list-img">
		<?php the_post_thumbnail('itemList', array('class' => 'fullwidth img-responsive')); ?>
	</div>
	<div class="item-list-name"><?php the_title(); ?></div>
</div>
