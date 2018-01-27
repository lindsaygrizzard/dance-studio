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
define('AUTH_KEY',         'oJkYzIHE9WfhToe/JLV5FiX7NhSarfiTyLCHw3fudVm8r05DBnIWocx0QWjvNxrVXR5YBpMYWaNiT6cq+pcCqA==');
define('SECURE_AUTH_KEY',  '4q/SdSUNZ1XleoY4Sk+bifmVjMUaScNYFd3HYlUAGHUU5BspXCGHBbGkaEa5n5QLCwxkwUHUi6UvNqqkwEqUuw==');
define('LOGGED_IN_KEY',    'oinyP8Hpm9uA1P2GqgXydh59+uraK8dL65ElJb/0GXsNy9mQrKULHKCd9JE8qsGaSnm/DbjbArUHRTtbjdbXPg==');
define('NONCE_KEY',        'KwwZRnRioE+Z221XS+WTzv7dL2+iRTIuh+zEk2ijCyXKLbOkSdPHIgX4BsejzoV8OB0mYDMR0+V6jaxy3/9Atw==');
define('AUTH_SALT',        'RJLapjAtZ6vuf0++ObTGj8DB5HXBiuNaj24rTuBi5ELiDcDAdACyee5WoGXAMKb+d9+xh4kxCU9J2lDIy8cQ3w==');
define('SECURE_AUTH_SALT', 'QNTwcAP2qJwLaXGsgPRxKcsgY2LAKMZ+Fms0jlb2En5EQD2P+ZnT6RsgImmtpBb9OsvrdoyfR8ECXYo2r4F/VQ==');
define('LOGGED_IN_SALT',   'Jkq6Beq/+6g2IvGJSOEduJXRdPPrE+rJnmB77Ma63dioZMIVD4vnVqoJIq6BieFBRHFpHWW6S8DHfYtDsDlWPw==');
define('NONCE_SALT',       '2vKTjf3mxQAX6y6O1VSW29Ec9ZHqzoxcqRomBllm+yP+bJGfK9o9JPySJkw4Kj4Cm0rBmGHP5uZ75N1LFoknnQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mqxzbjthlv_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
