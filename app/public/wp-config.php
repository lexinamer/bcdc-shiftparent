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
define('AUTH_KEY',         'XaaVVMFrrVZR1SQPJbkDzM9FZ7r9HgQ9iJTaIiKKEbmd990LiQAU5SdywaTIJJcVflCXvtZb9cBUuwSqDYzuKA==');
define('SECURE_AUTH_KEY',  '2rFXSHOxJvI5dPnDVuC/kNFuJKQZs+Optmih4V+IE8XrRS5dsVL/Tg9MFVC3BdUisSvrorcptMcqy5kgwk8D0A==');
define('LOGGED_IN_KEY',    '5eMeUrscA37AayELtoiRYiqAJq7YVpUwmPTb8HziRYo9C+wzyKFDo/3RD5sKrTAIMgM+PVj0WCQ15jXl+GnzlQ==');
define('NONCE_KEY',        'CcDOAtWjixmshW5UTgS9tSvoRcPknv9gaQSf1vIulRQXX42wR3DvbLRu3egFEbcXWulQEilaSp6GxA/fdUY1Lg==');
define('AUTH_SALT',        'RV1yDpVuu1bH7dh0shgv1xN+m8715RblhyC9yF0hMy2Xw/Z8I2m7eHFwWbr2Ai3x80GxGeGLqX1unq0yn3Hxcw==');
define('SECURE_AUTH_SALT', 'r8DCmjYmTTHiCVSX7Eji3su2UQg+JVz+Z8v+ofdC+fzfzYofH/rBS3JPB7ASZMBL4LvAftsqI+rxHjOkHlswWg==');
define('LOGGED_IN_SALT',   'TIk7EcM6K52TUtFbdCSDdkJ2O5L3YchUzL9ont+X/Sgbg2fTqado5J8NAIq2DxGw/XLTgYmRTYzwhmhwIDl85g==');
define('NONCE_SALT',       'OqdP3B96zL3ff2rg7hCjFSugiOZmp9fn5e6HznGiKk3wjAe87vbTNsGI4X06hx1e3ewS3yMG5pGmXXB2warrNw==');

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
