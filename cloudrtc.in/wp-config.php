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
define('DB_NAME', 'cloudrtc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Admin@123#');

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
define('AUTH_KEY',         '6F$%*%Q|`8TK6GA2E{{=,&Zqbz`Nq9QJCn;~bwFe]EfLRK9(vCaAYt12=06fxoTx');
define('SECURE_AUTH_KEY',  'JQ0/Dv05G ]mL4]fwOuQ8JSK|`Kx+9|9GY}]hCfD`t?3nav/1Ue~ >^M(;((^|$9');
define('LOGGED_IN_KEY',    '- /ur}tW; ~!4MdNzNC;~?e=tf?o#lWS#]$xV/}<|xc5^%v$j<DHW>dE<g5_^J+y');
define('NONCE_KEY',        'i@;N<BSi./4<,*:J xNu@L039/-`(g27I!I5Y3;{46fv|)>S1scXK;JZp:fq~_@A');
define('AUTH_SALT',        '8shx[t#+OkhxSo]/g^7-Tyr]4cIIWA*y&a/K3);L+xEVr.le1l*A5q$4vnv2{=oY');
define('SECURE_AUTH_SALT', '%T&@sU,i89q^jH%7hCPU/aC`T^8Zx6E,q{)D<x{]<~@-H![pM0xjm.jf%rAq bgv');
define('LOGGED_IN_SALT',   'j`S-o@leg#^a|YPb|s!1a>9jW==jP]>8wq#rp@3SLl{4r.I_u9w+;,oiDZ4#}*eq');
define('NONCE_SALT',       '4##lX*=SG.O t(M?qX?|t^)kzuD:}hHqWr$Mx{Fl>k5$TRRS?@y{4zPpc(^/et{3');

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
