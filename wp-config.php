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
define('DB_NAME', 'elo062Wordpress');

/** MySQL database username */
define('DB_USER', 'elo062');

/** MySQL database password */
define('DB_PASSWORD', 'elo06216572000');

/** MySQL hostname */
define('DB_HOST', '51.255.196.206');

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
define('AUTH_KEY',         'd>&7d8Zp>Ohc-Y{)~aW_.%=3;i<2r$[Y7@kcu&!<yuO%3fT)wa!P!.KU}o#9eG$O');
define('SECURE_AUTH_KEY',  'uyn39i!#$)j&u)#rPOt@RuX{,Pfi*8t %[`#)} }9TjTy>lo*#CRl>*il.P_5G+!');
define('LOGGED_IN_KEY',    '(Xr/y+:;y5bXL*)-Z=jT$vE1Xo`jl,**X88(Nr`00v7sv0Bg~1Ite5%CuiXBrS5T');
define('NONCE_KEY',        '.z(Yoc08N:nw&^FiKI(lWE4E-)hpkC&sK!ch1b1J*+[OGcMF_Vx_{[~SwC:J0Ali');
define('AUTH_SALT',        'bjLSCA%j<Y>n(vhR?@Wka8-Ra4|n^(&;^~QafJ?@c>S~}>W<GK4Zmaf]f#n!N8dh');
define('SECURE_AUTH_SALT', 'rVDxZ=n`4N,r)6AVCsa(*1 G1{q&U2qV_p>EV9|KwUgf|4xWP7:Yy`PS~)H`Hd@0');
define('LOGGED_IN_SALT',   'Oc+Wf&2ZnHq!-bpz[,tk_!/(XkM?5y_E?G|A:.YoGyyT_Lstem_j+OdlsnxIyUi.');
define('NONCE_SALT',       'LJG|PK8ofs.E,zwVM!-cTk/X<y<wW~ZG%48o$iFUiLAaDPalaMN&Ron{Yr/c-Sb]');

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
