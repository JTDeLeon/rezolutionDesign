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
define('AUTH_KEY',         '56Ckp74XeprgxBCIeRzdDnmqFdMghfVw0M4UPnGJiMNFq4z6NNIwu9OPgruJUJSMe5mUrclyK5brAe/CLzeZnA==');
define('SECURE_AUTH_KEY',  '7AYV0MLaCa9TpitAzhSjUKxZC6xTFgvhiJM7DyCR6W5jYXxRAJ45tq6WaCzpPLJU0//NuB02z4EdLxokg0jZUA==');
define('LOGGED_IN_KEY',    'ZwxvBn3RPUcDOD/qp6veCf8a+IHmnMajyNuYUmdZPtEjQtjVlzZ+n+R2rRb3x4zKZJTY/vfgPKw/WYuWV5WC5w==');
define('NONCE_KEY',        'bZmc8ae6yZPbKsr5S3LTdWYQzM+Yv36FwPucO3QGaZjIed+csqfoK63j7NVVqhYTOt5s6E3ptjdEq7c2tB9nDg==');
define('AUTH_SALT',        '9LJxleB2W5nnZU+LF2wKqjTHzfQY7odZzAqSkXSF1kOxS4vnutXJgJojPCvNVQVCbChSszq9ZHbuH2PraoedxQ==');
define('SECURE_AUTH_SALT', '34I0KL9smIwkXnqMaT1CYcyAK1rmzLqMgF1cIFdmvyw1mIx9kIwAE/lnPQifqVerRVCE2HzilUEX4OPRjetPlA==');
define('LOGGED_IN_SALT',   '6CIzGajCvQUy5Pwkj45F5nhGuFqw0K6WAXyr6LQF8QdROdqAwb3xBWQYtAgynH4l4jkSDIQuDJ2uKGZGNfBtEA==');
define('NONCE_SALT',       '54uZtDABMoBPOS6SCIpiVfw0obkKtBKWSPlG5GoXzCvOxstjBIdNSfE+mlrJ+7v/bFJnoxYxS1PEISVv5B4Jpg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
