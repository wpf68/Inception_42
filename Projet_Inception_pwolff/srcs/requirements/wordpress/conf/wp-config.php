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
define( 'DB_NAME', getenv("DB_NAME") );

/** Database username */
define( 'DB_USER', getenv("DB_USER_NAME") );

/** Database password */
define( 'DB_PASSWORD', getenv("DB_USER_PWD") );

/** Database hostname */
define( 'DB_HOST', getenv("DB_SERVER"));

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


// https://wordpress.org/support/article/installing-wordpress-in-your-language/
define ('WPLANG', 'fr_FR');

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
 define('AUTH_KEY',         'QOOyYvDVRSq?4;2_.96s=iLR +KqL>yT.62eG<R3c|T`#&WZ|n=Zf|-~lM$fz5@s');
 define('SECURE_AUTH_KEY',  'G-+.|UvCv5@<OmKlFL}HU+R6:*r>qf[oONVyNS;q-Es 9-Lk0.Ho&wHD--tFTi/I');
 define('LOGGED_IN_KEY',    'oWI?tUcME{.p@cl,4lMstEJMhv+y`Dz0=T4KAX}b&#|I@ZNcq&jgRX>7 &0:,w`B');
 define('NONCE_KEY',        'P};{Vib~0?;U2ej]K$;{1LnQK{HqDh_u&(yzu2aE:HFyxZ/GM/N9Vh8|bor/`!Ll');
 define('AUTH_SALT',        'D-c0|c>g^:ZB;I1rS y+@r@hlU`g:+}E&dJdyn]anM${A)o8P5vp+]qs@nP+fi+7');
 define('SECURE_AUTH_SALT', '`w^!G}%n#vgaX6ut(|s/S0XR9R)OW`!E@c)Q=E:$EpxWs|S7eOL+ZuvZIBlUOD+Z');
 define('LOGGED_IN_SALT',   '7~z_)v9V:=jnTTELFm-.+1+,/,^{jBUQSb#9[e(Vs.:EgNYbTnQ9XhM/Q~ZK#y)n');
 define('NONCE_SALT',       '!3$P.d6Y^7WTkONvvJ?d=@;7a#G>%.IPVdT_RID;LyKJo.i0J[oa:JqUupB(6^|(');


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
