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
define( 'DB_NAME', 'joyp4269_wp523' );

/** MySQL database username */
define( 'DB_USER', 'joyp4269_wp523' );

/** MySQL database password */
define( 'DB_PASSWORD', '7D-pjS-w95' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fe8fnnfwlif58z30iwsfochrajl7mjjoqpimhasks1ydtp0izzbkauwdfof0odeb' );
define( 'SECURE_AUTH_KEY',  'nu7ezhytndy395asmanqod4etzbfq6g232cuherne7tanoepxyaa3iriqjogtwmd' );
define( 'LOGGED_IN_KEY',    'kc2bufx3uaqjo5oc7mlokajyeqpdq0feanim4xohitrybqrvysetieoaa8kv5dyn' );
define( 'NONCE_KEY',        '1wizaegaq3bijduslstzc3pycghslbfjummyasr5hypbqlcvhba6q3yd60mg6s1x' );
define( 'AUTH_SALT',        'm3gljja7p8jmvxscpmeb5heowgwfpdvbgkk93iec4hyfloisteiaxwgh9hckejvd' );
define( 'SECURE_AUTH_SALT', 'ty0thy2xtu4977htrg4k9z13osjlbxt7ieum7cygj9anlkfoguci2rakbahlycuw' );
define( 'LOGGED_IN_SALT',   '2bp6jlkgkabuaytdoy6ioddmgmymps6dtnefx900yznsmpabmtnxhf4jqcntcx8z' );
define( 'NONCE_SALT',       'dnagyqzjyxxkx1hldksovwa25bivokgj7j0e6czd6qahoyev6ltoiqd4ef9owug1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjv_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
