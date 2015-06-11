<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gx_gobrenix_com');

/** MySQL database username */
define('DB_USER', 'gx_site_admin');

/** MySQL database password */
define('DB_PASSWORD', '5ddjGjy5yrLUcjLa');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Tl|eAvOK%?fA;Q0F11]p8xI.[:|arhOb&k1)[Uv3skx71Y<PBg+k7J[TGoo3IGWM');
define('SECURE_AUTH_KEY',  '3AuR!Rf%3k~=mCRAxvBf %ox~-`x#d9&FXFENq]T{)&QO[_XLIYOD%*i<!3UC:s-');
define('LOGGED_IN_KEY',    'o),u /9x@&lNc2Z&63c&Z;<&BKCbi|[=z|$L BQP;t*r/T9r(S-|z4IS2&D0aM|r');
define('NONCE_KEY',        '4~}aOlr_yBD}A3T&.<>u+([)G8+]KSEBMt|+5=ozeD^xv6%Zo.*]NjHrNS}HoFe4');
define('AUTH_SALT',        'qF^YfJbS.)?T=0.2~z6+{Z&2oZ/hMsfN*^dfbFJ]W(c%DT`!nM_&vcy{-DJ1UJmp');
define('SECURE_AUTH_SALT', '%h(/--?WDJv{{sW!r&82gcn#D:C|t#VPj~e0GZ/$Ee.tTiNLhzO@%kPWwz+=zg)x');
define('LOGGED_IN_SALT',   'O <=!,xe7|u3]y.-</[&@a%--i0)z^b*-+{cY}h#3!-{C9N_>={}J]_]D)q{{uut');
define('NONCE_SALT',       'J!}$&,`j)osliv>,^p}--.OSQ,|g,rq!?zK,+^B^b+H*78bM|*|0=Y!/(I%4A%}7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gx_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
