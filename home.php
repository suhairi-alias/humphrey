<?php

add_action( 'genesis_meta', 'humphrey_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function humphrey_home_genesis_meta() {

	if ( is_active_sidebar( 'home-slider' ) || is_active_sidebar( 'home-welcome' ) || is_active_sidebar( 'home-left' ) || is_active_sidebar( 'home-right' ) ) {

		remove_action( 'genesis_loop', 'genesis_do_loop' );
		add_action( 'genesis_loop', 'humphrey_home_loop_helper' );
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

		// Add humphrey-home body class
		add_filter( 'body_class', 'humphrey_body_class' );
		function humphrey_body_class( $classes ) {
   			$classes[] = 'humphrey-home';
  			return $classes;
		}

	}
}

/**
 * Display widget content for "home" widget sections
 *
 */

function humphrey_home_loop_helper() {

		if ( is_active_sidebar( 'home-slider' ) ) {
			echo '<div id="homepage-slider">';
			dynamic_sidebar( 'home-slider' );
			echo '</div><!-- end #homepage-slider -->';
		}

		if ( is_active_sidebar( 'home-welcome' ) ) {
			echo '<div id="homepage-welcome">';
			dynamic_sidebar( 'home-welcome' );
			echo '</div><!-- end #homepage-welcome -->';
		}

		if ( is_active_sidebar( 'home-left' ) ) {
			echo '<div id="homepage-left">';
			dynamic_sidebar( 'home-left' );
			echo '</div><!-- end #homepage-left -->';
		}

		if ( is_active_sidebar( 'home-right' ) ) {
			echo '<div id="homepage-right">';
			dynamic_sidebar( 'home-right' );
			echo '</div><!-- end #homepage-right -->';
		}
}

genesis();