<?php
/**
 * The template used for displaying latest post
 * content on the homepage
 */
?>


<div class="_leftCol col-sm-7">
    <div class="post-title" data-slide="left"><h2 class="bold"><?php the_title(); ?></h2></div>
    <div class="post-excerpt"><?php the_excerpt(); ?></div>
    <div class="post-link"><a href=<?php echo get_permalink(); ?>>baca selanjutnya ...</a></div>
</div>
<div class="_rightCol col-sm-5">
	<div class="post-thumb special-img "><a href=""><?php the_post_thumbnail('itemList'); ?></a>
	</div>
</div>