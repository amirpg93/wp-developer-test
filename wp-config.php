<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wp_dev_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Parangat@#866' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&Xu6ycuU{8kMhq?#PWk4xM|-p_V:hxWIO[Fyc4jvl ]Z.9@BJQdL5uW56:r]k9+y' );
define( 'SECURE_AUTH_KEY',  '!8mJs^P|1,M8{-b73:oYk7dT&1rg%f^g}3{EX9^G_s4y~3]H4Y(jimVc`i,lOSeG' );
define( 'LOGGED_IN_KEY',    'R!P9Lmx Zj+oFvSqxzW:6hsW}F.P!{CL,hu#mEKgggl`QZ;~u&em3[}f?u1^S6dp' );
define( 'NONCE_KEY',        'blg*h<w.UmLVYN|@syzU+4)VB+QSY`0yZY.(=CaI-Q]9U/99M_@NX6`E/2wLq&HQ' );
define( 'AUTH_SALT',        '@r-}ug%xxM]~~9@;6L#6(Fq+rI|zV11I,gGxLn|nCN_XJj9&=oSEF-%0)`<OiT1H' );
define( 'SECURE_AUTH_SALT', 'OilAYbtEB~0BiQ-(jpSm.OXpjL,@8(9 +IgS{<5UmJ0g$0.NF{x*lmL78yaUD[rE' );
define( 'LOGGED_IN_SALT',   '6!P{Vj_Juq45xnUFV!48cx_| 0TRXV8,GWTl6/ra~$KUVK[+X[0<R9XVc!C{aG;+' );
define( 'NONCE_SALT',       '.B6QS/80H)_E*d[d)3,:!Zvmb.xKL9a<.3wI1dA3w=IY$qr ]dd*.G7m{;Nx1AN]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
