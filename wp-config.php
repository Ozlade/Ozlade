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
define( 'DB_NAME', 'github_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'uWu~xNwV[iw4l(pj~~)z<Y^8WAJhBFS*&Ea`o8yu=>put5b7GvQ9b5Tchh<Q3Z-)' );
define( 'SECURE_AUTH_KEY',  'k@L#mU,-T1YGx:zzRmyu>_LZ+`6z6JJa?=A0iv4ooeF5>sag`J$DEX#x/3qR`E.0' );
define( 'LOGGED_IN_KEY',    'OURk&B2SO; cZ,19.WYeBRM 4KFnYY;`OoZuS7_>3.koL`Dpkiez7sU_3Nx)63/r' );
define( 'NONCE_KEY',        'Xj0&D{3fwwA&`s@/LM(s/S5!/PRq(J_gNQ-)jY_/^{#q%JJ1.#`N/v+0D^`2=7;x' );
define( 'AUTH_SALT',        ' t!O?hI2m*7lw:Tigo2~^s.])0#g!FooDGRxhR&9/-Uj396r8_b7>}>830>[Nj2l' );
define( 'SECURE_AUTH_SALT', 'qbeBXs6Kw7,>O0rtzP-wsrLedP:/B_[8!<5U5F$/K:EU^F2v7`w@S<qhz@r()tny' );
define( 'LOGGED_IN_SALT',   'y<x156n`SnDKPim|}!?1I?7YsaMASXr6qXfV7V^uyzLEj<VZ?kCEy?``sndh|/ln' );
define( 'NONCE_SALT',       'I~kpWsd-vHO`{J:yr?L* k}CPL%Si@694!6*t*H|8H(`1ACp>62C4b0TgN4E1e0T' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
