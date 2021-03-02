
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<h1>Get in touch!</h1>

	<div>
		<section>
			<?php
					echo the_content();

add_shortcode('button', 'button_shortcode');

			?>
		</section>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
