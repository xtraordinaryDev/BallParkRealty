<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define('DB_NAME', 'ballpas4_WPQI9');

/** MySQL database username */
define('DB_USER', 'ballpas4_WPQI9');

/** MySQL database password */
define('DB_PASSWORD', 'QjkNaWk6rTp4JnN0V');

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
define('AUTH_KEY', '74b12ddeb8d797c1909e9ac1884e6000fe919f3cba5bae0d4c8181f1f8feabb9');
define('SECURE_AUTH_KEY', 'c24f3df624d7d55340872c75d11cd908f7e968224fbe1242fdaec95a881ef23d');
define('LOGGED_IN_KEY', '3844afe0417bbee04efb3e98d506c562a7ba0c81928051aa20ec9bc02c619bd1');
define('NONCE_KEY', '6477e4a438e7c1cd4740a4fd68e9099df56eacbb68b089369b63d454b0d665a8');
define('AUTH_SALT', '4e42b4cd8e841d69cdfbf1dbe949eb0f48ab419ecd741ab64ecfd61e9f1266f9');
define('SECURE_AUTH_SALT', 'a077550131063629132e3c9d1dadd2500a40da067549e8a05911c5dd737b1697');
define('LOGGED_IN_SALT', 'a3c0dbc30d7800e2003ec19a368abd44e5933129c62825b6d82f5bf3f9a7a17f');
define('NONCE_SALT', '3b9a2c545502d3a848d008ee133002edb078e4b73bd10a967e939a092b14f452');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_QI9_';

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

define( 'WP_CRON_LOCK_TIMEOUT', 120   ); 
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );


