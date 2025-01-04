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
define( 'DB_NAME', 'drivio' );

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
define( 'AUTH_KEY',         'q:J=~U9{B{%:`?&,`1|FWf8mci_bQsKy6VQbkq^po7p{3Q>0bUtl|]?rMxR@eF33' );
define( 'SECURE_AUTH_KEY',  'N^NuBMeN(AL>$N*/ET>Xmq;*do6h?7+>Lts$q;:rc~uvJ!O^S,U$~524K#]hSdjv' );
define( 'LOGGED_IN_KEY',    '&zKUl`j$y V==`!>iPB0yc<}b^k,C1tdCCvu<BX{GxaDzzcy@x_, fcWP[?/k3A:' );
define( 'NONCE_KEY',        '_/iXpA x4T3soE-n^$q{/{F~f/yy+#Kh?up3,^=lt,J{ kEq/IgA^pF]Vk>dtI!a' );
define( 'AUTH_SALT',        '#o`1xpQw!~c/%->hI;t|EDSDz:``a~B-8&#jG(vLk#h xs={0|h{gGgRV06|oJdE' );
define( 'SECURE_AUTH_SALT', '6&.{-.`{nU!>:M?{~-xcosU&Phy;.Qh)nSk[(FL_Ylp#XT uQt<C u|dH/.%l`-!' );
define( 'LOGGED_IN_SALT',   '@IiZ]VMB8]Kj|k73^$6HY+v!T~O~2bF#{`uo*Am01u}+dp0&=,yWpbj)k2u&.A#W' );
define( 'NONCE_SALT',       'M/qwHHSStlz-iX0{OqHt]G)!d7yWQJv;|l<CqfrAln/MQDUU`lP*i&$,PATd,/fD' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
