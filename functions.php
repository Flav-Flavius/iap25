<?php 

if ( ! defined( 'IAP_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'IAP_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function iap_setup() {
    
    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    // 
    add_theme_support('responsive-embeds');

    add_theme_support('custom-logo');

    /**
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */ 

	add_theme_support( 'title-tag' );


    /**
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'blog-article-size', 490, 318 );
	add_image_size( 'blog-detail-size', 1280, 582, $crop = true );
    // add_image_size( 'blog-list-size', 400, 200, array() );

    // This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Header', 'iap' ),
			'footer-menu' => esc_html__( 'Footer', 'iap' ),
			'sidebar-menu' => esc_html__( 'Sidebar', 'iap' ),
			'contact-menu' => esc_html__( 'Contact', 'iap' )
		)
	);


    /**
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action( 'after_setup_theme', 'iap_setup' );
