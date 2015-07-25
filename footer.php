<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Regolith
 */

?>

	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
		<div class="footer-widgets">
			<div class="wrapper">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				
				<div class="clear"></div>
			</div><!-- .wrapper -->
		</div><!-- .footer-widgets -->
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'regolith' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'regolith' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'regolith' ), 'Regolith', '<a href="http://jleuze.com" rel="designer">Josh Leuze</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
