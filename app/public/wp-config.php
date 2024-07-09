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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'R*j!xrBX0kol,(V|@me!+EW=tJMNqKaJbyXJ=)ppa=0nch;qL^-R{J#2iA-LQDJ*' );
define( 'SECURE_AUTH_KEY',   '.>&7kM7b,&gr5ODoPYciNI(`eSGj{)ktiCJ m:zEKETN Ig6geSB=>rV(MMPe7o5' );
define( 'LOGGED_IN_KEY',     'VxA#bl^Jv.FSI`Pr_ltQ|d-,xuQf}%|JFV)BWujD}%lPE$ioRJe~1J,$@+d6 toQ' );
define( 'NONCE_KEY',         '&>R@v_1w+:q,s?SLPB3PMSDPVRt5AagU6HHZh{f`ee>}+tCcy/CZnf.ig8c0Mui6' );
define( 'AUTH_SALT',         'i 8;S07kHqryn![1Bp u^&f^5=U>GK/f9K`er{VVfQ$&e]bQ5,U!ffM/bW:If;i ' );
define( 'SECURE_AUTH_SALT',  '{*%m4xV&!MVLk I%)JE>z>?uCg9{ym-M<*^x`R%HlXUTYO@3fAX,~32~}$=:4EbW' );
define( 'LOGGED_IN_SALT',    ')vSZx_L3$1S&Iu2%sQ0iQ5,!FYcqyeuZZs_Y:e+C^5o]0+;zwPVojTaBFV*B-G0=' );
define( 'NONCE_SALT',        'VB<^My7.Y6 :Iz:6S~r*v#yK>M1D9Dm(Cl$Sq:&Qfrsl{I.QO}2mwyh HK yRdha' );
define( 'WP_CACHE_KEY_SALT', 'D)29[Dq=nQH{_.a:/+`+4;ZFE+uD&eBUGhZw8pP5a8!7~vM]j_:&=G`M/;W|86]c' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
