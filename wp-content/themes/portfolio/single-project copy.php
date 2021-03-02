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

<div id="primary" class="content-area">
	<!-- <main id="main" class="site-main single-project-page" role="main"> -->

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'project' ); ?>

		<!-- Previous and Next Buttons -->
		<div class="buttons">

	<!-- ?php  -->

		<span class="previous-button "><?php previous_post_link() ?></span>
		<span class="next-button "><?php next_post_link() ?></span> 

			<!-- ?> -->
		</div>

	<?php endwhile; // End of the loop. ?>
 
	<!-- </main>#main -->
</div> <!--#primary -->

<?php get_footer(); ?>


