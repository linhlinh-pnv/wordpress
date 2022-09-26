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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'cv E(99*$LR[;P6AxlD=D#z(`bOlk[YVx,<y:vJYDZ$4}MLi{DBbaR@%;$nYu,wc' );
define( 'SECURE_AUTH_KEY',  'D@zsmiTa0 qVJ6^*11g:=b}c&J/<>|[g[*|c]`<R2_p+]$[?ds.Ru/V[6I:`0W,6' );
define( 'LOGGED_IN_KEY',    '=:]z&~Nz`Q@bJ4731cI4*rISdI/XnVS~.<dWweoMlW;_Rhz$F:GJ.M>a1E!}83tN' );
define( 'NONCE_KEY',        'o$-[/da|p>`GHTfg#3#Ro*+vdJ=gvVE|IfDA?52cOnYSG=tBB8q2HCp>)B3l-$dn' );
define( 'AUTH_SALT',        'aA36jZT_^ 9t6C8Wp]8Yr4H<?3AV2`9hK,We2)ELv6_BW^C/(p%B+=cl0b0hkU(6' );
define( 'SECURE_AUTH_SALT', '.Ej,VWw|zjOP!O9%i $THvc``?n46tG-wg0Iixrl0b9_ke +0`m0^S-7oV~6v}RB' );
define( 'LOGGED_IN_SALT',   'cMo$|SC>nhB|R47##c-&.PE5r%uaVZFNy3BrJ&sl*p[a#~4[*.upnO9SIqtp6{W|' );
define( 'NONCE_SALT',       '9b7M eE$fRrC3A3IC+pDmzds!k$<g9m$!_q=>m.1tsv+5{}E@5r7lbxC_1mXN>=D' );

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
