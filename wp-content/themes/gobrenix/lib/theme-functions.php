<?php
/**
 * gobrenix theme functions definted in /lib/init.php
 *
 * @package gobrenix
 */


/**
 * Register Widget Areas
 */
function gx_widgets_init() {
	// Main Sidebar
	register_sidebar(array(
		'name'          => __('Sidebar', '_gxtheme'),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));
}

/**
 * Remove Dashboard Meta Boxes
 */
function gx_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	// unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

/**
 * Change Admin Menu Order
 */
function gx_custom_menu_order($menu_ord) {
	if (!$menu_ord) return true;
	return array(
		// 'index.php', // Dashboard
		// 'separator1', // First separator
		// 'edit.php?post_type=page', // Pages
		// 'edit.php', // Posts
		// 'upload.php', // Media
		// 'gf_edit_forms', // Gravity Forms
		// 'genesis', // Genesis
		// 'edit-comments.php', // Comments
		// 'separator2', // Second separator
		// 'themes.php', // Appearance
		// 'plugins.php', // Plugins
		// 'users.php', // Users
		// 'tools.php', // Tools
		// 'options-general.php', // Settings
		// 'separator-last', // Last separator
	);
}

/**
 * Hide Admin Areas that are not used
 */
function gx_remove_menu_pages() {
	// remove_menu_page('link-manager.php');
}

/**
 * Remove default link for images
 */
function gx_imagelink_setup() {
	$image_set = get_option('image_default_link_type');
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}

/**
 * Enqueue scripts
 */
function gx_scripts() {
	wp_enqueue_style('_gxtheme-style', get_stylesheet_uri());
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

/**
 * Remove Query Strings From Static Resources
 */
function gx_remove_script_version($src){
	$parts = explode('?ver', $src);
	return $parts[0];
}

/**
 * Remove Read More Jump
 */
function gx_remove_more_jump_link($link) {
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
