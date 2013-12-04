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
define('DB_NAME', 'drummguitars');

/** MySQL database username */
define('DB_USER', 'drummguitars');

/** MySQL database password */
define('DB_PASSWORD', 'drummguitars');

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
define('AUTH_KEY',         '|M]PEy0<$;Z0-ew4x}d%wj|?`0ZJ>)9Ds*`c7py<xfSc5K{S|N+LuY|[Au,E6vlq');
define('SECURE_AUTH_KEY',  '_TLg#-uUXVo]h,dshe]cs0@L*0`Pnw~Thq=0(f&Qy$(},@6em0TwTfhU|PKi]0|W');
define('LOGGED_IN_KEY',    'b&Y5esLRMBdx>VwWW#$#=-G8>Y[kfj9lqJ]2&Z_EYPc?|_1F!PLAzB~VF%<Yz)]Y');
define('NONCE_KEY',        '>`1V%j`%+-z69{s{y/:7c<bF_Y|w@^?ua*T;z,U5MsuI@W/Og?*i3[k}^u_RA4qL');
define('AUTH_SALT',        's-LN=y+Ocz<~Xo!}g|ps=*e:7^Bn|Kkdzuei.4,5?*CA%o5i7BiGV|b_lsgh>_yG');
define('SECURE_AUTH_SALT', '.Ve5*Eh-od.R9;[gTj}+O7#I5DzMcIDna~R@H/FcSfqmeA~:)RXt=.Pi&N{F!I]w');
define('LOGGED_IN_SALT',   'Xb[Ql2S+{sAl^&i7}N+eT+8cNl%*z+g=-XM1Mv= G#+A3eRD_H_]U5S#LnF=LM+O');
define('NONCE_SALT',       'uG|eVqBQ-fJ%CvByfN5xpnB|<I8a)ZzuT}@ g/T}U83:X0vHaaocxRx!XXM:d|yG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
