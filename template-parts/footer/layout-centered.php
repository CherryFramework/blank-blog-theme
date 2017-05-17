<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package __Tm
 */

?>

<div class="footer-area-wrap invert">
	<div class="container">
		<?php do_action( '__tm_render_widget_area', 'footer-area' ); ?>
	</div>
</div>

<div class="footer-container">
	<div <?php echo __tm_get_container_classes( array( 'site-info' ) ); ?>>
		<?php
			__tm_footer_logo();
			__tm_social_list( 'footer' );
			__tm_footer_copyright();
			__tm_footer_menu();
		?>
	</div><!-- .site-info -->
</div><!-- .container -->
