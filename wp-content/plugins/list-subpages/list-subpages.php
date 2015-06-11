<?php
/*
Plugin Name: List SubPages
Plugin URI: http://janbiasi.ch/avior/downloads.html
Description: Lists all children pages from a parent page in a simple list. Can be used for an artist or deejay or other overview pages where the pages are grouped like a tree with leafs. Just use the shortcode <code>[list_children]</code> on your page to activate.
Version: 1.0.1
Author: Jan Biasi
Author URI: http://janbiasi.ch/
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
*/

// Secure the plugin file from direct access
defined('ABSPATH') or die('No script kiddies please!');

function list_sub_pages() {
    global $post;
    if (is_page() && $post->post_parent) {
        $childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0');
    } else {
        $childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0');
    }
    if ($childpages) {
        $string = '<ul>' . $childpages . '</ul>';
    }
    return $string;
}

add_shortcode('list_children', 'list_sub_pages');
