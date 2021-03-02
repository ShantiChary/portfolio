<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>



		<footer id="colophon" class="site-footer footer-colophon bottom">
					<div class="site-info">

							<p>Designed and developed with ❤️ and ☕ in Vancouver, BC.</p>
							<p>Shanti Chary &#169; <?php echo date("Y"); ?></p>	

					</div><!-- .site-info -->
								
		</footer><!-- end #colophon -->

		<?php wp_footer(); ?>

	</div> <!-- end wrapper -->

	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="wp-content\themes\portfolio\slick/slick.min.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

	<script type="text/javascript">
	
		AOS.init();

		$(document).ready(function(){
			$('.work-section').slick({
				dots: false,
				infinite: true,
				cssEase: 'linear',
				swipe: true,
				arrows: true,
			});

		});

	</script>

</body>
</html>