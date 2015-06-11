<?php
/**
 * Gobrenix Theme Customizer
 *
 * @author jbiasi <biasijan@gmail.com>
 * @package gobrenix
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _gxtheme_customize_register($wp_customize) {
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
}
add_action('customize_register', '_gxtheme_customize_register');

function _gxtheme_customize_preview_js() {
	wp_enqueue_script('_gxtheme_customizer', get_template_directory_uri() . 'assets/js/vendor/customizer.js', array('customize-preview'), '20130508', true);
}
add_action('customize_preview_init', '_gxtheme_customize_preview_js');
