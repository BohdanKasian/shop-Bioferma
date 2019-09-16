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
define( 'DB_NAME', 'wp_bio-ferma' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'mybioferma.com' );

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
define( 'AUTH_KEY',         '_E+_X^04Vt3NL(l0K0dGq3|*Z80AkUO:j TK&YcoAEUe},=S8WLsJ<*hE1>xTqv)' );
define( 'SECURE_AUTH_KEY',  'GBstt;-[>CI)S@A?S_nDkrz&,.)3CZ?=+>?z)_ wJWP!ABpw68Gtmwhjry)>b,[E' );
define( 'LOGGED_IN_KEY',    'gj_);H0|vloG<o*j9W,?jfa,buixqb%~b&*?]pwW,4O042*u4pzq6{zBr-%|t-C}' );
define( 'NONCE_KEY',        '|jp3L:Ey5k/_$bsUT7+0sYDNg21HH{I32zT#A@FQFR`{0}Ggv-ugG.ZSGgSYaU/Q' );
define( 'AUTH_SALT',        'Py YJS;*mLfXvkix}$b2;xMjnA1]4R^k7fi$?`%h5[<1ByRQ}%3KRnfaYsbt4Fp>' );
define( 'SECURE_AUTH_SALT', '~G}1e!4uxf-o+H<)2JrlBq?fdbE`)WE(M./U{&%Dp$^De?5SOwD*5Va?1m< <%3p' );
define( 'LOGGED_IN_SALT',   '0lY(l9}NLQ:!-N6H8xXIV*ZcXAHDl-5^<f=.@aG&?$/1GNiGN?{|xLh+`j/APf+~' );
define( 'NONCE_SALT',       '8.uM}MUUAlB,pgl_seHYd{LSOQD;2$n>^D72b%]+A>g<<P3C.zk!IYh%>CV>S6d4' );

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
define( 'WP_DEBUG', true );

//define('RELOCATE',true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
