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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'dw3fy5mdC#0vDoVUk(C~p^%`E4O+<e?y~n/S}q46&.{F39p!6#P59mIxaqAjMoh|' );
define( 'SECURE_AUTH_KEY',  'WiD;d#_o*7b[f!o[BYX9S%DUN(~uuo!j;@9<f)BCSz_e*QZ:%@]6?KnuVeJZWJO$' );
define( 'LOGGED_IN_KEY',    ' gsBfFRD/Fu;r6t%;-+4Mce@(Gc|$-^f~#6Z=Vsa;$#polF-Qdn`y/!&5d*Zc[0D' );
define( 'NONCE_KEY',        'KTGx(8$tIM0li19lAs8-,d8q^nB4~r(;!FgrOEP( 16D4~DlIYT$/%Tr+F=,_H-d' );
define( 'AUTH_SALT',        'cHI7S47=0O]?P^Y~4DZy1%{[xRG?.a,4+1BJ+gnhc2{Kj]SUPzlfHj4aUR0fRAqN' );
define( 'SECURE_AUTH_SALT', '}xAa_XR}pE~/WtQ1S2SB]Z}}(e()?}vlUX%cQmhY#~Hi:R9v9%fKu/$:]tL=6Vp{' );
define( 'LOGGED_IN_SALT',   '!&r %0a`L8%~%Ap!&|VafxL#>H09E;-?.]+-3A3jMM8O:%$>g;VIM*tLDMeLONi2' );
define( 'NONCE_SALT',       ']W:8Vbu+VAG,)i5uSxe6Rt$WjPQlKbqNpA^JyM,Lu!wg.x/CW096KC` Y43L{&H@' );

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
