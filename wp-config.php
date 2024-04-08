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
define( 'AUTH_KEY',         '_{(l8-0=R}lj%^^Wk44IMh^u_HOoJ~khwf2RYGbphsi%W|(Hi(9uB-?Wp:uIm-Ab' );
define( 'SECURE_AUTH_KEY',  'm<i1|<faWG5.D=meX.BLp]P0>_FMIj{BNRMEjO5=#@oylI,k|g+,oB:7~Vw0Spyb' );
define( 'LOGGED_IN_KEY',    'yGKCV0` O5$K8@4(2Ar4I]=ulm}IQU0J,;(+d?1/A9nWzauaG3 2m`ACQh4<V%;f' );
define( 'NONCE_KEY',        'gZu*_,>k]fwoHR{!xnf eeu]J 3N&b>=<9@9tct!:MJ==2d8GQ]=tZA>9l|xqSe)' );
define( 'AUTH_SALT',        '-JV3S^ ^xpmDlB2PETkiK%^>j=>ApV8Yr/F&X;jJGGWX[y;5%zx<k{68x)v)!etR' );
define( 'SECURE_AUTH_SALT', '):XAwS^-}CXBZ>z7]e|Zf:E<i_Uu,?a*=HzC!k6;~K>ARRE3NPG6+eAJe@Kg(eL%' );
define( 'LOGGED_IN_SALT',   '@4`U4n{MlRhfXcJ{tFyoeTW%&U)~!.250Ah9H,?wAlp:]zz>`-!,~rZ-.Zr+VSx=' );
define( 'NONCE_SALT',       'Q}1MI{_d#nIOCF*=k<I!Y~O%qV_P-4h0tDCn#$_oZ[Cp Xo>zx)0B%[JMekgBLrF' );

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
