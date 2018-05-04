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
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '[eUG|xTv[T$cxZi|-w?U_qN]BMi)>2?bPe~# +bVX.eeIT|$JMsCe>@r:J/tO=CY');
define('SECURE_AUTH_KEY',  '(t@T?HeFgFX]v`1v;k3T!i8`#,u=Z)eQ;,Fzh,GN5-GU7{j`+_w$)<>uT-l9wIb&');
define('LOGGED_IN_KEY',    'qv@.$Wu.a;?:E,x$MDh)G!w]x{[jpL;D,e@!_`h.e69nkHpWJC{<j^)GQo,@@JYM');
define('NONCE_KEY',        '4Sk[@F<l@_#1*Y3dBHg=:yb%Oqka-~P7wg4Xj{H-HsI).>A1qz,$viIE^-6UB!U*');
define('AUTH_SALT',        'PtP1+9sbs>)nT=~[^A}Od^4X[Rsc}i c!@+vNZX)I3-ZVJZbB1W1a+n@TQsyQjeg');
define('SECURE_AUTH_SALT', 'w*wFlc}MG0pQe6EqN2i@&KY$?jH8}#:<gcfFEKtZm%nMm;?ik<yFJ9oyr&3F|95.');
define('LOGGED_IN_SALT',   'D!t:K_b~ >;r*wPAuqkL_(kD.BN.hpxH[sPokN%lk1NwdK(b?~y@DVi2^7]f)XY`');
define('NONCE_SALT',       '{WBgqn:T:%WqNc0Y/8YaEEG[o<rQ_EKc]uy$(00m78<+H-<?i6Ieq|SvMh6Q$f+R');

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
define( 'WP_MEMORY_LIMIT', '256M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
