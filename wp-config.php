<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'database' );

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
define( 'AUTH_KEY',         '!6~NA7Fh}h7T96$Hr{Q8:<C5:au?5_0p>Z! 6?uN}0.rH]./La@2Hnpd^+<4%(yU' );
define( 'SECURE_AUTH_KEY',  'CA!gM{4kZZ`@/ bB-1bSdbpCX)/hAi2ULZV,G6_l34.SE_ |*nJClukzb6-(|&P3' );
define( 'LOGGED_IN_KEY',    '(O9Z.@~i25bnGv>wZWy;_P+dM W-!L]KNkvk}D{K]{-?|H6iX#*>B3:F 4ZC^#j<' );
define( 'NONCE_KEY',        'RB!n|A{G<`q1~fi$2W;38vx1CYlQZVv.%5MPPVBXpi=f3+PBWqT{?3^;FPE3{y%=' );
define( 'AUTH_SALT',        'mlxaW0R%1Er/M|~7GVzNDKDW9#1?]K/OuP;wX7Eya.^gm=}m}d7/M5wSGj3Y;dA9' );
define( 'SECURE_AUTH_SALT', ')?S+Pm_##X)zb0}p7u$-)5  -?xrS)4y*o+<_ws)LWIz_nc=al)5|S* mTk;W,HC' );
define( 'LOGGED_IN_SALT',   '#%?Qi)Yg)sChA2P8II#`pxxwXxI=+A_m4n53vY8z+FP!CGIFLhgCe|:W!.a4e=XL' );
define( 'NONCE_SALT',       ':+7{&06zkN3r(Vu7oYOO[WKV.5.Lykr$o,_@l.4A5D$0@,Y<p=T/R:qb)^W!`hDl' );

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
