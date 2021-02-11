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
define('AUTH_KEY',         'JJ+DF6TJ5n6fwjZ19UHoSHqNhAa5RMglM6XwErpqMttMk4kug0g1q1KqzPXShh64H4MzP28dFVVZvzS8Sc1/0w==');
define('SECURE_AUTH_KEY',  'LNtDHhoAKq9MyKCrvjUZ6ao5IPJr1n6KDEKztREsyu+SDeaApeYI8H7FWCvqpi1GXXg2238WPvFa5HIlzHiYYg==');
define('LOGGED_IN_KEY',    'PhpF8RTYOqKjVKX1bC9psIx7JCBMTjYF7gEXj0rQAdTrmRVURaZmlMgG6Loeq0ICnlDFAEpfN7JkZr9wbiPDAQ==');
define('NONCE_KEY',        'CKsdK/hSg9VKnfWwVClpP3yWtMtvkA91JTjxnxSxlEeG1ORKHAOelDj/EiXKTDGXV35+9B2xuQdb+ialYDaljQ==');
define('AUTH_SALT',        'U1k4flREFTOUf34yNgjUY9wMksevyesfAN3jPsD0OHzjZ72NnnoZQvyTq7SWiPqqvssB10O1qhu/PnOY/2aHtg==');
define('SECURE_AUTH_SALT', '9z2TEwMy9WPvCJXcpmi/Seuv/Pzned+HJyT/EAiEWyGvflz+7HdfN9vhRhdavma62c1jX4I5/zMiazcDQope3A==');
define('LOGGED_IN_SALT',   'qLKM3txBmpGpR0dH+Ujk6IUTUUoXel8Dtij2srY9ARc5SW4GzMUxe/Nn22f7+iCdxCBtfUzwnJYqdw/ski4b1Q==');
define('NONCE_SALT',       'FypAPIAp9XGBBkuQKWyd+X526060EfUTMBXSZRcJa1z+WUwBaZORGHfxzuaMix6VsOUjwEOPm8/WoAZxFBblAQ==');

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
