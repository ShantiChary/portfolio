<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */

get_header();
?>
<body class="about-page">
	<div id="primary" class="content-area">
		<main id="main" class="site-main about-page" >

		<?php
		while ( have_posts() ) :
			the_post();


		endwhile; // End of the loop.

		get_template_part( 'template-parts/content', 'about' );
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</body>
<?php
// get_sidebar();
get_footer(); ?>
