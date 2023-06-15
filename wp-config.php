<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webnow-design' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_fJ9dc:oU2 79>o_o#1[<%{HmJ[6AR$GxY7~}0 Y)]5lvU0`{MSB>fsS/!zMc&L#' );
define( 'SECURE_AUTH_KEY',  'N.5bKeawHiM[7]<ThA9s`X;FQv7ojX1rY_Oh/Q8%C-*k_R!4YWv3R,gK#2s2LC/)' );
define( 'LOGGED_IN_KEY',    'J=#jL>x!x%v*ui~?r;eNXI[$lWvdJGIB+D~L0L#rg(`vVo#PuKoG_r?haxaw`q[s' );
define( 'NONCE_KEY',        'z PP7pN:~U747XG;c1cnZReu!DR1Kk[*Bq!vrS8:qLj~>-Sn]NL?NCb^JV1^D7E?' );
define( 'AUTH_SALT',        'W85-297jt*LgxGh[Rj28GQ~FFN~_<*RSt>-0P{v^{sd5vRE1&BP7J]]!GZ79aefr' );
define( 'SECURE_AUTH_SALT', '  $s)/oR]{=sk94uZfEGD=0Ta7{x0l*Wd./n}d{5K!&G$S|y8`*(1NkEgsNhUeHB' );
define( 'LOGGED_IN_SALT',   'J3#Z~!-<lD:E:DWXQ@Vdq*PP8~F8L2K&B~nou;%l~|!y9%`x4a8O<eLx<l|Rl-Us' );
define( 'NONCE_SALT',       'RQW!a>I=y7&S00_cD?]1:YB&`Cze)R}$Xkme[[aMqc@YJvM1Q&TP3 6zA7W .6hm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
