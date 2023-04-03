<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-comm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8IydfiTPb79EM4EScm5YvkNXZXCtGHde17iJamC6WG3v3hwRSbuZQgf83jdlkJ31' );
define( 'SECURE_AUTH_KEY',  'bQtNcaCruMWEriJjaRQkMYpabjhdbP2bHNBktESopEzLsTCZQ8EGOf0upLMQOgCg' );
define( 'LOGGED_IN_KEY',    'F2f7ZoahQDGUeBCv24F3pTqXocSywjP6YKfDF3EwQaJJoJXXVL9OnIEvmrc9WMed' );
define( 'NONCE_KEY',        'eSHyyVowjOcmAlXXM3AulyCtVn43LbXr5GjZFiOThpVQ083aS8VTKTxdNYQZrKDq' );
define( 'AUTH_SALT',        'U4viJ3ZCYBic1XeTlFJpRIao96lQPTLHOyboejKKI6cfzyDRARjSMwaldeZ2GBz9' );
define( 'SECURE_AUTH_SALT', 'Kn3nToOKUGm1hFFXakDb7fECatyx0BTzCQ5nM3Eday5u6OB0ZQWfnYffREd1m5r1' );
define( 'LOGGED_IN_SALT',   'LFCSsCGabHMoaGwLGqRae2GXdGqIbw3NU4btHoIoE06b6EP01VssqAshYFaI0SDD' );
define( 'NONCE_SALT',       '3BVWc2jfRYkyeseyOMw8xMpaAZywR5wPv0VGMfjy9BgqqC48xO0sM7b9405LrtUi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
