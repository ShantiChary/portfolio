<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Portfolio
 */

// Dislay Single Project info
get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'project' ); ?>

		<!-- Previous and Next Buttons -->
		<div class="buttons">
			<!-- <div class="prev-btn-div"> -->
				<span class="previous-button ">Prev: <?php previous_post_link() ?></span>
			<!-- </div> -->

			| 

			<!-- <div class="next-btn-div"> -->
				<span class="next-button ">Next: <?php next_post_link() ?></span>
			<!-- </div> -->

		</div>

	<?php endwhile; // End of the loop. ?>
 
<!-- </div> #primary -->

<?php get_footer(); ?>


