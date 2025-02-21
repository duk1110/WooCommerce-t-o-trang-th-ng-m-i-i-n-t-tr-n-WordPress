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
define( 'DB_NAME', 'testketnoi' );

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
define( 'AUTH_KEY',         '$;d*LXDBF|x<O]tb1o9ogUyNj[jK7_qGJ)FrMuN8=ya.qO1EYV}/|]Yam+>wNlYx' );
define( 'SECURE_AUTH_KEY',  '<?nC~zL46,h`Dch&PhvtSvJKv3<1o>V.,Vj<@8m^~<zr7k0*CWHMajdv#Oda^ jB' );
define( 'LOGGED_IN_KEY',    'Z_62rfDMus|,f^f^:(-F%nLBJ.EilT3nk{dv}g<S{wtAL<+Ns!tMi4lzIxz#myaD' );
define( 'NONCE_KEY',        'Vt%!}p_KjIO)XUn(B-TmPENu-j1y:X!8Vja#MhK?RP98!mM#j-}QO4cBv(f%ERJ_' );
define( 'AUTH_SALT',        'ULz+_lG}56Ojc GPpAw&T6E>56i>mmOl<SYYn$)RtikdDu4YO2B8[h/@Q`rh6OS9' );
define( 'SECURE_AUTH_SALT', 'Af]/Oo9FZT0E*jG/b88Cesiacqzc,z|3XGN|m+|4(q<@+gI%D&(9/9lug1GW}I_=' );
define( 'LOGGED_IN_SALT',   'enKF@[>xk%12$yvD%E%OrKt)N]ItAmB,-]1raTY]2P%sUjD}B6[,}![%CzgkqJ T' );
define( 'NONCE_SALT',       'v@9[F_&PDGk.*#c)_T;LTyqiR1o#M O56EUW>@NeIS/k2,(|_X. y``<?G.>g:Wc' );

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
