<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package testwp_ssass
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function testwp_ssass_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'testwp_ssass_jetpack_setup' );
