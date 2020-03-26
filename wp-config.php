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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webcode-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '2h@2iRUJ/g;zL 4^427yWBJ{h<:.J&^6[HYlF r<CglcVs9*925SNK:)2YS8WDdX' );
define( 'SECURE_AUTH_KEY',  'mxiHmf=/jw4f^hfy=up:m1gO0};m*{3=]^*gI,xHR!%TMd}YJb5?3V!!166(()@A' );
define( 'LOGGED_IN_KEY',    'Y/yNJ=?B_n>gs}:CL)%R|owwFsKn%n^ 0A*cD[ab.3aO+uMGW?_Py6Cxa:-)Zyoz' );
define( 'NONCE_KEY',        'v4@S#}1)Hl`mI[46m6xA6q9Tt*R PVhMv:khF5HY *X!j>,b.?HFeUITMui#@dzA' );
define( 'AUTH_SALT',        'Rz{Wz<{b2UAL>fj;qr;z!`( r<;5Xw(z*,CuT=CRwf:uQA5TvsO5M%S.Hx)dSrpg' );
define( 'SECURE_AUTH_SALT', '.5L=j$Gr Mtz)6e&b`d!7{RN0`j/7:bdoM?.]:eK|X@CpJ4+`1MK/LZG,Q{hEvcO' );
define( 'LOGGED_IN_SALT',   '7&ntO23w(^DyK@<<dFHYPGkIFrjJjOTd/Urkj*+yI]#1z[sO>Pe@FFPY-w|-tfF7' );
define( 'NONCE_SALT',       '}VEBcvaWR|P.wrL[;|[j,2{D+4w!a9GbzV9yL[!cPKu#U?M^z),^-2MiJ*0l~)U[' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
