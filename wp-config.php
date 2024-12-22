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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sveta' );

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
define( 'AUTH_KEY',         'i)1iL$g>Wa9 an%vUNHvftB(&IqpBz`=73$~QP0w=V$^z/@T(_9Ks+Skk!yJ3gj6' );
define( 'SECURE_AUTH_KEY',  'S>_Xylrq?P; p3Rgi6=jyJ(qvIJ-{M41Rxk6dk%vVgTaWU<wX>GXtpgG.1$?{BqT' );
define( 'LOGGED_IN_KEY',    ' pfe0[(]DKb6qwqPaG,!+P`6farh6Yk9/GWCs)-%wbIdK5Q9o8%SL;iPx=p77;]/' );
define( 'NONCE_KEY',        '>jduAP|aFYL4,^j-oA>1s;uMTDgZQ@:r#2X6QmhX|C0Q4*S.zn$3y>GUb20D(%d+' );
define( 'AUTH_SALT',        '|<E*e;?_g%|>JgX|3@<NHp^bd{mRThN-i~:q#e*hTC.NMim-0eW_S>SqFJ8 rG$2' );
define( 'SECURE_AUTH_SALT', ')1V,F{*(eu&LO3|tVBj%|mzn!MgUquq&nu0X;r;Q75g+Y!E&Yl^BH`z_wZDgU)GB' );
define( 'LOGGED_IN_SALT',   '|2J L>ch9N7ej]7*C6n)bxJZNfo;MG0x9#UAOR#iQR>L7IM_4oRg>(@?JFE<>K3o' );
define( 'NONCE_SALT',       '7Sr|ONiyx^1.yx#SazB;0km4d#?1NR^]K3:xVC3HA8qy)oY|r^,1O4}{1(0Cc+ `' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
