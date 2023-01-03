<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jeunesse_parlonseducatio');

/** MySQL database username */
define('DB_USER', 'jeunesseparlonse');

/** MySQL database password */
define('DB_PASSWORD', 'Cn^Y?QAU');

/** MySQL hostname */
define('DB_HOST', 'mysql.jeunesse.parlonseducation.ca');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_0``Otftm^Jl4@y&hRQPhGijMmLC/DAqz/^x5B!Cq7bhbxfRrFm)H5lvlhArm;At');
define('SECURE_AUTH_KEY',  'xUY8Sz8?mt?7N5AzxEvnA:D6!;BZP/?FY@)k@Jr#jNwSX9d;QdEufs6#OXLkkHne');
define('LOGGED_IN_KEY',    '*~DVzLQG5I!dKY"_p4b?PBh1m#7x_$z5oX#"CXls^)^`@Rf7+"+R)x5zHC`E(NO|');
define('NONCE_KEY',        'NV|DHjE+sa@ZJMlD;hX9*"xNg1EIpoG5np%LJv(%0+NxyG;7WauCoFdY@pFl4pGh');
define('AUTH_SALT',        '2^*/cgINQrkWdnz8^*CZR(qk70JBM2W(s?~Bm(5@Mxa5(qu7eM_yWlqphF$WMX__');
define('SECURE_AUTH_SALT', '!Fe!P^GHI22e2U`qBHSgellfpE!ybv#VD_LLgSObKt_e:2_s?0ZuRMB5%Kzv:;rt');
define('LOGGED_IN_SALT',   'Qrl3sqt&`VeKYDh8ActQIo3bI(kA"R6edn1F1W5%):U2;2u#c%mUBI&5e20v`H*;');
define('NONCE_SALT',       '"DeKFI+UZHadewPAn1whZRi8xy)ChI#rH6qw30%;v~9TMhYaz$w9TnY2mF"kQSmG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_3k8edf_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
        define('JETPACK_STAGING_MODE', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
