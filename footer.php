<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer-container">
	<section class="main-foooter-content">
		<article class="footer-left">
			<h3 class="footer-left--title">Narrativas transmediales</h3>
			<div class="footer-left--menu">
				<?php dynamic_sidebar( 'left-footer-widgets' ); ?>
				<?php dynamic_sidebar( 'right-footer-widgets' ); ?>
			</div>
		</article>

		<article class="footer-right">
			<div class="footer-right--image">
				<?php dynamic_sidebar( 'footer-image-widgets' ); ?>
			</div>
			<div class="footer-right--description">
				<?php dynamic_sidebar( 'footer-description-widgets' ); ?>
			</div>
		</article>
	</section>
	
	<!---
	<div class="footer-grid">
		<?php //dynamic_sidebar( 'footer-widgets' ); ?>
	</div>
	-->
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
