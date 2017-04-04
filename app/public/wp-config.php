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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'innew7KJAsmnK2/4XnAIMPVbvq/f91EqUQAE6kLcbC3VaEfouvgJ+MklEQYioV8vGXaS3ljIvt0fPEw8RICHDw==');
define('SECURE_AUTH_KEY',  'aXHGZqtHgt/st6DFkfdoogi24XSXR0AuFi4aeTWNz86aOvqBL17fL11wUzdBIZG0LU//2yVHvkxr24g/UkqGFw==');
define('LOGGED_IN_KEY',    'pKiMbb4L66EoIr42kO9Ti2X5UrmJOMvGWhm6hz19iVpH5tms+60RkQtkAI4jk3/xl0/HXpHa6G/XHhA2RDanwg==');
define('NONCE_KEY',        'etDFR344BPP5BzzQYOkbVIB4sNaGUe4o8mLJVQOOgxw5QqODMBL/NlEOeYKyaey2tclzAJQmEf5LQW8E1NT3gw==');
define('AUTH_SALT',        'b28d5Gqk46CVZKfksMs0+V72aLN8f2qwGX2U0O3lh4bIwv0beWqsRhrDkebmzLU5eXPraRTvJH1kSJoh9wf0qw==');
define('SECURE_AUTH_SALT', 'qja3vpMqLttZtZmzx70nr1HuNMnp/NCqPEWJNC9Vz5rylq5rTIY6THdYU0FJxSLAF20JYw1huyVInVCM3Nj1aA==');
define('LOGGED_IN_SALT',   '/z9DA6BaXhTJYA0XtOOwx1IiHVI89eKcMwi+4MT34yOEIfTPa7ZHu765YZIyvCy2OyPujIuffx0Kj6uSIxfraQ==');
define('NONCE_SALT',       '6PDAH4lWEnWh2pQex7Kp+8YTKx3OdUgMB982EfdGxATePxoPCOf1l32K3TK6L7NvgMLp2SaFLQTan+AuocMPHQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
