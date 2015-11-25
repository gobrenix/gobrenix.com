<?php
    /**
     * Proper way to enqueue scripts and styles
     */
    function gobrenix_child_scripts() {
    	wp_enqueue_style('gobrenix_child', get_stylesheet_uri() );
    	wp_enqueue_script('gobrenix_child', get_stylesheet_directory_uri() . '/script.js');
    }

    add_action('wp_enqueue_scripts', 'gobrenix_child_scripts');
