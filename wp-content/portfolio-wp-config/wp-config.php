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
define('DB_NAME', 'shantich_wp149');

/** MySQL database username */
define('DB_USER', 'shantich_wp149');

/** MySQL database password */
define('DB_PASSWORD', 'Sn@x(103p6');

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
define('AUTH_KEY',         'pynslmlzv8y2tlrjovzaik56qobtzdioegbbkbho12vusbsgftts0camiqmkvp0q');
define('SECURE_AUTH_KEY',  'oa5vxvnahq7wmz0yiybqe3za1rv0x6ie2izg2hhfzlvb3ek8vmmxreyfw8lb4nwg');
define('LOGGED_IN_KEY',    'kmttl5wmgwzhlsdmq3mlghpxppf0c6pp26myy6pnqrhktznhvet1qpkgv3ijm1ye');
define('NONCE_KEY',        'zaoddxgqsygi8fir4jvmzpxkofllt0naoaptmzcivofwuumt3oji83v850b8hpfm');
define('AUTH_SALT',        'qapyfq60lfid5menavtjvclx0xe0fqumedbch23fqabjarx6nm2klupcriqvgxvt');
define('SECURE_AUTH_SALT', 'vzytuy5n8lnrasv9ogoeinwzrynho1iq2t3vtxuqefoh8w9j3u3radlyg8iz8plt');
define('LOGGED_IN_SALT',   'gkqtyg8ea1xvb5p7cxefpclrdfgmos2rsnrdgltij1ohogadeehhxh33ql0oxsbg');
define('NONCE_SALT',       '9k4flgatcij460ljvqmycqoneyxz4smrq3q8uafd9afn1uumah3c9lluxmdpirdp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wplq_';

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
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
