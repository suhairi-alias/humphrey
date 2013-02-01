<?php
// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

// Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Humphrey Theme' );
define( 'CHILD_THEME_URL', 'http://wpcanada.ca/' );

// Add Viewport meta tag for mobile browsers
add_action( 'genesis_meta', 'humphrey_viewport_meta_tag' );
function humphrey_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

// Load Google fonts
add_action( 'wp_enqueue_scripts', 'humphrey_load_google_font' );
function humphrey_load_google_font() {
	wp_enqueue_style( 'google-font', 'http://fonts.googleapis.com/css?family=Oswald:400|Open+Sans:400', array(), PARENT_THEME_VERSION );
}

// Add support for custom background
add_theme_support( 'custom-background' );

// Add support for custom header
add_theme_support( 'genesis-custom-header', array(
	'width' => 1100,
	'height' => 120
) );

// Reposition the secondary navigation
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_before', 'genesis_do_subnav' );

// Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

// Add new image sizes
add_image_size( 'homepage', 120, 120, TRUE );
add_image_size( 'small', 80, 80, TRUE );
add_image_size( 'portfolio', 340, 230, TRUE );

// Create portfolio custom post type
add_action( 'init', 'humphrey_portfolio_post_type' );
function humphrey_portfolio_post_type() {
	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio', 'humphrey' ),
				'singular_name' => __( 'Portfolio', 'humphrey' ),
			),
			'exclude_from_search' => true,
			'has_archive' => true,
			'hierarchical' => true,
			'menu_icon' => get_stylesheet_directory_uri() . '/images/icons/portfolio.png',
			'public' => true,
			'rewrite' => array( 'slug' => 'portfolio' ),
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'genesis-seo' ),
		)
	);
}

// Change the number of portfolio items to be displayed (props Bill Erickson)
add_action( 'pre_get_posts', 'humphrey_portfolio_items' );
function humphrey_portfolio_items( $query ) {

	if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'portfolio' ) ) {
		$query->set( 'posts_per_page', '12' );
	}

}

// Reposition the footer widgets
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );
add_action( 'genesis_after', 'genesis_footer_widget_areas' );

// Reposition the footer
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
add_action( 'genesis_after', 'genesis_footer_markup_open', 11 );
add_action( 'genesis_after', 'genesis_do_footer', 12 );
add_action( 'genesis_after', 'genesis_footer_markup_close', 13 );

// Register widget areas
genesis_register_sidebar( array(
	'id'			=> 'home-slider',
	'name'			=> __( 'Home Slider', 'humphrey' ),
	'description'		=> __( 'This is the homepage slider section.', 'humphrey' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-welcome',
	'name'			=> __( 'Home Welcome', 'humphrey' ),
	'description'		=> __( 'This is the homepage welcome section.', 'humphrey' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-left',
	'name'			=> __( 'Home Left', 'humphrey' ),
	'description'		=> __( 'This is the homepage left section.', 'humphrey' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-right',
	'name'			=> __( 'Home Right', 'humphrey' ),
	'description'		=> __( 'This is the homepage right section.', 'humphrey' ),
) );
