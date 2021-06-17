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
define( 'DB_NAME', 'wp_dev_test1' );

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
define( 'AUTH_KEY',         'ODDh~pb/|cURBRT&Q|fpdkZDQdFRo(<=x7Vc=E(ZnS<lMv&3|5fw3_hIzw?rSFDP' );
define( 'SECURE_AUTH_KEY',  '#f9:K<3k75c+}weHC9zl(PAUN)6?a0lN>/:Uw/2o~s={?r]%s=um782}htgd-CB_' );
define( 'LOGGED_IN_KEY',    'lZo.J^{wr6_*~6ifGJ>O]k18V^9VKd#V]+m}$Zrp{Db XTMOC|83gHS-g_wYeAAU' );
define( 'NONCE_KEY',        'H2Nk~u]~N4f5$C/gL9<BEn*B{{8odgyI~HK_>UEj/M*n4Z6ox}DUUo/mO2&(AuBw' );
define( 'AUTH_SALT',        'KsQ):R7r{g wl1lQm}b%*WG|W7LV*krTjOk+nZ9.ImdB2nN-G_xGX$f~B_ko?-F@' );
define( 'SECURE_AUTH_SALT', ' Bm 6D=C>>OYB.&}.x].Ib>9?gE<VLavfu^E6`!~2,!4rj2Y;DMvwaVw.;hzzXxM' );
define( 'LOGGED_IN_SALT',   's@Wc(0&m|m<r6qo,L@G{C,Yd*&};5~jAUBNcRzdK~PqZg@&@yp?zBFTQ>Fm}b7cW' );
define( 'NONCE_SALT',       '!S}(7S<a9baTbx1*^WSnw>-wzke}h1 P?Ch.KT+&R<^PW&`b=ziV*mhy6&)Wmb=d' );

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
