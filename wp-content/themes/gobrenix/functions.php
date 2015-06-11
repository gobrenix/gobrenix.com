<?php
/**
 * gobrenix functions and definitions
 *
 * @package gobrenix
 */

function dashesToCamelCase($string, $capitalizeFirstCharacter = false) {
    $str = str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
    if (!$capitalizeFirstCharacter) {
        $str[0] = strtolower($str[0]);
    }
    return $str;
}

/**
 * Add component based programming pattern to
 * include components in wordpress
 * @author jbiasi <biasijan@gmail.com>
 * @param  string $name 	Component name
 * @param  strig $skin 		Skin name
 * @param  array  $data 	Additional Data
 */
function component($name, $skin = null, $data = array()) {
    $prep = str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
	$prep[0] = strtolower($prep[0]);
    if($skin != null && is_array($skin)) {
		$data = $skin;
		$skin = null;
	} else if($skin != null) {
		$skin[0] = strtoupper($skin[0]);
		$prep .= $skin;
	}
    $module_uri = get_template_directory() . '/modules/' . $prep . '/' . $prep . '.php';
    if(file_exists($module_uri)) {
        $compCss = strtolower(preg_replace('/([a-zA-Z])(?=[A-Z])/', '$1-', $prep));
        echo '<div class="component component-' . $compCss . '">';
            include($module_uri);
        echo '</div>';
	} else {
		echo '<!-- Component "' . $module_uri . '" was not found -->';
	}
}

/**
 * Theme initialization
 */
require get_template_directory() . '/lib/init.php';

/**
 * Custom theme functions definited in /lib/init.php
 */
require get_template_directory() . '/lib/theme-functions.php';

/**
 * Helper functions for use in other areas of the theme
 */
require get_template_directory() . '/lib/theme-helpers.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/lib/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/lib/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/lib/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/lib/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/lib/inc/jetpack.php';


// Require Plugins
require get_template_directory() . '/lib/class-tgm-plugin-activation.php';
require get_template_directory() . '/lib/theme-require-plugins.php';


/**
 * Define custom post type capabilities for use with Members
 */
add_action('admin_init', 'gx_add_post_type_caps');
function gx_add_post_type_caps() {
	// gx_add_capabilities('portfolio');
}

/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter('wpseo_metabox_prio', 'gx_filter_yoast_seo_metabox');
function gx_filter_yoast_seo_metabox() {
	return 'low';
}

/**
 * Add module resp. assets styles and scripts
 */
function gobrenix_frontend() {
	if(!is_admin()) {
		wp_enqueue_style('app', get_template_directory_uri() . '/dist/app.css');
		wp_enqueue_script('app', get_template_directory_uri() . '/dist/app.js');
	}
}
add_action('wp_enqueue_scripts', 'gobrenix_frontend');
