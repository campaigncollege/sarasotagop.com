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
define('AUTH_KEY',         'w|62uG-@+-BSW09 A=F~!#V]23-<.5n|W)eH%Z{/l+C+P1R$wHxv>Xg&TVV;|x|~');
define('SECURE_AUTH_KEY',  ']:!rG+3AUD-jfdEP,p+ JWn54ETekN[ztE*a)$&xLb.EE!L5uQI+#a/W:quj+mGw');
define('LOGGED_IN_KEY',    'zR5E^[<^8TV[0.=&GR[X+>+b4Y[kxMi_L+&<.8zx3Jm_xh[Zmm)K/p3u{-,d9yy=');
define('NONCE_KEY',        '@wc;808TQLJ,@tM3p-;(@QoxMA.Se=!J=tD+uShZ#[q<#q$M++kOMt14Ffe9evA,');
define('AUTH_SALT',        'Kg-r Mf6/GwJpb$7-Zx8;b`8<O %9O+Wgw56_$KrA +kTb[K#+^^=rB8Ll)pyUCl');
define('SECURE_AUTH_SALT', 'rZ>(/E`|8NOU&o]1orNp;!N1zll85-3JpM8w#N^^`.7_X*!I*Q*=NTx+Rz=!0(S_');
define('LOGGED_IN_SALT',   'Y!S{#{n#jWP~(f/(2_l=2JqGs-x[>jqc{s9!/eSuRYZ8`/@:Au_ot}&@Y02Y2@0u');
define('NONCE_SALT',       'xhlG,y;m9.O<Kjd$Ih/oQYr0F4NVUkF^.&Tou-}] [zdo(0}h4@q,R|/+Gl7ezbQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gop_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define ('WP_DEBUG', true);
define ( 'WP_AUTO_UPDATE_CORE', true);
define ( 'WP_POST_REVISIONS', false);
define ( 'AUTOSAVE_INTERVAL', 300);
@ini_set ('log_errors','On');
@ini_set ('display_errors','Off');
@ini_set ('error_log','php_error.log');
/**
define ('WP_CACHE', 'true');
*/
define ('EMPTY_TRASH_DAYS', 7);
define ('WP_ALLOW_MULTISITE', 'true' );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
