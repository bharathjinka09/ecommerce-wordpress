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
define('AUTH_KEY',         'S21pe8OkH8KQ6Y+cYqc54ji0bk8Nwz+2AlSKHgY44ehAIhD1pSJ5kWFTW0K+rLiBsWbgvi/Cwxhs5vyLeXJkWQ==');
define('SECURE_AUTH_KEY',  'hxU2dzyPy8aXDAqvnUbVoDJoqtgJ5zgyUYphKyEJdCIlwkUJx1b0V9z4mhTMYdKZOLc8VRPq9DHxGvSAyUzwIA==');
define('LOGGED_IN_KEY',    'sURovhFaQLNMMFqX6m9VRF/SikUR6FmscsJue9SlFcJ/itIz9a1bpxLFcZjRfYuh+bkJ9YylRqcQaQZD18U4tw==');
define('NONCE_KEY',        'vZ2fB7cWEsLu+XHdYvk7K4PZEh3ErioesOO6MdWjkSMCQCNZmx/iYLVA2j94BX3+iMT7ueY4rfiiD1w1hckT8Q==');
define('AUTH_SALT',        'hZEqRTJ5Y82zU0gzd1UkpDFvq5kg3BT/stcuJ6Qz+zQ67LgppTMfDzzVJLFMMMeSQ+rOdPdlyT/IEM/d5QnAmw==');
define('SECURE_AUTH_SALT', 'UMsCZN6Pyqhq8bVN9uXXUcxQyHOtfWgiV7dRTGUjSd9+hx/zMVFtD2s08L3R0YyGErESTSQeJMYSCZMDQYGZFw==');
define('LOGGED_IN_SALT',   'buwkQOrvYqso5zvny9gHhsdHx2pnOgqPUudNmEOXlCvA6X4+XkP56pI/ba61WG5ICXn0kQijvhFvngLF5ZUGwA==');
define('NONCE_SALT',       'KaVc25Cp1uMOE9/dKZIXteFL3jo2lDtZiZGQO9cfB52q1WUPT+XigG5aYAdPZbo/QkZMnvj/G835Go3cP8xscA==');

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
