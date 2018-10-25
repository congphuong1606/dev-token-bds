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
define('DB_NAME', 'tokenbds');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '6ffff33c3964f8da3');

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
define('AUTH_KEY',         'C);|*M`N ikqk[}27{1;>&Ax*iw*w]Y&h1F=-~!.8f?R6@BXE+KpDLmfB;h},2}j');
define('SECURE_AUTH_KEY',  '&SG?}w H_6kd@]4$-uu [Xq$jhA}(Wtg3Zh_}Sq/6IL QR0ljdFG{5K#3KQ!Q4o(');
define('LOGGED_IN_KEY',    'U?-qLk$_8@M8d>b]4>sd`}/L[pf*A1dr]jBmScyaT8`4t}N{_JunKQ^3y.ugu7Z^');
define('NONCE_KEY',        '-[VUap]W73y[%;aoWp2~MjZ}#%b!-E%N/)UXT,NP9}MvP6N2kQUK$XSe]r`aCOv;');
define('AUTH_SALT',        'PNm2z1yPUFd|yS9ccV!gwZ?gH*9zMzI?JD(=E5%bxA]bTD4|#eLt5SPz(.<X$R1E');
define('SECURE_AUTH_SALT', 'dxAsT<#ad$OF6rqInu[CLP.kE;.#xq=Ig)h<..NmgU|ncYir;{ &9$31i[~gM[at');
define('LOGGED_IN_SALT',   'lIQ5A[Dz1]`V0F.x/0O@P_gjSM%Oi<O*AO8=nC v4u>Gv*>1!6!&bmoq3rXo,g8m');
define('NONCE_SALT',       'LN75@T)PPksirRgT}~:dczw^H3-ygp8%4r1>mQ^2B(pZr(#i7c4GFe5A Y]a{]ph');

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
