<?php
/**
 * The template used for displaying content in jury.php
 *
 */
?>

<div class="item-list clearfix">
	<div class="item-list-img"><?php the_post_thumbnail('itemList'); ?></div>
	<div class="item-list-text">
		<div class="item-list-text-title"><?php the_title(); ?></div>
		<div class="item-list-text-desc"><?php the_content(); ?></div>
	</div>
</div>
