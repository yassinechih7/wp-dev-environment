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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'nSESqs5v7woXhwj_O_t3H3PdKGa |gO5G GUY~<byBc[e7Z|T_I0Yh1S8.5fMaQL' );
define( 'SECURE_AUTH_KEY',  'tV~HSba:ej.&ZW47KP^JC3l+~n>*Jw?~k:UGa9B,FZa/]V/K`u`T8rh&q269`;ph' );
define( 'LOGGED_IN_KEY',    'GSPVv,nygxl%5aHdu{5~#}w7j@OnZ6b[PZ1Fi#&yb@eA6((hs9S9G~2TijKMC( v' );
define( 'NONCE_KEY',        '6cLfMZ:`K;8`6`+N?@|/CI(^J+qb8h|lR*-Od_ttC&H>(9JtXa$X7AV:O/Zb]v w' );
define( 'AUTH_SALT',        '98sm^UK$*qj[:>7S@3eqahpWk5d%a~.|rqmX?Bcq^b!.0&BjXHQ#F!,3]=;wGhF0' );
define( 'SECURE_AUTH_SALT', 'W|ac=3;1lRrU uSjmBJqUy-OM[R,!exjZ;~lRJd|zG 5V9D50Gc{Qrv9-ZLRFf;H' );
define( 'LOGGED_IN_SALT',   'fqw2D{BnjM^~10NDQ8w6&^ZHKM#cKMl&Cv=Q+^NF2?b3W-<fh$V<tvEQwK)]gZOo' );
define( 'NONCE_SALT',       'f;DOmTvp5MIq4x!`HBlKEz@RUWRYP;e*FT!0K;~|Niz6@xv=g*1YM3{P6s=a<uz=' );

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

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
