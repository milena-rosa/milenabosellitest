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
define('AUTH_KEY',         'f05lq9wqGXkAHtLe5QqEmIpQobc7nzuS4WeSHWdM8+ZutkYnaEQUvChg2VWiOJSvs45ZvGFFQYKW5qAhEh/jJQ==');
define('SECURE_AUTH_KEY',  'cp+fr7dCQBBKQhA8Db3l7wQ/0yFIS7cAuMok3njpk1t1MxODd+sVShaeyaFYNx2J/6PveTggwdpGvs5VtcaOGA==');
define('LOGGED_IN_KEY',    'EfzivJ9sr8MC/qeDhzBtJRVNIFdHcVF6BFnkHYxKIh0V+Fh4BWeta+IIazLMELsKePL+IDNNTUHkT5ujS86vvA==');
define('NONCE_KEY',        'uJSWuX7a7DR9vhLxy0lh67ld7RX0xjjSJ5NszK8tV1RqepU74MQ4FA68LXYz+FMxJlanfZQ4XRfLgtzp+Si9rQ==');
define('AUTH_SALT',        'WvqGS92o+xF1c0CJZ5+A9mEiJjXkL16D8fMURLRigX51dJUHl2+nd7h5Cm1j2yl0Y41RMz588DTMya6aWh5lvQ==');
define('SECURE_AUTH_SALT', 'BwuDZMill/5+1bDYIQxCcQSzd4EgOvQ640TKbzjULHFBlxbq8fmSyQZxfDePWOOZz6NXcW/B2DRuX4DJF4cNsA==');
define('LOGGED_IN_SALT',   '9d0sd6hRz6gQc1SH4NpVLNrEvsrpbyoW0EqW51MnfwF2LsJX5HzbMXokfqp/Ph9bmFbhtSuA5yZ7dFx+Y3L7fA==');
define('NONCE_SALT',       'ESgitbV2BWW/x+C2kGTimaSUG/uJD7Xb4JD7a8nAHXWr5JUMO56L12CNCnHmm+UKLdSV8UDekX9fYL0lkZBcJg==');

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
