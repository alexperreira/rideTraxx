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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'w2VUkGIXlTw6MVzF9cde3bKnyKN6DXA8vVeXFWmD+8E/DkcJwHs5ucg+jN5NfQIkvExN7E9+eqaKJbj4K3NclA==');
define('SECURE_AUTH_KEY',  'tAGGnTnBCQZk3svXdf9YRwnAmh4QZaD1M2KLV/TjhFp4AFU1xaOfWI2JcO0OTtoiOVUVT0ptCuGM2/4JuRf/Fw==');
define('LOGGED_IN_KEY',    'stCD6SEX9GdKYAt982VNQjODv9A/Zv3DfZw3t1TIofD4L9rOAT2jRek50iKbV8Kc29XyPVY4DY3vaWdR457izQ==');
define('NONCE_KEY',        'VnfDLBtGIN1T+yVjtK0QPJ+sNgjHPFq/zGy2+JczMfI+7lw1gN6Onj/xQz8nGrH8frdinflLDINOGy+jgQeHmQ==');
define('AUTH_SALT',        '0KWvwGaFQ9gt2qWxqWaWqt9j9XX1cXGkTcOZrteLNIrJIZad3NCsHhEzq2MKi3gIZaYzTeoknTLruT4XKrM7mA==');
define('SECURE_AUTH_SALT', 'yLS4ptpf1X9JcBUz/A0K2u338iaZcHXPO9/tD/8OEGDXWx+VGg+rioxaTBoVNhOWVRer5474F61lZLOrXNhziQ==');
define('LOGGED_IN_SALT',   'fc8e+/kfXC9pcAjGZHj5eMecN+zYCE9fPySdC7AhxkcCnmBL0boevYTuC0ya9dFDbY1QrfF6YzlPpbQuJXDTHg==');
define('NONCE_SALT',       'q953/09qPsnszSsi1eXy4zUctNg6Y3YnZ/KdbHuWBXgvMafsPq9IaIvpU2lyq99WffcBkwT7MQ+kgveqsgNHNw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
