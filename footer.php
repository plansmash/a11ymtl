<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package a11yMTL
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'a11ymtl' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'a11ymtl' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'a11ymtl' ), 'a11ymtl', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/jqBootstrapValidation.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php bloginfo('template_url'); ?>/js/freelancer.min.js"></script>



<?php wp_footer(); ?>

</body>
</html>
