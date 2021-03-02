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

	<link rel="stylesheet" type="text/css" href="wp-content\themes\portfolio\slick/slick.css"/>
	<!-- // Add the new slick-theme.css if you want the default styling -->
	<link rel="stylesheet" type="text/css" href="wp-content\themes\portfolio\slick/slick-theme.css"/>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class( $class ); ?>>

	<div id="wrapper">

		<div id="page" class="site">
				<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

				<header id="masthead">

					<div class="logo-container column top-left" id="left">
						<!-- <div class="my-logo zoom"> -->
							<a href="<?php echo get_option("siteurl"); ?>"><img  src="https://shantichary.com/wp-content/themes/portfolio/images/my-logo.png" title="Home" alt="my-logo";/></a>
						<!-- </div> -->
					</div>


					<?php
						if ( is_front_page() ) { ?>
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">?php esc_html_e( 'Primary Menu', 'portfolio' ); ?></button> -->
							

								<div id="toggle">
								<img src="https://shantichary.com/wp-content/themes/portfolio/images/menu.jpg" alt="Show" /></div>
								<div id="popout">

										<?php
									
										wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_class'        => 'nav-menu',
										) );
										?>

								</div>
								
							</nav>
							<!-- end main--navigation -->
					<?php }	?>	
					
				</header><!-- end #masthead -->

				<div id="content" class="site-content">




