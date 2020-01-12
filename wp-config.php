<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'welcomemybaby' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '4d_E4&N%E% R*;tj/e&w9idsOs8H}IPYNx@M!r)XF0>^/XLBwwM]>}zxERSp-j~|' );
define( 'SECURE_AUTH_KEY',  'EATB$- iMOP8}t!AOBs^|X/P _OBB)>=e5Z~YF<}|I1<n6f$lz}2k`c2|;zw>_?F' );
define( 'LOGGED_IN_KEY',    ',.<tu3il0~GOeO(]d2U>2hS=_Ktf4&rWkIKH/0=g:WL_{dpc&35#qT+8p9d=@o/~' );
define( 'NONCE_KEY',        'NJuradygRA8>sST;5].!SXyAQHOsbM0h^(5!q`2t9stM`XWs/6cGTU(4uz``d+.g' );
define( 'AUTH_SALT',        '@P&xc8Wfqc9</SKo(0]`H6&q*[|do5$Ya(M,#5Oiuu;!5Qlb/pUhqskIQwrOuyZ2' );
define( 'SECURE_AUTH_SALT', 'ZR4(!|ExF>im&03x~CzWVLI@eW2RC;q^T2[[YIvz/b}Y~M3K_.m,nN/>Sa]Gsh>3' );
define( 'LOGGED_IN_SALT',   '(?#y.uz0t4)|7yr!+Mix-d0.c!,PL7Yqv%]>}qEY}(|w6:T2#AyAWBS=0nFN3coC' );
define( 'NONCE_SALT',       '2;)f*|IL+[6$<hH7~QpP-CPyh(T/:Cfi$`Rz%{n|L-egqQE-#49%S|[r_^]5mY5c' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'baby_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
