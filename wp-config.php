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
define( 'DB_NAME', "stock" );

/** MySQL database username */
define( 'DB_USER', "root" );

/** MySQL database password */
define( 'DB_PASSWORD', "" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'oxrtn05em5axxi9nzmrol0kbbkgahmmcm5smkmunrsods3sja9irgabpiensw6ri' );
define( 'SECURE_AUTH_KEY',  'quf2a7jp7o1ezhnk2quslnhjns76ttiky2ozqia5ndsqqhzxusebphsejhyfidin' );
define( 'LOGGED_IN_KEY',    'r2zyzhmkhgcerpykxlhlmpd6k76uqlxxkw04xjcamn3fquwmer1ctwbz8lksxxxq' );
define( 'NONCE_KEY',        'ytosb3puz6in9k3oos333cycgz2vhpixz3pkspdi3c0ocvyqzzntwcrx5higthta' );
define( 'AUTH_SALT',        '08hs5lluy2ayjkaqer8rzwgsvhbzffeqedlhkwkpfggzwvqnddi9ew7j7i1s8xna' );
define( 'SECURE_AUTH_SALT', 'cnvmevke09bigmd9pdtgllbtkwiyg59vlfqhqysn4ktycqejnndvuenh3guqkksn' );
define( 'LOGGED_IN_SALT',   'bwcs5cwysfvmhfd3hh0j8xhgg9xtu1k2c7oevwdm0hlxrtyjwxuqvdkawzvhin5i' );
define( 'NONCE_SALT',       'ax1xuh3sltt7jhd5oxom7xdliwblgcov2qgxgvusazvjopv9kwqfdflqusyk9e7p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbx_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
