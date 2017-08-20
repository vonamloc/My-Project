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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'G*$f:E=cs`CY7T?,^RwB+I}r?E]VO^<3ek=U1<]wwl#QTN&jE,070!<>;M9&WZ$A');
define('SECURE_AUTH_KEY',  '<&.wE<z6/I((z +-mb!yCYOjI)MwLMEC ;)d Ej>_oyy9!5B&7MAp5J~B#9r#5Tj');
define('LOGGED_IN_KEY',    'F=MXp?TDEB13Ys<DP2`+nU?a=pZ#%L[HbHcF(a4@>E_7I}jaxb*u`cs8 <b5F|%j');
define('NONCE_KEY',        'wTW!v6`=?3h`r0>=t:bYQDr,^nG7+Fcx=Q@&O%[%@[L9g=.f`-$0Pp~(#ptA<K-l');
define('AUTH_SALT',        ')Kk,#Xo-?&RUB#gj?X6sP5_YuI8,0^S?xpzd76Sd dD)^HCh|60rX_x&,$OS<kh:');
define('SECURE_AUTH_SALT', '2pr#`9]GmIHZ<%0&bF1Rk5lj{H{va.xzMeZx1 p&8W(./UE0lu#l92W:)d_Boyg&');
define('LOGGED_IN_SALT',   'CTYS>1DMSoVt?x8Wm]d=niaPvOx7b3fKB(sup($vZ.DUw-w2E`i`4eJMby74!U#B');
define('NONCE_SALT',       '_lsHD.wh Z/t8TXjN$$x#P_mYU2lJF @.s&h%;p8C]!@{LHgy7jG^;#S0m(j>/6#');

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
