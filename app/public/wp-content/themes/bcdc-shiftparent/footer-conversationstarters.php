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
		<form class="gender-form">
			<h3>Want information more specific to your child?</h3>

			<select class="mychild">
				<option value="girl">girl</option>
				<option value="boy">boy</option>
			</select>

			 <select class="loveinterest">
				<option value="girls">girls</option>
				<option value="boys">boys</option>
				<option value="unsure">unsure</option>
			</select>
			<button type="button">Submit</button>
		</form>

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

<!-- Javascript for dropdown selectors -->
	<script type="text/javascript">
		var btn = document.querySelector('button');
		var a = document.querySelector('.mychild');
		var b = document.querySelector('.loveinterest');

		btn.addEventListener("click", function(){
		   if(a.value === 'girl' && b.value === 'girls' ){
				 window.location.href = "<?php echo get_site_url(); ?>/girlgirls";
		   } else if (a.value === 'girl' && b.value === 'boys' ){
				 window.location.href = "<?php echo get_site_url(); ?>/girlboys";
		   } else if (a.value === 'boy' && b.value === 'girls' ){
				 window.location.href = "<?php echo get_site_url(); ?>/boygirls";
		   } else if (a.value === 'boy' && b.value === 'boys' ){
				 window.location.href = "<?php echo get_site_url(); ?>/boyboys";
		   } else {
				 window.location.href = "<?php echo get_site_url(); ?>/questioning";
		   }
		});
	</script>

</body>
</html>
