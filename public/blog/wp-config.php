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
define( 'DB_NAME', 'simplere_wp' );

/** MySQL database username */
define( 'DB_USER', 'simplere_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pR3CWvT9zbpd' );

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
define( 'AUTH_KEY',         '32Cl&kyEYa(CD@97Oi>JEZ(bg!:2=]/0W<0iB<PmmH-,p6e8}YdH;(8oHX]+9}dX' );
define( 'SECURE_AUTH_KEY',  '3(v7/N2r*2$HA-c;Ok[X6UAAx8&nX((@Z9Es&Bz7A#DwMJ*0 Y9v6]8sb<Z=%;*u' );
define( 'LOGGED_IN_KEY',    'M7UcVM#fb@xV0W}jJDh1>~V:&f/UZZf[jB?BC6[~R=kzbS9t~}B{A#fa.y!|>^_w' );
define( 'NONCE_KEY',        '8j9l8r5VIBU=]}K<QU/jo`JY6jx^b<40@xw>FWH&hbiHz%,QW)JxEn1{,1aP~%bW' );
define( 'AUTH_SALT',        '`C>2~5J@Jg<gzO|a7C~<TQmEGzrxL@(pQ`2.@}N6>OX4dvfauf+(|]U4w,A$uoW.' );
define( 'SECURE_AUTH_SALT', 'igDfR|Fi(X95ubwr#9)+g_.5kexiRF~F88l&yg[I<QKDt[Gq:g1A0/pW0qk>4H~@' );
define( 'LOGGED_IN_SALT',   '<](9sR[v(^VM7Qy:6`SpDXqJV!HiV,zKQeL{|$I8E~{K3LtG-6aVK(Kl:%2q%?=3' );
define( 'NONCE_SALT',       '5i r#B{X{r]@D>^oGjR_{.7)TXT*/8E|9#u{EcRK]^0M(h|hVtrsl5ER2gPG{Q[m' );

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
