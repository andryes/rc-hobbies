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
define('DB_NAME', 'eav_promobar');

/** MySQL database username */
define('DB_USER', 'eav_promobar');

/** MySQL database password */
define('DB_PASSWORD', 'abc123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'DQRNBuR2vpWf(R._&:+[Gyu,JKdD3#fdOawi2L_PVtei-(S)WR:V,Tk-b2{]g-|S');
define('SECURE_AUTH_KEY',  '^e=Cs{mkk?+]34(>u+&Q?UA;lq[ ,h7O{cYKS;<On,(+Z[(n D^@xpK6?BwH<cR@');
define('LOGGED_IN_KEY',    'I~E>Z]{f-AbM);NZ=k|z[/aM f585%BY`i`|AG+FD.Py:<5<0|6r:ql/lk_Ws#Nw');
define('NONCE_KEY',        '(z2)o^;LCL ?_*2G@,//:cI/H{q$DoD2q?>n|a1]d?)X-UV=`;&&*)n[PE3O&8Ak');
define('AUTH_SALT',        '223K6Mw`@OFnUgRBys*7->/wk3 h|#zZ91yT`Du_YOvpPeM#sRxKVmkDmWm^{HG%');
define('SECURE_AUTH_SALT', '5RvyVTH&.;4pod:gC|%m{YD+8U(fc>P:/RE%Ms?bs1A-K0V-:SIafa+S-d35D9[>');
define('LOGGED_IN_SALT',   'PafxSf6n!r~I]Fx5(S)L@+Qrat{+X6r|F-r8dRr+->U6wU2})%2AJ-w_EJ[t9*r~');
define('NONCE_SALT',       '2YZs99L1<.1}-LMqt&`R[2-cF-?2Y7bgeE6zV-&|qi=yF%UbPi-F9*/Luv*B}~i{');

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

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

define( 'FS_METHOD', 'direct' );

// define('RELOCATE',true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
