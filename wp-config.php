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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'waDV-&jR8<To/Xy_Ev4-{zON&zpN}1;klEGA3VXhA3 ?8@>c 30;`]AAkD[(r1QB' );
define( 'SECURE_AUTH_KEY',  'L6r2lzAd}I$Z>v[AZ}! T85c%,[l-^5gDSisCW?rh88%Ui/RA =n&FZ9B$`(nzTV' );
define( 'LOGGED_IN_KEY',    't|)D-vRsrJqR4[v7%cwj0.2l{B((0V{@J?x!af!m3wt<vsayGuqUb-di~/G#T[r2' );
define( 'NONCE_KEY',        'x>F(~ikl0P>&s+*jK)wh!MwM9AA3[A+uW%+V0LO7fVp78,Q@OBdohAZ0]5t|rXf!' );
define( 'AUTH_SALT',        'r5J{(2p`]!{qn^=%&+o3&Hj<R_<ML_2;D(JYt7~Hy!pq8)8K|?N2Q$#82GF]o?a+' );
define( 'SECURE_AUTH_SALT', 'BOQGc*A`tdb:C`sU2RHWOnr+V6YcR{UErS>{h4H2*#Gholevk_O~84#H=S21uz`O' );
define( 'LOGGED_IN_SALT',   'sH/S&t=kU9e]tVM0C/_>D?`Ug~t>GBHbRV3%&)t}X<^cd;s]_DgH1AVw&h#l19kk' );
define( 'NONCE_SALT',       'R*,z^+tOs,sd#ksL>TnyAiR%^D[*9v1q,6u?RPy_w+nfwp/NWiV|1Ecsr+}{xTkW' );

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
