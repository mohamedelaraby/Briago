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
define('AUTH_KEY',         'q7-NtLX:b<NhCMU#A~h@[vkw0)ed6ckuMgk5xrb}92N6yHaI3G7E~2q;oQ}s{%r?');
define('SECURE_AUTH_KEY',  'K_RE|x9aaFk.zB:-0XLN<~sof_?|RYAa:?]_}V&)22]7yl0kbKYs`m3n^v?|`myF');
define('LOGGED_IN_KEY',    'Zypv@%aax--BP;6)kU+w<U5Dg4#b?Hl+U-;gHEoTpI|:f/ar q:PN}+HE;(/QdH-');
define('NONCE_KEY',        ',Qhv;W`v2|d~Y;>`2::#=+++sQb`aO5Urg<Z}u9ry[&Iq}C92 b>-`WGbk#7c|QE');
define('AUTH_SALT',        '5Kmc/HE3#O$O|&}oS(GxExJ*N||xfRKdHJ2;!D4C+-fSDbKa<A_q-`|L^vQji$)|');
define('SECURE_AUTH_SALT', 'L4V;Eb.=EWI@h9]BMc<XDgIp]W  R1djW?KkUWiM@DjF|. dr<pD^156MT[GM8<`');
define('LOGGED_IN_SALT',   'l?t5ln_p]e;]jPcb`+TQ#m^;#545v|&O`0H!3et.$r687rNx/{/wA:pJ|`o8Az(3');
define('NONCE_SALT',       '#(}P5_W;yvT}a;~(.kDU|EDO}TG7IALig nk2VhXk#<@+Kju*d8|n)v@q gO>Wnh');

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
