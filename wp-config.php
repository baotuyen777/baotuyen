<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'baotuyeninfo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ']g7^bDM7Za M4igK^M c>:ni|kE4TW]!nF10yEK*LuC@{(`=^vk(4<u5-nO)ktmF');
define('SECURE_AUTH_KEY',  '4O3D~&ZSNhMNnS=GU.C{(i9fU^OHni=es Yf2%!-0<a}$K?xfcQg38m7AVbyGsG0');
define('LOGGED_IN_KEY',    'hEBmBaS;XM|%?.,g=2kY.7ToxU#m6{=9YO/]b9[f> fN$[})MM2mXB%64a>A;Jir');
define('NONCE_KEY',        '1k>aNmu,.mn>}UT!Q-udD/{G^x{ob@UDw*YCsFhgZr@8@4M>p7^0An:e)1RqJ&nL');
define('AUTH_SALT',        ';h?-UnCXLI*m~E9j;KpJ7h|Hz= nubf6-g_%+qX1W>dxiyECxA6Cn9:aJ}%e]h0y');
define('SECURE_AUTH_SALT', 'qZ#yJ<Z%]pJ%g4WPR$)NEB2Ryuj~BqM`WVz*=mzb@IxK7}fWtlar/cpSy8O-Op#u');
define('LOGGED_IN_SALT',   '?LCg55E(Wxo{f< mzd!q`SUzu5TcVR[)-%|Fip,;/<7H9|LnhBTmp&5YwS9C9&[p');
define('NONCE_SALT',       ' ^-xl::oYqoG^DS[A5Z7TQ$*<z`]?44aBx_Vi*-7OM{`-2;8,h]{U)84w>-9iMTi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
