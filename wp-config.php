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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_praveen' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Root@123' );

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
define( 'AUTH_KEY',         '4&6In&7|Wxuf=l^Id`j{L{pIf-t{*dt;mFrKt:7kk[Z;PIu1|;0?c.9MOw25vEtw' );
define( 'SECURE_AUTH_KEY',  'vr9Hs9wY6p7!n%!j+CVCiw+Xjcy7.p*RB!= bP  d@&2]=QUhj1}gaCnEc*$ZaL[' );
define( 'LOGGED_IN_KEY',    '~!xZfvJ;HfC=c(+_QfV#e]M|S5h^oQ9Z&8{[K-H-<C-6iQjvN3o9n-c8jwpf~N+@' );
define( 'NONCE_KEY',        'O)Ew9<ezd5}yhctnKiPbGkOMsIFw&-}axN!V#Z)Y7_0)eGSv}zVG4{]jVp%3[-ZT' );
define( 'AUTH_SALT',        'N63~u<+du}*I|kvf]9=z+@T3;;,9[;v7y&azvz,1A;R_! vr:/N7r1<z_>]f3kB~' );
define( 'SECURE_AUTH_SALT', '&RZ72A}T-j7,Zvc)_xl/+lZyDOAbn0Epdv`bbIWoT5-$F,C6~qel:AtVGRngg+5X' );
define( 'LOGGED_IN_SALT',   'chnf:nrkMig[&)ZFc8Wive*m0!_nug>bzE5rmnIO8(gEz 2hB!3I}7?EVN IWI%u' );
define( 'NONCE_SALT',       '$T4,1EK-/bw+tl=vWS?*%dOwW{,rJf7UX?AAum#jC3bX11`sV22~7Z^qVfL{/m`#' );

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

define( 'FS_METHOD', 'direct' ); #praveen

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';