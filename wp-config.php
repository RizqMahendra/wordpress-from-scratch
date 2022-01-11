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
define('AUTH_KEY',         '0xWTopb0IApwia839R54KfO6ZzkJ4KlmAZGXIcyTq1zYq1WYWMKVqXIZNBS2dPXM/8O0P+3efp0YeAm1l/RdfQ==');
define('SECURE_AUTH_KEY',  'ldabAlRAABeugk3rHGG8g1VEDvB5gyTiSSgS4FdWW9GYmwqzL0paBoVJz/SHhRRSX6SoSuInTsKyzLwR1ZkAdg==');
define('LOGGED_IN_KEY',    'ZH2EheI/zcjChLPQw7x7tC3OwzjXAS1NkCZ/+7MDRtvlX2EnHFJlRWflwPezjMvbP94KM3Xf2z27zk799gYqGw==');
define('NONCE_KEY',        '1VG+g7rbc636OTdtt695aSFms37NcqgTnmFLGbA5TynetctyM9NQsOnI48jOC7/i1nl9RiM3Fkwdq8l8TK5kAg==');
define('AUTH_SALT',        'sIKYh2AdyGdRLv9RvEsk0wwCX5YWiT3ePuJnfSjL1zKmargEUjGVA6xWNQJA2dLe3490RF3e/FU4X0NHJxu0pw==');
define('SECURE_AUTH_SALT', 'iIRYEsALnzu3zaMHI+OwHJbQaRtn9i5SzIsI/Lh5T86ccuXhB6m4ZzC7VKE5dbkREwz5lqJJd2YssUtEYKUg5g==');
define('LOGGED_IN_SALT',   'uwSCtu4rUxGLvcCH0edZK/tC9oMuRrn8NFj4dxS6n7x2MZPD+Khscgb58lD3vd83b1a/ilPg2/V+gVeMjtF/SA==');
define('NONCE_SALT',       '8N0uqQoWam5T00T7IebsEmbpSY2jPxBqArPpQTrsG4HBafBzmMDGslKYDB90wOuu4JjVSPwvVvfI/vYqoNKedA==');

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
