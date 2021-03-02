<?php
define('CONCATENATE_SCRIPTS', false);
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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'uUCfHu[m&qjA]uccc1&Qo%/En=<^>ecp*rFb5-P7ARX(Cg4UvNsY~w;#3+4x<Q}k');
define('SECURE_AUTH_KEY',  'g!KhOD)M]}2XK4MWv)=Ni.|-9,>P t#v!iT-K>@^syUj;lb Fz-4Bc|6Xw7?/kr$');
define('LOGGED_IN_KEY',    'xcIpuo*CZSU?QnxBXrA}:xj{e>JCT/^&Je*Qu!2!{1=~[3]1JB^f[JyQ,-YV-QNm');
define('NONCE_KEY',        'u;f{3;u>`xWX0_St|mz9Ae`TAszmgC{c KOsOLuy,uO+`Dp2)Z9=tz%@_`,>d1I.');
define('AUTH_SALT',        'GPhe_>|.xv@o:!VP+ EJ{z7M.u1u;TSI5L1#-).o,kO#0TtGjgw](k-;BzT?5Fqn');
define('SECURE_AUTH_SALT', 'BU]|lWe7f2{@FToypH4NA{G[;ePLY[3L%&^!D{l_%_JgD@,{%yh|5$cQ =b&V#~{');
define('LOGGED_IN_SALT',   '&ASkeB| uME#eIW`3zni(M,jp2`G@pai>yMZVKSab_ FpG!-yiZRO:#o#_{4U.p{');
define('NONCE_SALT',       'z>gczm>$Z?d):4|f=#1(g<aTT_kRCN$xOGBLpzcA>!in4+eo2~|U8.ewvglpi$mY');

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
