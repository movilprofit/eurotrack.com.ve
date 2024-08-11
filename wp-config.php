<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'movilpro_wp845' );

/** Database username */
define( 'DB_USER', 'movilpro_wp845' );

/** Database password */
define( 'DB_PASSWORD', 'clPx7cYTeNt4' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY','YLF.}1,|1>sAp.@Kh5<mNEI;0>zo<>4C3bN4p56T<1q,D-]*.@InIq^/1qA6.#aP');
define('SECURE_AUTH_KEY','~7we5_w^O5AQZqL+[6$J#^!3vS8%R )~fzQGgjFP|&RLUht<J:w9vY,;s^uKD1uu');
define('LOGGED_IN_KEY','x~<ws`vu&t+Rq3FDffzXaF/fCh|C:v/H+%C%`FNJ5Xv[*?)v{ohA;keIYpuI`+wB');
define('NONCE_KEY','+E+I?s76DxLh#vCyV9(:ns1^&u<UfjQ[{VKGEqD+I$P|}](dLKR7Fl`=d`q/<J;K');
define('AUTH_SALT','H<n]I~^{g,PMtJ}8QVz%0Q|E&|;`hLFpiX-.B/)|7<&?c5C`i7SO26,7Y. @(f{O');
define('SECURE_AUTH_SALT','{`-;/(1So<Tf}i5eA8xlcWG%]W&r)R|Mpt;t-, =:EQBy!|Zf[WCYmPSk2%bai1K');
define('LOGGED_IN_SALT','$u&82-q/I<~}>>sR|6s%$Y}]cVYi]lP{aZ+T ^bJ=)DO}D==N*#C4-O#ISsn%$ y');
define('NONCE_SALT','M4=|zSS|$E^J.(+8.%W&YxDpSL|7|N8P G3aIs=|+ut)9|}8jW2&#;G,y}11$E0&');

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
