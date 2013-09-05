<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'oventio_wp');

/** MySQL database username */
define('DB_USER', 'oventio_wp');

/** MySQL database password */
define('DB_PASSWORD', 'ChPWVxTUv6J8MjRS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '!p!3G>.Z^|&m>quRD(=GY.k!<PcPt^_X^3)`n8iDVaS#k},:nj{x{$4aT.o5!Ezc');
define('SECURE_AUTH_KEY',  'O!Xm:5R8Wk.|PC(Y^vhbUPr?s=I1z~C+s~-*0{{qs%Y__H+hkyl7x>nh/z.tNuB{');
define('LOGGED_IN_KEY',    'cp.+3$J@#82-:~x}{&w4D4AJk1-9?|a3sC_(fjv?lG]Xen-T5z/}6g#3=76K56Mb');
define('NONCE_KEY',        'N*oTE!=+fF7@x3StSVGVI~2@PxrIu ~z(bg}SPfFV7sZ 7-GEkPX`aRfYZ|RgLyV');
define('AUTH_SALT',        'C!j#[b#;^:?dA5xo-}V%/`VPFE4kJ5a25xr[9!Z8CJ,50s0=985lOt>d>1yh;6]r');
define('SECURE_AUTH_SALT', '>G+o]%-J)]A@W.L0HHbj=?e+@(R.-9)JqjGT3%kO1ps{%%UvI5|Uyv]]OT3Oq?Ys');
define('LOGGED_IN_SALT',   'DbA+oj}FcZ7vz2q%)-T=,WZ||? |y,_1(y+z{eK5r`r?_IIu6WjxKT0$Jm|k7%;g');
define('NONCE_SALT',       ']/6woL=WJkSlv4S<uq`l+X`+KGMpDdq/Jjt5|9~$c7hXC[r+mc|.+(Dx5!0c#M-k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ov_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
