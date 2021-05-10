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
define( 'DB_NAME', 'db_jac-motors' );

/** MySQL database username */
define( 'DB_USER', 'adminwecan' );

/** MySQL database password */
define( 'DB_PASSWORD', '_*8gTYWqM9FHU' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', direct );


define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '159.89.229.55');
define('PATH_CURRENT_SITE', '/Jac-motors/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[-OWYW6+ G%1|_R+?j%w6aRp>G5j;|ot~o+@q,9zD+aksDnrDgmn>yh4Ee9!fmd~' );
define( 'SECURE_AUTH_KEY',  ':[clf|j=FQ%1N%S.!iH-oXrlXz0OJO2VQL8nfBlVuc[t;f$PZf:.M-*G`X<JfO#H' );
define( 'LOGGED_IN_KEY',    '/)IO03Di(FG-x8:qr8c>)/*$9i{]wh&0nRTO<Zhfx&4//e.hQTr0=<{i3N=q,^0S' );
define( 'NONCE_KEY',        '%06sf~!W%Ji(lI.JkUoMK36r*_e G~H{wohF9@n{V)w)1]^vk0_LCeh+.e|5%9:m' );
define( 'AUTH_SALT',        '(ms9V0geHYkhY_x`X}R=xGrth!CnbPLWV5eR)?+4(er-tOfYH$|`TaA/Jd,8n=lZ' );
define( 'SECURE_AUTH_SALT', '+k/vV]tDZaeWZys*v<h6=`T3N$7)xp$U?+ j{Os[Bd7bA]MA]T]EWggkR%]#$m{N' );
define( 'LOGGED_IN_SALT',   'Z gG5D7[(&,Y`!Xwv<lIS_Pf(4mn>LY?%_Dc?H#WR09>jl/%G aaQCx$|>%%q.kY' );
define( 'NONCE_SALT',       '%5`m^<bRsKV.h{u(FwYzuV57]4wqsiU.jA{g+O^>U9 {9&kyue[,FrWa{X~mGVQJ' );

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


define( 'WP_ALLOW_MULTISITE', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
