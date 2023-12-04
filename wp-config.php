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
define( 'DB_NAME', 'base' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '192.168.1.123' );

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
define( 'AUTH_KEY',         '*REe=P(!b6}@=0umNS~lF<3q+2]r~JVaZ&u^$UI8`>bwWo<]bLf.]]m?UW@;EpIh' );
define( 'SECURE_AUTH_KEY',  'L)(2HD_]65od=::`:Owm59!>XPf02=&9B*5GO05NAg{sJ=n$T ZU!)2t^Yb-^t,(' );
define( 'LOGGED_IN_KEY',    '=Cp~Jj@xGbk/i<~V/vW>dzhWfmM*VTdK6gA*BJ#Ab^`2)=j;-J.7g.HJ2<7j C`F' );
define( 'NONCE_KEY',        'H UYEkTu?+uP%V5iRVyajYs6oK6d-9~kNO~LDm<i#|h2J{<vYYNPt):7|BInQK8`' );
define( 'AUTH_SALT',        'R-|X+oil04Rdox,9E Ad$^a#Q2r|8i)4@kH;gOV8H%}c(p1,66d-,E[OsL+UMW[g' );
define( 'SECURE_AUTH_SALT', 'ntmXNRe{?@b#jD:ZY>%E3k~7V!g_B7cf=|j(#mwi:|;yos#5X$%V5z=Xl,M}v5ke' );
define( 'LOGGED_IN_SALT',   'ZD_yAZU$5CuUk,eA|@8J9BR03<3$t,!XTakfI0ulIo5HFgtwaZ8?Qkdu9P-QTLsm' );
define( 'NONCE_SALT',       'Q~u^}TY?qo:;bPKlXZy#m~d`nBOCecw`COE8jPaYxZjwaSCW%X_4<XNz[0AV-e,2' );

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
