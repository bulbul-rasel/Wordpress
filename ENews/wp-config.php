<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'bulbulrasel_wp966' );

/** MySQL database username */
define( 'DB_USER', 'bulbulrasel_wp966' );

/** MySQL database password */
define( 'DB_PASSWORD', 'w6p(yS52S[' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '0zm1g9bxmacj6cyevu6bdriustchl9zenyzow4x7lcg21gbkijmcaekxkmvnse1a' );
define( 'SECURE_AUTH_KEY',  'qe8fbu3rsymm4kpfnqorsjl03drhxod02vu46tfnopifyj71kcz9ltr7wlnmzj4x' );
define( 'LOGGED_IN_KEY',    'nrfnttvozaimnatp24f0yiiibnbantbzajvui1vyvkuzenlkpjnou5uyh99eio0t' );
define( 'NONCE_KEY',        'z0vnqt2qcpuuqouhlpdy0dttyz7sydf2w31jzwhv6lf1yxxsjh8olu7nxqdzj8u9' );
define( 'AUTH_SALT',        'wsblijicpj5klxbt2nortz8vqpxmd4uldnyleimaxnvusuuutjnzh6gxvb4nafds' );
define( 'SECURE_AUTH_SALT', 'bwp682mxxy8c7enne62ucprwfpvncpofnr1bhhp0yofm37q9n3ak0y85tdp37d5u' );
define( 'LOGGED_IN_SALT',   'kglq3t4bpbyijfhskpnnscgp6hmd9sexsk0axdlf6kbaoeilkgh2mcpsvlxdaptr' );
define( 'NONCE_SALT',       'rlfhalgrgkahmc2yzrberx7ofcdnlqwnacdyh8oomic940xu2n3kvuzbitpil1hg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpoy_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
