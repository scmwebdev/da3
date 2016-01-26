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
define('DB_NAME', 'da_three');

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
define('AUTH_KEY',         'qI7o#}&oQ+5$@~{E-~uc6V6983vU^BD8jPg-h3tBdX,Rl=?GiRrkXd%tv*w-EPj~');
define('SECURE_AUTH_KEY',  '-R8^3-5MKOLC*k-p)&P7hOoP`!`n-xqNPTwuvHQsf)s}OJg[/l!vFTVi0u4fRovv');
define('LOGGED_IN_KEY',    '&IcJ1W5.L^D>T,T%kL(>MtSngQ yK+_M=}X1Q0HE4B?GxsW(#6xbP~[8pS.`6oSt');
define('NONCE_KEY',        'f1PqUa(pL-v]L2x*lfxPu:f8F@nMj|WI;%:AwU_&oMZ:6@]9w`@K5eE%O>mjM1dQ');
define('AUTH_SALT',        'TTZ;t-%`nKy3|`pjlDiP8veeM=|X&C4.*Sm=^c=BKZ@7hs=G2y%E!FMWAta>0Z7N');
define('SECURE_AUTH_SALT', '-fIU8tl-<A8|.tS@)bPc=^Gy*MvB`|v:NVGo/^+fmy4lg4T5)6!v>/_zn6MKli*l');
define('LOGGED_IN_SALT',   '}T6Ql+L$6Zr/@}nKPa$=jWt(k.imIjLP4>/ERD0~Z?IdDh#|cVGlGvT}`%w!RQz4');
define('NONCE_SALT',       ',pX}+?H[|tXh@3ZsPZJwH^J2VqWgsvk4u3YN:)0=RyS-JW X8Y ia)Dut`pf^]ah');

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
