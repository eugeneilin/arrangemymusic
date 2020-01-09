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
define('AUTH_KEY',         'lPbCNoiSOLZiBbBcwavPlBzXaR0hCXiwGc82tR20oCjv/ABk9dOQwvfmoAYPYxtbT2aF8bRYO56ECwbZJDXeFA==');
define('SECURE_AUTH_KEY',  '+wsSS8NBlYkFfTyXR2C2Mju7AI8rgy4gQmghhbaPYnLlHA13MFyz7AfYs2FDdStIcPOiZrszhuxCyFTwHujanA==');
define('LOGGED_IN_KEY',    'YfzYNvYfbwRrTkXomFq02ZQRQZKLtaYe6knhc5Rz2Z/Sx49+7vinZ4VuAxueaW3MfxM8s83tsz3ctUN+CBnOFA==');
define('NONCE_KEY',        'x5fGnoxyOivGirch8PIvXJfrV3eIL7j0qCnEZ/goyWmPDTc+m6s9dONK4+ru8MbLOwP6ayJQ1eCjIbczhoVKgQ==');
define('AUTH_SALT',        'Noh1Y4SoA7aY/ekTNx6Ff0EhtCoNiAUUXyMEsqFGQIUiFIrbvf0D8+SbxQZvqn3EogS/dO77FYdZaSbq17S86Q==');
define('SECURE_AUTH_SALT', 'UkzX7s0xVR/oCtI1d05DiRKqYA24Oh7uLxsICLYuqjYcF9iC3VyshoTHbU8vVy7xP3lT+KQhTAD33ZpotgqgJQ==');
define('LOGGED_IN_SALT',   'K0ZsQbq2ejlzr7tmeU0EsmBE29/FlRx+ZCCiw4jPk82z+96cQTTiyoMEI8Sp6W/NUadeA2yRzWs9anhgaDt83w==');
define('NONCE_SALT',       'ks8foF3gAM4S7IsONEEYHTvzM/o/NuqIYgp8is+jP0roN8Ea225sqksMCrWGMMUVYLRWTsa7KIsIUyLTKcEMvw==');

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
