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
define( 'DB_NAME', 'wordpressagustina' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'f|d1F Fd,[t#1%2wL;gL%}bO8yIoD8KR[WLqufo#Da5{E@{vZOG0&,;V_tp!Mb*!' );
define( 'SECURE_AUTH_KEY',  'cN+z_G=Crx!F/&Q+WkP!@J$,$z8~Ozygza-!*&$9VAXF,[?.l(aMa72e|4AhVOzu' );
define( 'LOGGED_IN_KEY',    'vuVSm|[ *T,%Qm]`)jfsgrn,ZBQ*3UN15iBq]QaIKtP!Arzn]knaf|)%<zUEe/Wa' );
define( 'NONCE_KEY',        '>]^;%`pR{7b?Sz:/ZP}q>hxqTjNVQa8xl)G T]P4b<s7!Qz1lU{Mr}{znF{>/Gs(' );
define( 'AUTH_SALT',        '3easDlfJCe#H4#[5x{VlUR r@79 E?+7MVZLSr~t%)SA)k(b2-L-feiIa}>sJL>U' );
define( 'SECURE_AUTH_SALT', 'FXY3K _AL+VgYMHU<o`_L:_^A`P/..P/~Wd~6_y7hsNO|?RL<%}iv`IE%eg[2t_#' );
define( 'LOGGED_IN_SALT',   '.1Q:~P8o6&=ZtB%xzP~Y(Ce-H0N@24FQq/26qm4=hO`,,5nbcTScw$|j*/J>UzUL' );
define( 'NONCE_SALT',       '|EX!Pr6*:atX_RhJe+dt0r?1N$t*kKsBUgLJ64-lv5X2?+:/VKJhW?ul3aX>N}mb' );

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
