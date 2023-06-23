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
define('DB_NAME', 's169849_themebuilder');

/** Database username */
define('DB_USER', 's169849_themebuilder');

/** Database password */
define('DB_PASSWORD', 'Froakiex10');

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
define( 'AUTH_KEY',         '3;GN=46k.uXg/`9mPVSu+)D@BEr&t+*Z&dk!Y;*(BFbj,3cN.XUF&E+(N|;q1u,#' );
define( 'SECURE_AUTH_KEY',  'jB<5Pdsx(acZUUpBt8+F0.dw^W<!C!D!;M(x&vL^Q.yj3iZrHvUP<(Xe1D>l|?va' );
define( 'LOGGED_IN_KEY',    'rUUO@%6%j;QX+!g^Iq>%(K PE%[N|82v@R#Rq(Xa1pCyAQ^_fZ~}8+)*E?Tu-7Gb' );
define( 'NONCE_KEY',        '^pwEAs^`}1V/hgre9HqY|OHM4=<`<mXV 3X&<?Fe<yg~/^_Tx&d}Bma,^tIqJ0#z' );
define( 'AUTH_SALT',        'nQ#,[QcaN4Ye!-n[P1{sa0Fgzxs aFrZvT/FaK3t,yNbI7E&.l~xoFn1U?T}rx?W' );
define( 'SECURE_AUTH_SALT', 'gufiR5+@#}2ZG{2nJqsrgl_+j a)y6|rJ`nb=10B_Rzyi1sjh3^T`)+V?R|7|CY+' );
define( 'LOGGED_IN_SALT',   '_t&Xc,?ru52QhcZccm57tejh#A%J{(-00Vsc)/nZ6UoKhnmO}u@/hp.8!V1AF;ia' );
define( 'NONCE_SALT',       '8&4Q2=KEFc3|*r>;+2b.7O!9hLf?3;w<|_Z]fZ;#%b +t=F^Z9$M%tMtw*u]yEX*' );

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
