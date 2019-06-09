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
define( 'DB_NAME', 'wordpresstest1_db' );

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
define( 'AUTH_KEY',         '{*16yKe3A!N(?$rXVdKNd:|(jg42gBj,9:vg[=Vt$1NKw>Lp&w4F2xs)T+!dX:z#' );
define( 'SECURE_AUTH_KEY',  'V:_`)s;Y%I?_uhccl }L^f[DCliEer6cl[l7ULvp!KS{$,tEp+&o)ExB0iI$^ivL' );
define( 'LOGGED_IN_KEY',    'a0C1>kOMX,^RyrMy]9Ho,<hdbOf9cnLb;sM)!psX?py:9;7<Rvr}Y7!uzQ(ZueZ6' );
define( 'NONCE_KEY',        '+]MR]saV&hgOs]kaQ?C8.$`5{|Us!u,-`>Fyd$?M_GY$rzvD6QWWWug2xo5;h$VQ' );
define( 'AUTH_SALT',        'KXZN$iW_EG{wFouf-%KYA<mP:h[=d E~z0~%$aIbJr1BW%++s#HpitnfS:>f:,I~' );
define( 'SECURE_AUTH_SALT', '<Uai6KhR!mef:LsO&9/*HtqOVCL};UNu]!grlLIGBuNM/0^X%nF!4b@0)317FD-R' );
define( 'LOGGED_IN_SALT',   '!}|2o[bixhsOHag5D^+!xH!]bABCO4=30x##K: 0ST. zS1M]OF-4;Nzkri*%?K>' );
define( 'NONCE_SALT',       'oCkV$gOtko~+<&<s2adVc[wuJ:nr/G(VN2B]DwqU.J@_UD8P*{7?(8Gpuo$QwqP}' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
