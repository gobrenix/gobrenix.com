<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @author jbiasi <biasijan@gmail.com>
 * @package gobrenix
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function _gxtheme_jetpack_setup() {
	add_theme_support('infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	));
}
add_action('after_setup_theme', '_gxtheme_jetpack_setup');
