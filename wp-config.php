<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'socieum3_WPRL2');

/** Database username */
define('DB_USER', 'socieum3_WPRL2');

/** Database password */
define('DB_PASSWORD', 'CxX@z[aIVFPtzxc<S');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'b06290fc1f1f7cfc371d16096e5fda9af6cb751fa08851d3ac21f9a244c8f486');
define('SECURE_AUTH_KEY', '1d72976809ffbb52a3ea6412b43de9705eb76624049f8a57ed5c23c6169a0511');
define('LOGGED_IN_KEY', '6ead6f41721d91cf6b70f872b1e0913f58ba94d4d95b013c250ba217564589c8');
define('NONCE_KEY', 'd34c3c24d9d6b4f1909ec7aff43e8697cf9e9c8de14d014b99e7dcb07c44b522');
define('AUTH_SALT', '727ce7064ee95a75a8490565daceacb94b2a6aa376cd0909914ddabf341aebca');
define('SECURE_AUTH_SALT', 'a676d1e279fbad05afe6326c0cb438f59364fa584738b4b8fe2d745a9f6bc0f7');
define('LOGGED_IN_SALT', 'e6c3efbd1a6abdd76d75031cb5281d7bdee4ff40c54d4827af45c173a5f27b17');
define('NONCE_SALT', '3cced78f829f58e103f7e1b4fa1cdb2003ff0d07cb091cce4c3ac67387428ed0');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'XFj_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
