<?php
/**
 * The template used for displaying latest post
 * content on the homepage
 */
?>

<?php if (wp_is_mobile()) { ?>
	<div class="container-fluid">
		<div class="post-title"><h2 class="bold text-left"><?php the_title(); ?></h2></div>
	    <div class="post-excerpt"><?php the_excerpt(); ?></div>
	    <div class="post-link">
	    	<a href=<?php echo get_permalink(); ?>>baca selanjutnya ...</a>
	    </div>
	</div>
<?php } else { ?>
	<div class="_leftCol col-sm-7">
	    <div class="post-title" data-slide="left"><h2 class="bold"><?php the_title(); ?></h2></div>
	    <div class="post-excerpt"><?php the_excerpt(); ?></div>

	    <div class="post-link">
	    	<a href="<?php echo get_permalink(); ?>">
	    		<button type="button" class="btn btn-primary">Baca selanjutnya..</button>
			</a>
		</div>
	</div>
	<div class="_rightCol col-sm-5">
		<a href="<?php echo get_permalink(); ?>">
			<div class="post-thumb special-img ">
				<?php the_post_thumbnail('itemList'); ?>
			</div>
		</a>
	</div>

<?php } ?>