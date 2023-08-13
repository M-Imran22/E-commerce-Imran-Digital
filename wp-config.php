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
define( 'AUTH_KEY',         'T(2sPJ]DkS6#7wFhaI6;)Nct:]sU383ODXr]6:7+f]gh*H*d,)Qa@cIisC IzJKX' );
define( 'SECURE_AUTH_KEY',  ':h.{BWyTv8^S,;?K<:B(UEZ$~|Yy&b3`i<[?[+d^r38}@qf.=b^}}x&|nF.OJr%X' );
define( 'LOGGED_IN_KEY',    'C!.0aOY$^jqmC7KSPN55Vkz84u2Y]{-NBxqjR^Ce#_dwQ_K%Y[lSP2s<e1Y{td;`' );
define( 'NONCE_KEY',        'OM*8:{cPfvtOjUckAx0-yU=$Idyk(Oru8k?]5}geHioDipM-Q]M#DMIk] P2P <Y' );
define( 'AUTH_SALT',        'I:Li>f!x@_N3h[_Sn8s2Jnrz)U)]z}rXd%VuS1P!,3TE?*gHtSgr^cr^2N-m20)F' );
define( 'SECURE_AUTH_SALT', 'MRgX/vU|w4w)p{&z?cL8hIk)t>|o=s34MN3t.l+0]%2o@CkM wrwn&HZ#>[S2x-a' );
define( 'LOGGED_IN_SALT',   '{JIa,y/#t,vIO=I3!2|zQoYMeP_yjam>SF6FPP;8p^QNaqe}*l~CwLu{c*68C[Dc' );
define( 'NONCE_SALT',       's;UR#e/J%6!WQ|DR^:ID$ie]|5MRJz0w1w~<)4D-DJ Ri(++;f0P,s?JN_`/x.[0' );

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
