<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PT.-NetSphere-Informatika' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'YXv4axyJXNcFwW6V5Gi8sscAsDtjijcFQMsZoXJCcmQL1qFwl3qOeZuZFn7wZbcW' );
define( 'SECURE_AUTH_KEY',  'nL8EgfwozGThjBcbqGRn3F9AQQHXi0INjlxMIDh8MGMAmUrOCutVpyZBApj2ZNod' );
define( 'LOGGED_IN_KEY',    '1PbupLqNQaMZQMuQvvBoW4kc4Ep9WVxNrMwG0Q1Bi6G8hik6sIjaN5inmE3KPlVM' );
define( 'NONCE_KEY',        'pCM6vtoss5tACqC8QvaEwggdqSEMWM3WTlBtswy7SpBWDN7nJbmhYDNZhHfePX84' );
define( 'AUTH_SALT',        'ZRvRelrEGUXHooF0uVmjhLSYtxzn0lcdCinQvM7sorZU9p7xDyy3rNpoOulaYMgZ' );
define( 'SECURE_AUTH_SALT', 'A6dDYevQTJrO0mIb8lxX3guJwdvYlVmvle0dx3DOUtmSE27HxVKOUW1Nmir89BpW' );
define( 'LOGGED_IN_SALT',   'c0ht7KofadjwGxZQcahYXDHlJ2e91HbvtF97YfmiqRgpzpYZn0A3irjy9waQX0Wv' );
define( 'NONCE_SALT',       'VHnwqdOhBGn2wnYnDdG7iDFwreh4262GQyJyAgF9WkJEK5tD2VmHp3FnE4KWRRDX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
