<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dazzling
 */
?>
                </div><!-- close .row -->
            </div><!-- close .container -->
        </div><!-- close .site-content -->

	<div id="footer-area">
		<div class="container footer-inner">
			<?php get_sidebar( 'footer' ); ?>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="social-icons spacepad">
					<ul class="nodots clearfix center-block">
						<li class="col-xs-4"><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/inc/img/twitter-social.png" alt="twitter"></a></li>
						<li class="col-xs-4"><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/inc/img/fb-social.png" alt="facebook"></a></li>
						<li class="col-xs-4"><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/inc/img/vidio-social.png" alt="vidio"></a></li>
					</ul>
				</div>
				<div class="extra-info">
					© Indosiar 2015. All Rights Reserved.
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>