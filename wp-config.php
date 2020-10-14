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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2ndapplication' );

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
define( 'AUTH_KEY',         'E>0+%m=M%sghPrP;UkQcG|%na;s]f;5Ne]u(Y^4P}agg>2C-WXhB{G1=r;wot1P?' );
define( 'SECURE_AUTH_KEY',  'OUd|ti$-J?:L?kvO4tV3};hiG!AYQ_/ [c=Y[&7qaL0se8hDCfjePYd(bRI1P<^J' );
define( 'LOGGED_IN_KEY',    'QF0mC:Lcq8hAu4}:|6$9k/Rw$BHI,p%WhB1gEh!J4Cz^jFWc.L-lMB.Y2EC3CZ7M' );
define( 'NONCE_KEY',        'r?F,]($lH^L@=5I&ToHd@y`!Kysi^CVlfhnCC/@j}/DJQ_ZmEIzN~U5}835>#/}X' );
define( 'AUTH_SALT',        '3K1`~+8PTK7{dcn}NUKSD(R^4bCP/e^`K,Gt=)#/y4R/79 m5$j(0|&2h]exSA(2' );
define( 'SECURE_AUTH_SALT', '0JNw2vV&}8B2IV!^gQ^/q}S&ScSqT(2j,O>u$0$)RwLk{=M_X}d9LFT+v,.ND`[7' );
define( 'LOGGED_IN_SALT',   'jwZ@!NTn<3iy07S*y@{A-`16*;$6oFzfpAZra!v1vaE:%K,%UeEuOxf&qOR)]R5.' );
define( 'NONCE_SALT',       'W>s5h.S >~.[u%uHg`m}cY ?*tj|Tz3cw`Ep/IX[~J!&N>k<Ig-ST5u1s<d<R;?7' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
