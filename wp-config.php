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
define('DB_NAME', 'curanipe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LN07qw8A(M5U*#*aKx& kjW)qjV #gd$PyAQ,X2+9JM&N6x*eKmTLmpmN$0qMSLs');
define('SECURE_AUTH_KEY',  'b(N=8(P1OEl@%Y]}vUs_OC-)hvO@E&S/SheLcRX^E@qim-]75GPqc+<DdILj+=}+');
define('LOGGED_IN_KEY',    '*@*K(Z9[d]wnZ>2O+,W7R__/7eUt[KT-A@#oe>1s[h[(VX1a3a[-idz>K>$5e>Vd');
define('NONCE_KEY',        '@6KzE)D96c14BuGhcT]<evbRf4D[p!vc<mNUfN ZOSgH=yb,u<x6VRY7d0SG?oYF');
define('AUTH_SALT',        'T1NK)?(+oOvus$kgCTboxWK;y`&v!^M;^=)D{,(Ek@NK2Xi/ ~5VtRN5/I96Z~z$');
define('SECURE_AUTH_SALT', 'BOr VsOyhO%&L^6Z6WtV&v}a0e9Z:)Hxt#DytaA2D8qqIN DTl0FmjL1X-8DAR~U');
define('LOGGED_IN_SALT',   ']`{+n&<6wefI:,9BlbLkwi{%+n+NW~Y(xF@ycGvd#-%=Dz,BmknkO4;$TSVX-60|');
define('NONCE_SALT',       'rQ8jvU7|_-@!o8HNZ_C^]G&D9M:#&WT7&PCR34zT[),c_uH8qC QR~P:=O7Ke<ON');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
