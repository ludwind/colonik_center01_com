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
define('DB_NAME', 'colonik');

/** MySQL database username */
define('DB_USER', 'ludwind');

/** MySQL database password */
define('DB_PASSWORD', '2550639');

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
define('AUTH_KEY',         'HvY@7hA5%5w+-~mSy@uH54<K:wlw+n-9Yw37#w3GN`qMPN}.#gX=7qO(UT%g$+`s');
define('SECURE_AUTH_KEY',  'cZSj-+7*$Y_~QNX1q$#`N2-A@>QmOUL-<;^WJx$IHR%3ag( NB9u/yuG0sG26Nfp');
define('LOGGED_IN_KEY',    'rns^<qG8@)P|yH|}#^7ZkF!4;B?H;I)_z .p)amJ30i?4<Ai]Uy1c>.--n*,^ftf');
define('NONCE_KEY',        '+ky#/L/=,/1>Z=-O[t1%qytw;]J&_2.]DP^T` Kj3/aE1)ug=ZL?RlwB~BHqhw`S');
define('AUTH_SALT',        'jY~[#B$0t2,B]xt0{KS>{K>9ah*^eU_JqvvVJ4Q$5(~<#2_bs<,Q-`!p30#=^5-E');
define('SECURE_AUTH_SALT', 'sEpXU*Ty;TF6U+=9_1g( PI,*5uQVWJIRVi<CZ@s RW]*1]R4{--Oe0%RtF-U}MO');
define('LOGGED_IN_SALT',   '5.|{wvn)O#~`>VD@4)++<ZTUlc;A,{@AJTlC#$Bo|t]@Q9<KIcOa=D+arQvI+YM~');
define('NONCE_SALT',       '#t-q8YA:q70^Av/KRPXA-D@--Wb)ycYEkg1%^C<Uz}(-|tVazE&4?LQYEjQ3uID&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'colonikwp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'es_ES');

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
