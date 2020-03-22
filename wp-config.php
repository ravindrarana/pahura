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
define( 'DB_NAME', 'pahura' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'whoami' );

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
define( 'AUTH_KEY',         'l8`,/fy**f2hi%*u:qSgV*i`*x!s&>;FRI6>EZzOdK1Kd-A|i:6jJY)bpx=/->`t' );
define( 'SECURE_AUTH_KEY',  '9w%`pg@|=u ( qDSC}>My&XoCQp=d$sWWo?;@S.i^L$|O:}wL)h`S&OdV]q7@okg' );
define( 'LOGGED_IN_KEY',    'XA:d{8eu@h,]CYm*eR@Axt^x0#N0r>?gV|Py(P3ALe7= 3k&,8.r+W4HiY@n=ldi' );
define( 'NONCE_KEY',        '~)N8!EGW0<KDn}dc]mF`XDcpAljh9>uKL6Umt:bA;;PkH!3HHvMHUTT{DDG|b7f1' );
define( 'AUTH_SALT',        '3mIFhvu#3Y)6pCs7U9b9tBiXBs47TtA3b?ulE2M!8xK7#=4(U;0BZ/p](QF)Ef+B' );
define( 'SECURE_AUTH_SALT', 'U*lWXRy-*]hBb=PvEl3{/c:|,3$1U~+]B9U]G<?Ih-KMf;mpH<Fjumw,wImv8>M;' );
define( 'LOGGED_IN_SALT',   '+i RK@>atfNx)e*u$>lMQOUoHbJ(X}}=~8gzRs9s# `[Fe>!fD1QW:![bVjuN52V' );
define( 'NONCE_SALT',       '?>dsoh~*V&9>+c4JTOIX4Q-e/TO7t9I7](e2xt6vU$$W/()]z|EW0%G99} TiUh*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ph_';

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
