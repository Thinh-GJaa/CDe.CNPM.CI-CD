<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         '&Qi!.3W*7Vi$,9Nht0cr8WbjK/>Wk8-XGrKA~,2->)>A)`j[~]$_Sbsp)fExG5]8' );
define( 'SECURE_AUTH_KEY',  '1t0%ynl&!Z#U=;ApYh IKBTgGu1Xq;RD p>``9ho~L6.0mhG>K3aT0;BXE(%=XS+' );
define( 'LOGGED_IN_KEY',    'N_cH>oPsis3d!.h2i/?e%)`$o;TH-A?]XIMIaCX?ua+_lPu>{/D*QCK*0DPhK1;n' );
define( 'NONCE_KEY',        'j|M]sp#/~>5kAmjre[Sfe(nwl9y% o-i9g}qOH~^nQr&do>|(x5]hj<T34hd}6jE' );
define( 'AUTH_SALT',        ' |J4HbyLfQ@S={9V{1U1g=u:<1hH~XU1J+aqkKAwfMNE3N5`c8Rw_N>N&_Sc@}#.' );
define( 'SECURE_AUTH_SALT', '6}U!R^7Miv.Fdj:yw|+4at5/u6|.eK*kcC8~}F8~Tj_D|Y2!!W. +,!##oflnrm~' );
define( 'LOGGED_IN_SALT',   'Y42o`[~4#$C3!~3EG{[Q~Sou8M}e4HW#.s;nbftgvAe0HdS,`=*TCiNgJ^qaWc+u' );
define( 'NONCE_SALT',       '>7;b6.HtQ]yz-Xst80t{va6T^#{&uP0Cgo]orQG{hg}/7Go)#3/1233Q3k?U).6-' );

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
