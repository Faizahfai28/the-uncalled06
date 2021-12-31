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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '#vno[{GbQ|8K[@4D$=w>fA>=IW9;EWt[u+aPGKAk`.5wBNCT.=/z{4zF67[A&.hA' );
define( 'SECURE_AUTH_KEY',  'V),[J?;xtZ!FtUw.n9I0~OukNB^@ne`ZPZa a3ith%(b?t3*QMY=;3XUasNSM0W%' );
define( 'LOGGED_IN_KEY',    ' m]J1@T5?SMHl 3/01TGgoKws;T/c5:J%XF:[s)CP`Bti6Fv*VkhG3Q8:nzg.Xqe' );
define( 'NONCE_KEY',        '(33:jx6e/y]?1K!ORHRjFx4/B424Jv=MG|OAeI%w%53p5y6N@Eb =)t>r>P.w6en' );
define( 'AUTH_SALT',        'z?W:l/*4U.85Vy$-bS|cXYeKx_cVR(>iW#;,Qg/vmbXe!&hQx`u~:6-1C@LFX9J)' );
define( 'SECURE_AUTH_SALT', 'W`1xgAh9/0VYZN|(,^2k}`5uJ2H=F9sS:M9L#2el35`,:6Z0Y|&3Mws>qC7=,#Pq' );
define( 'LOGGED_IN_SALT',   '|]OcBY7x.N|wFNCIKnO}f7.#G?h]eFA=ghgf$RyP{GvczXx{( $QFS64IebM(8zu' );
define( 'NONCE_SALT',       'A&f+O(PntI^PIsTMsL85q%Fm}Mohp{w+>1%}>Rj Z@oZ)X,mWWlIw&%by/=7|Mi>' );

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

define('FS_METHOD' , 'direct');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define( 'UPLOADS', 'wp-content/uploads' );
/** Sets up 'direct' method for wordpress, auto update without ftp */
define('FS_METHOD','direct');
