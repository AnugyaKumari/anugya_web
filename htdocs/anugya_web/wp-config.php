<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'anugy_web' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Fc}rmOB+(74>Z{w.h!ML6@ck/@Hqodi-Swxd@<^yL`0+M`fK+L0e3|jjc(=Q?z=f' );
define( 'SECURE_AUTH_KEY',  ' xXudRLM!aa-=h18 (>L[3Wnc-_#so3i?kSDp;o[fCveg~UK|h-p03|!odh<>KT]' );
define( 'LOGGED_IN_KEY',    'CvUs/lS=ck ~(AE.KP[IS#SHx&aL9#4oHxJi(]0o/gzQ|IP3};zq,r_)ZU=VoLf*' );
define( 'NONCE_KEY',        '*VP9O+%({23s(~cl}X]ABM)_=|i/5$@.q]Y6Q6Shu(2WFC+:a_|JoojYjs>!]1u>' );
define( 'AUTH_SALT',        'NaYPX?5O#k!Srpf=mv<8Hu.VgL/+}OZ|qto6;BFk. 4lzWEY{#d17Ed0/tt1hFV)' );
define( 'SECURE_AUTH_SALT', 'r cglyH#RBA[k;bhKpThz:-7d;>?(md0l(&&8#<8w9$O&O+fp>3 WEgyqx$mHaQ4' );
define( 'LOGGED_IN_SALT',   'QA6pZZNT3,d;]a;sX.L(,c)85zoU,nvUU2?48h%Rmi)Lp_Z@VHU/Pf/zH5ki?xN5' );
define( 'NONCE_SALT',       'Q#g-JfKa@jElne(mwJZwFl_Ntn5,_yzuIw%#BwXRxX $[_fTcI}7$6NB{FbENl#d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
