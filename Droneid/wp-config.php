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
define( 'DB_NAME', 'droneid' );

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
define( 'AUTH_KEY',         '=OlDnnjP*=wfl:-3r%dbV^F(/7H*#VOr2Chj4i0+9[wZuWtF*(3[l#YyG6Tl9B(?' );
define( 'SECURE_AUTH_KEY',  '/9}8CH_aIv;5}_+A1U~D3>s<[D3d+GLacEaxCfd]b6{w0jhmDTSRz6`#UnfW2TI ' );
define( 'LOGGED_IN_KEY',    'uz(=mWWGb,F5P6mcyZE7b;|CUHTb5uef}?di;R7|TX5g,c]c?O:KSzXLs6Q<1vpo' );
define( 'NONCE_KEY',        '-RPGy$|ws|ASL@+Mm83`e$5ojBM/A4Oz]?31Z#w<H]q;>orE-9V>d9QUjG+dbB6C' );
define( 'AUTH_SALT',        ':(Sfei?shhLk-B$qd{`ns/M..)!K|KXV)!mh@Tu_l/+FUy[4)pG?Ca0el{1te[[*' );
define( 'SECURE_AUTH_SALT', 'pF*]?*/au{gp{5v#C<PRQ%asZL+q%+pB/.:3rDA]Yw.jaRx{T8Hch>L6PPY.U8~{' );
define( 'LOGGED_IN_SALT',   '8E.X)v?OA+sw L+0vCVmJ:$CBSrD;%#v/YfGk]U}fGD~][d{}dX#W!`n+iDxyXUo' );
define( 'NONCE_SALT',       'QDEPTPh<`yNyC;>Xfxif9^zEADTa56pB=%,r;ty}1s`b%lZG9ix>J6~;d&fnyF?!' );

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
