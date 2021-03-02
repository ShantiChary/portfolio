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
	
	<?php wp_head(); ?>
</head>

<body <?php body_class( $class ); ?>>

	<div class="wrapper">
		<div id="div-main" class="div-main"> <!--main div -->
			<div id="page" class="site">
				<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

				<header id="masthead" class="my-header">
					<!-- <div class="my-logo">
						<a href="?php echo get_option("siteurl"); ?>"><img class="my-logo"  src="http://localhost/portfolio/wp-content/themes/portfolio/images/logo-transparent.png" title="Home" width=100px; alt="my-logo"/></a>
					</div> -->
					
					<div class="my-logo-name">
						<a href="<?php echo get_option("siteurl"); ?>"><h2 class="my-header-logo">SHANTI CHARY</h2></a>
					</div>
				
				<!-- <a href="?php echo get_option("siteurl"); ?>"><img class="my-logo"  src="https://shantichary.com/wp-content/themes/portfolio/images/my-logo-simple-grey.png" title="Home" width=230px; alt="my-logo"/></a> -->
				<!-- <a href="?php echo home_url(); ?>"><img class="my-logo"  src="http://localhost/portfolio/wp-content/themes/portfolio/images/logo-transparent.png" title="Home" width=200px; alt="my-logo"/></a> -->


				<nav id="navigation">

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
					<?php }		
					
					
					elseif (! is_front_page() ) { ?>
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="secondary-menu" aria-expanded="false"><?php esc_html_e( 'Secondary Menu', 'portfolio' ); ?></button>

							<?php
						
							wp_nav_menu( array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'secondary-menu',
							) );
							?>
						</nav><!-- #site-navigation -->						
						<?php }	?>	
				</div>				
							</nav>
				</header><!-- #masthead -->

				<div id="content" class="site-content">
