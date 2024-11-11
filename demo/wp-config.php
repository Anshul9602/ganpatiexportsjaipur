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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'webuser_ksp');

/** MySQL database username */
define('DB_USER', 'webuser_kss');

/** MySQL database password */
define('DB_PASSWORD', 'VD2e#LPkP{qz]WK:');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dPZwKVbiz;(Yc;q5Pdb|?l+Vq{v5:u) hE@Ur/;v^Bsso.Su2#&a%Yz)zX<R#X[.');
define('SECURE_AUTH_KEY',  '-d[EYz=~`kx85DIQCt:Y{KKonf_A+rn@{RSA>KqoUJ8>zkZQsMM5$)j~1A@1B.A1');
define('LOGGED_IN_KEY',    '(s512bw!G-i,!p0!A;BQsK[NEqadotY*Jj{IW?`3at^xQ]*~ZM}E&0,a]R)nD:m>');
define('NONCE_KEY',        '7=YB~. x~.r*ZgB;ej{ygbM%I]Kh{w[TJQy}wun,PDX-J`w7w|w*V;nB9 :}OTR,');
define('AUTH_SALT',        'r-w]g][h r?CV/Xu Bl4E-rsuHI3 #V|0-)30zi~%hels6;1SVS=]ykCHsH<G%9c');
define('SECURE_AUTH_SALT', 'MxiIj{5UG?m)%J(|c%X|RTL28j]2rH<EOp}Qqqxju M.,9d{QT>btgsFjT(*ZF~z');
define('LOGGED_IN_SALT',   'PCi+3~u2ei 1CX67t!1Lc)G:TASZ&S] ,8>0x~a]Y{kW96| mXPS+*#yOG.<-}@s');
define('NONCE_SALT',       'L.Q?.fFgkhLg3/)@JijV-,YvI^`)>aJEoHm@{W<pd--SzMexppUe>Tt[?M%J:dDJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ksp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
