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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

  //ADDED THESE TO MANUALLY FIX THE LOG IN PROBLEMS
  define('WP_SITEURL', 'http://localhost/wordpress-reflection/');
  define('WP_HOME', 'http://localhost/wordpress-reflection/');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_reflection' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'YT<RC2dFW>3K;/VrM;FlY=k}x9r3#1=~zGUbE u`JM9A:9&Yf6,Q m>R(<57qf]4' );
define( 'SECURE_AUTH_KEY',  '6`J`CFHUP% w;jA79<KA`&_S;oTHOVM^&|2_qwvg!(+%,j~ @p%tuyPk$DW{Z]6-' );
define( 'LOGGED_IN_KEY',    '<WR/gg&.y+$.JezFHh,D.H,,KOIp`Bog?f*EbM,xv:WmT@oPG:)r?%,fFLI3ip:y' );
define( 'NONCE_KEY',        '8S3L6K,k.q}]uU%J^FjrONLDb3!Ui8rq5Mlg~SBnx6~K)O4fq6+Lb}is(9W/#OVG' );
define( 'AUTH_SALT',        'qX7v$sj*DG!poP)rg_ZcJy<6PvycclCulZlv6EoE{+n^G#/bq,itQeq6E;9-eOx(' );
define( 'SECURE_AUTH_SALT', 'yj>Ck!V3%:|v[f9GmW>}qC}8gj*VB,7kJ8e=R3T1b}xAg|HM~I`EP2fmN)<(*/.^' );
define( 'LOGGED_IN_SALT',   'VrdT[do0{1,O/lq1%C5n,9gY&9TzM{M5L5LGl2T0HYk,f-)&m/<im_G KnAwvLM6' );
define( 'NONCE_SALT',       'i<:`|Z!/<:`UI.:zoqfu->?i0)d:WCW;_YHbmk|Rftl5.OS:_&C=dDv`W4igD*A ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
