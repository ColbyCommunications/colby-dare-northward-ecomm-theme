<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dare-north-ward
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="site-info-container">
					<?php if( is_active_sidebar( 'footer-widget-area-1') ) { ?>
				<div class="footer-column">
					<?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
				</div>
				<?php }  if( is_active_sidebar( 'footer-widget-area-2') ) { ?>
				<div class="footer-column">
					<?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
				</div>
				<?php } if( is_active_sidebar( 'footer-widget-area-3') ) { ?>
				<div class="footer-column">
					<?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
				</div>
				<?php }  if( is_active_sidebar( 'footer-widget-area-4') ) { ?>
				<div class="footer-column">
					<?php dynamic_sidebar( 'footer-widget-area-4' ); ?>
				</div>
				<?php } ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
