<?php
/**
 * Portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Portfolio
 */

if ( ! function_exists( 'portfolio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function portfolio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Portfolio, use a find and replace
		 * to change 'portfolio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'portfolio', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'post-thumbnails' );
		add_image_size('project-size', 400, 313, true);
		add_image_size('profile-size', 800, 900, true);		

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'portfolio' ),
		) );


		register_nav_menus( array(
			'menu-2' => esc_html__( 'Secondary', 'portfolio' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'portfolio_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portfolio_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'portfolio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function portfolio_scripts() {
	wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() );

	wp_enqueue_script( 'portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'portfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// ENQUEUE the ISOTOPE JS FILES INTO THE FUNCTIONS.PHP
    // if(is_post_type_archive('project')){
	// if ( is_front_page() ) {		
    //     wp_enqueue_script( 'portfolio-imagesloaded', get_template_directory_uri( '/js/imagesloaded.pkgd.min.js' ), array( 'jquery' ), '4.1.1', true );
    //     wp_enqueue_script( 'portfolio-isotope-cdn', 'https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js', array('jquery'), 20180518, false );
    //     wp_enqueue_script( 'portfolio-isotopesettings', get_template_directory_uri() . '/js/isotope-settings.js', array('portfolio-isotope-cdn'), 20180518, false );		
	// }

		//calling in font awesome js
		wp_enqueue_script('mindset-fontawesomejs', get_template_directory_uri() . '/fonts/fontawesome/js/fontawesome-all.min.js', array(), '20180518', true);

	//SCROLL TO TOP BUTTON script
	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/back-to-top.js', array( 'jquery' ) );

	//STICKY NAV script
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/sticky-nav.js',  array(), '20181025', true );

	// Enqueue Multislider script and styles
	wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/slick/slick.min.js', array( 'jquery' ), '1.0', true );

	wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/slick/slick.css', '1.6.0', 'all');
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/slick/slick-theme.css', '1.6.0', 'all');

	//SCROLL TO TOP BUTTON script
	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/back-to-top.js', array( 'jquery' ) );

	//HAMBURGER MENU SLIDE PANEL
	// wp_enqueue_script( 'wpb_slidepanel', get_template_directory_uri() . '/js/slidepanel.js', array('jquery'), '20210123', true );

}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if ( is_post_type_archive('project')) {
	wp_enqueue_script('isotope', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js#asyncload', array(), '2.2.2', true);
	wp_enqueue_script('imagesloaded', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.1.8/imagesloaded.min.js', array(), '3.1.8', true);
}




// Add External Link to Featured Image with Custom Field
 
add_filter('post_thumbnail_html','add_external_link_on_page_post_thumbnail',10);
    function add_external_link_on_page_post_thumbnail( $html ) {
    if( is_singular() ) {
            global $post;
            $name = get_post_meta($post->ID, 'ExternalUrl', true);
            if( $name ) {
                    $html = '<a href="' . ( $name ) . '" target="_blank" >' . $html . '</a>';
            }
    }
    return $html;
	}
	

	/**
 * Add button HTML to the footer section.
 */
// function themeslug_add_scroll_button() {
// 	echo '<a href="#" id="topbutton"></a>';
//   }
//   add_action( 'wp_footer', 'themeslug_add_scroll_button' );

function my_custom_mce_buttons_3( $buttons ) {	
	/**
	 * Enable core button(s) that are disabled by default
	 */

	$buttons[] = 'underline';

	return $buttons;
}
add_filter( 'mce_buttons_3', 'my_custom_mce_buttons_3' );




