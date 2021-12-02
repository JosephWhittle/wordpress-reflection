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
define( 'AUTH_KEY',         'qTr#LJYgv|v1|hE{)saEa,&t1m0N5y=C!&kW[G(elw-.ybM{mz~(iIrnj2gsT.`s' );
define( 'SECURE_AUTH_KEY',  '_fmp|b43QEt+^XN%X1r/A+|qYoPRR}ff#MwcnxRsAQQo&qs*$]@EM~<zxVbHT3MS' );
define( 'LOGGED_IN_KEY',    'LPzRhW|{bUC-BN2uj38sN_b1c~n]/63.z)qbr)EUe63j_@#S#_u3pql`H*.6|!*x' );
define( 'NONCE_KEY',        'Ex|X4T6UT@~P[:(30*G;S5YU&sy!A{flU#ev3_%6z:H~)dFkyK.6}5f<<gyy:AAh' );
define( 'AUTH_SALT',        '(3tNc1shv4x2e&LeWP1-()djH/eG/#!yYkixy8O1}^Q38*#09Jh^f,*h1`PB;6So' );
define( 'SECURE_AUTH_SALT', './AJz,r2.YUPpKCP?;5iL!Wr9$+#u!mK]ir$5HDH<^Fa:6M~Jq9C<W@/dmZf`1j4' );
define( 'LOGGED_IN_SALT',   'u4K:wlp$%|i&r<.AS<lH[jB+GN6<_})0h=#([2P_@KVnm[,~c/czn3t9@5e4n7o5' );
define( 'NONCE_SALT',       'v~uDnvPJ=WqPnqr1^[e@t?g&YT%:9wtc[,v1EYZ9r,b{iUMY}dphH]It{MJ HOo$' );

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
