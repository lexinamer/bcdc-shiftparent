<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SHIFT_NC_Parent
 */

?>

	</div><!-- #content -->

	<div class="footer-bubble"></div>

	<footer id="colophon" class="site-footer">
		<section class="footer_content">
			<?php the_field('footer_content'); ?>
			<h5><a href="#">find a clinic</a></h5>
		</section>


		<div class="site-info">
			Footer content here
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
