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
define( 'DB_NAME', 'myblog_db' );

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
define( 'AUTH_KEY',         '%xx=.-:GSJm3qU`gkRU-jp4hiB4Oe^F?GQvuyBF4SJ%;MA`wk.c7vX|-UMc4:um;' );
define( 'SECURE_AUTH_KEY',  'j-4<j2)jFFxk:r7jao]]vL[u1`m^F2E!=YDedl:^GFwZZI7A|`uFXnyrwZMJ^*lD' );
define( 'LOGGED_IN_KEY',    '/Uw3B0;tD#9(;dPDc;$X7zVK5teO~zFmb#6T~]9X*DD~91m^jcV=Sr]+^)9M2 *`' );
define( 'NONCE_KEY',        '>r+-9a9J}i=ZTIJw4!WhGujwd{3g,2`V#E!ktc>ZxgD-|LuArSuxQUoQv,^qBJ&X' );
define( 'AUTH_SALT',        '3a|+i KkQ)^JrdG:_J<{],Ji1g5-)4F$N#:]>r.L tPw]pG}f0hG}Ru=%^024B+%' );
define( 'SECURE_AUTH_SALT', 'hYu<h Sffv_)EnPF^)[@s_FS+0M@/TR{fbP*gNWk:6%>fn[+K&DV L-Gb fIP}#2' );
define( 'LOGGED_IN_SALT',   'y{}@ cZ/2?YlCtoQ_L|-/f>J6{owuI!U@=FU^#kM49{^WdEH JlH.}S%1XLzdAuz' );
define( 'NONCE_SALT',       '7/qRm,]9Y/-c,7RyY`~/T=B, <p+U)kf2!cl5ZJL(?aj!Y:}vj8WER{B@_RRl,aL' );

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
