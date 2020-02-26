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
define( 'DB_NAME', 'braigo' );

/** MySQL database username */
define( 'DB_USER', 'martin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'nd!r:_+t=3>P|s*h/4BrQwK[]/&YWB<4q3!:3>4}X?U ;9`OXF|QQ,aR`gI.B?{6' );
define( 'SECURE_AUTH_KEY',  'KZMeqqnM(.b*S9mBC8E_]!6cV`6J{.-2yM+]Oe6C>tb@n7|=s 13E9iIgJ=5)W[1' );
define( 'LOGGED_IN_KEY',    'cIW,V]JCJ-mQ=;t8bqsfB4n#XW)YMA#E|73j;S^|jlsWrGiU)_6s<.xvlYu0 dG%' );
define( 'NONCE_KEY',        '&k%t5^ea/nit<Pga){t7McnUk[Eu4J=MKxzE4yS^6XF2[B]fF2AjkE{p<wn)FW$-' );
define( 'AUTH_SALT',        '9CU+]f*-Tr@Lvj52WM/q_8oN5]:hW#1@WE6^[C,H$`Gqa%jj84/xu8n5{A3Ggu{X' );
define( 'SECURE_AUTH_SALT', '`8*K5RvRR{Eam,{(xQ:Av/J~-qCm?|tm~Uz %9l2u?sJl&C`M#v=@ab6m%x^cJcV' );
define( 'LOGGED_IN_SALT',   'IajN!)>:?L8.aWS..t0O#kLv$zmwAWAkDJ1IPOtgmnTH?hM!jr,W~vE5oaBcQ4TB' );
define( 'NONCE_SALT',       '7ST6:dc)h:pMXr(xub;~;2mA)zbZFt|f<Rkr,Y:ejVRa&D6:;mz|@Sl_F-+|N/56' );

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
