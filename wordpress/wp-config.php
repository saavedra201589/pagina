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
define( 'DB_NAME', 'tema' );

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
define( 'AUTH_KEY',         'jaP#|uS}A 2YtJ_`LE,gyu[.<Df#7Ekyr[[Oi(?030v]etHjY))Tff]D00qsTE (' );
define( 'SECURE_AUTH_KEY',  'RF-&5`Q&>r72sFR.KM+9G$p,2f]u{%fuxR7OqF{#VuN6U*WAq|{(+0X>XnqlPU3t' );
define( 'LOGGED_IN_KEY',    '`U=@>k1G_s+W.~o%~P/1GPRba DR^2W^mP:?Q}Oq~90LZZGYC V{| P}sfdlqKrm' );
define( 'NONCE_KEY',        '7([D(C_|a9|VBYa<;RW)CHA2/E1Q:;PK.*3x,k+P}%#Zm:#W3|{?<mF;M- #5+-8' );
define( 'AUTH_SALT',        'zn)qz*SV< }~GM7jqC&P3YO 3+!Dfo0dq%|[nYH;TO]nfp<<nV0io9F(T#/{r:/+' );
define( 'SECURE_AUTH_SALT', ')a</V2Mg`GWA<G03.] r9MrHG=1SCpK7]5<hZ?/v#S;@,QGbXNa{T~]sxFginpD%' );
define( 'LOGGED_IN_SALT',   'HVG~785eMM-Js6pZBT=oM<ax6.[z_*|EPK`2*c{7L0MAul;[p;?:/@+FEuS2v=QS' );
define( 'NONCE_SALT',       '2<W:}VL584w9K<R#~%q#]s`IjiQF`9Q8CyT^<d%no`E/JUav,.<8gCmK@LnHAJg*' );

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
