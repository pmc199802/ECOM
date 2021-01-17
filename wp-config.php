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
define( 'DB_NAME', 'ecom_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         't| +y6:NEl#b#K^XoN;VBRa#7NhviU[eR46wW,SZy|EdrzkP+T|FAa,%By:U*M)z' );
define( 'SECURE_AUTH_KEY',  'L`zvL.3wxhJ,wzcgEu]7yC5.x*~oYRF(sm_l`Fvb6j7FS!pu4L1X]{zs@$`5`8$6' );
define( 'LOGGED_IN_KEY',    'O[G ~PI<l*{N*Oli^4C<ZkDDPz?Pd{Z?+T##d H{MaTBAI;D282As*o%eP4RBxMp' );
define( 'NONCE_KEY',        'M=!;dKGEZZ:9yutE`$r|>8qikn:u_dnPs@W)F!X!V^ycaJGH?_x@WXll$b0FeG9n' );
define( 'AUTH_SALT',        '&nm,n5KNzz2XlG1/Nt]%S.E !`66mTMRoPdxoS<L<&>@N(ig 4p0*D)RGW~W(hm{' );
define( 'SECURE_AUTH_SALT', 'k+JfE2OsW|4xSP=8,v1~9~C;;KV9g=Om[n&ArWZ7u9.x1;X~hS/zJuli~ms&.s|:' );
define( 'LOGGED_IN_SALT',   'x&7fvbRb#/qXQb>B4kMj_G7aN$/6aGC b(.>rO@reimwrAHQD{6X16}XEmnrnDp<' );
define( 'NONCE_SALT',       'Da7SK16gRX-C^?JwT<Z+jMxK?f`5}!QXel/1CBOhYP]#N3o?45hgR4_bYnO9GS  ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
