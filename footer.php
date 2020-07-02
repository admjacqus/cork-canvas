<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="site-footer" role="contentinfo" class="header-footer-group">

	<div class="section-inner">

		<div class="footer-credits">

			<p class="footer-copyright">&copy;
				<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
			</p><!-- .footer-copyright -->


		</div><!-- .footer-credits -->

		<?php get_template_part( 'social' );  ?>

	</div><!-- .section-inner -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

<script>
	var lazyLoadInstance = new LazyLoad({
		elements_selector: ".lazy",
		threshold: 10
	});
</script>

</body>

</html>