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
define( 'AUTH_KEY',         'RmU1gHv^.aHc^:@]2N{4:dDew8Yq*Uik5*,zbm-c)u}#-9BCIUB-X)Ubfb5yL+V/' );
define( 'SECURE_AUTH_KEY',  'Fs9MJ*j>x& oZab]?Fk*sSq!HH5vgoI_(r;K&r8rdGW=/gkila+6O}S9r^$.*~0o' );
define( 'LOGGED_IN_KEY',    '[mNz=uASzY8D7YN4ga(my&&63684Dq73YNt# PP/~?qAX$!H)0gZ?f`5Xq-[b33`' );
define( 'NONCE_KEY',        '6~b#CA[^|7j8;jUq3dC`-:C4U>Fh{.O;6?IVAEi=Cb#OzLE75WDsy.ovID#4`kg6' );
define( 'AUTH_SALT',        '7#w# +97 -5,wi?B)2U7*p.f,r0Y#iXAnl@)T6xv2=!iby?T;%L[ZI?l!;q!h.zx' );
define( 'SECURE_AUTH_SALT', '#(Wh8,}]C_*8!K^;y|Hg u-p&XEHLZ_+VMG4cHGi(2tuA%Na2QK@cGnxgPn52FT<' );
define( 'LOGGED_IN_SALT',   'gn;L%FF=oS&sR]CaKt!352urLvAA]JD$Ld0u2{ZWrVR!RM?UISnKmneQ,Rm8&R.g' );
define( 'NONCE_SALT',       'icE_%c6|oP239?z8~|Ro]&D3uztjy(R,&HgeVx>TlUQ7!#Zzm&1-bnWyrHx*]+h%' );

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
