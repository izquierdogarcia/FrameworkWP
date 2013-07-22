<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten_Five 
 * @since Twenty Ten Five 1.0
 */
?>
	</div><!-- #main -->

	<footer role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

			<!--<div id="site-info">
				<a href="<?php //echo home_url( '/' ) ?>" title="<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
				
			</div>-->
			<!-- #site-info -->

			<div id="social">
				
				<a href="http://github.com/izquierdogarcia"><img src="<?php bloginfo('template_directory'); ?>/images/github.gif" /></a>
				<a href="http://twitter.com/izquierdogarcia"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.gif" /></a>
				<a href="http://www.flickr.com/photos/aizqui/"><img src="<?php bloginfo('template_directory'); ?>/images/flickr.gif" /></a>
			</div>

		</div><!-- #colophon -->
	</footer><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
