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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jeunesse' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'r_aytggGj qZ|Axbc;TE3DS5!s5E$&vU>`kSHQ`v[)zO[5*UD>Bg:G(2Og`0Yd}%' );
define( 'SECURE_AUTH_KEY',  'gp(TOms7ZfwP7hTPp+-[1T`NI,Y9;v*q^s.TqU+fN{cXPRD/a;5zmOP;ar?T?P8R' );
define( 'LOGGED_IN_KEY',    'WKn=?VsEh[U2KRiLQU]L<Z:!w?pA`e<_U0k@n (E{ny6Za|Sd~rKx7o6yy]H&8(8' );
define( 'NONCE_KEY',        'A8}q*L{Nf}hUa83oWdHgXE?@XgZN8%({@^ehA,|K1bm-0ZwdeAp!b=Vzpf{3Bn^m' );
define( 'AUTH_SALT',        '6JM^2&d4xNFqI9v3**XlML_atFnmzXYw<Ew;>bS%FVH:[S( %KW%?+kRixM`_GGt' );
define( 'SECURE_AUTH_SALT', ' HHb&J;&v MWy!XNShSyULUVfmes$/wmIj=Q+tzLK}hG$N[JzkYBP]8e^C*iVB/{' );
define( 'LOGGED_IN_SALT',   'O)WE;dLl9#`r>*STy[fO*~=;+I.?h-&l5P9OsW(:J=s@Pi`-puNU&1QhqYDL#l}O' );
define( 'NONCE_SALT',       '+1|dW[`&uiB{s./L4w31vQ+a*(jq^YI+k9B8[lU+WWmxpdu79T<3Wy+YdUpQIQ=6' );

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
