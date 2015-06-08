<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gop');

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
define('AUTH_KEY',         'Tyn6Vqt<b1fW_|P XqVpB){Vs#<q. S/;IzVl= mB6,Puxn!:*3ydP,k>=-p>8r#');
define('SECURE_AUTH_KEY',  'zR@*GM>F`5^OL<ptq7bC|)(y{_Rm:$-hF+gN,$G4+6yOOfmxv_o$5LG%|a9;ArSd');
define('LOGGED_IN_KEY',    '<{8>0c79~BFuCb9f;F,q^Ioo+P+%ttyrUv:KB$OS|n1Z +b lyLpTbUH9(~q}oLQ');
define('NONCE_KEY',        '1V2`x1Iop0Wgehl6W:QB=Z{ys15(VLAfL~R[~G?+-pJ8L%J!L-;.HrK#a/`ERWry');
define('AUTH_SALT',        '8K>i=APCL&WbTE4d}s!k+W+rL1!2Ds2:JExG^:j+3i6u6{v:}=yCM;&!LHkr-0[i');
define('SECURE_AUTH_SALT', 'i%,JzA[f}cm-I,Z-}rYOoi4->~#EgCNb;<c{ZQ|q74iw/;3lM y3hOPt z-s%4P-');
define('LOGGED_IN_SALT',   'yv3-O+M+-5>QiI*_;H,`Aut1k|.!3rV9Ly=L}MX5.ISq38+cDd^EATeK|s^AQA[C');
define('NONCE_SALT',       '+}]~l-Ntp-%;T[W!4-0mP>3IAO_GvAqGuq@POIug-))IMW}G(.a98Bz3}?omeQbC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
