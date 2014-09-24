<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package ryes_new_site
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function ryes_new_site_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'ryes_new_site_jetpack_setup' );
