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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         '~L3Zms4YO,U^)nu/nA<BG):=J~;X`e}H6xhx.XmI&4IsT|^vZ=]MS7hY(|{l~g`~' );
define( 'SECURE_AUTH_KEY',  'c>]=_:H.#IoaGV_6=Zr7)M@zriR*T9h([_CvxTi?/ciw>]hb7 mU|?bP2_1%0bf#' );
define( 'LOGGED_IN_KEY',    'P>@@gA6%(PGN20 Q*5$c6nsJG5<ER$l:idk.FKpXrM{}kEKwGGJK}X=VN`9[A@[4' );
define( 'NONCE_KEY',        'UbvvIyok1Y(I|xOLvmeM{K2A%~k}d-HB-v|,Z}m}doF&WHHev>||__/Q*jJJoMD-' );
define( 'AUTH_SALT',        'f;URAo4IbQIjpOt+{eyhsYEVXD<YcLrw47e6Pcx<hz+$jfrs3)b3O/8:ST0LDyR&' );
define( 'SECURE_AUTH_SALT', 'G{|LZyQn=brt7g#MJlAI64:t/^bMP>dypiZ;mCr@[hh~!{M@b4H6!dH(-w?Qcq)3' );
define( 'LOGGED_IN_SALT',   'G8JB9430r?>=Ele4nc8Z>tmKu@9{8RE$uzd`a:#B^zJx3dnA6ydSorw98:yzYwN1' );
define( 'NONCE_SALT',       'Ju&i!j{)xb?1gX2cO|:J4N_sF?_Kn=,jFuA&i!e`#L8COsppV]Ap}RLoS|1)~j1I' );

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
