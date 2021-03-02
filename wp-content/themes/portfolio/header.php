<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Abel|Open+Sans+Condensed:300,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Chau+Philomene+One" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Changa+One" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="wp-content\themes\portfolio\slick/slick.css"/>
	<!-- // Add the new slick-theme.css if you want the default styling -->
	<link rel="stylesheet" type="text/css" href="wp-content\themes\portfolio\slick/slick-theme.css"/>

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class( $class ); ?>>

	<div id="wrapper">

		<div id="page" class="site">
				<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

				<header id="masthead">

						<div class="logo-container column top-left" id="left">

							<a href="<?php echo get_option("siteurl"); ?>"><img  src="https://shantichary.com/wp-content/themes/portfolio/images/logo-black.png" id="my-logo" title="Home" alt="my-logo";/></a>

						</div>

						<?php
						if ( is_front_page() ) { ?>
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'portfolio' ); ?></button>

								<?php
							
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
								?>
							</nav><!-- #site-navigation -->
						<?php }	?>					

				</header><!-- end #masthead -->

				<div id="content" class="site-content">




