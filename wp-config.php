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
define( 'DB_USER', 'wordpress@wordpresspoc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Admin@123' );

/** MySQL hostname */
define( 'DB_HOST', 'wordpresspoc.mysql.database.azure.com' );

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
define( 'AUTH_KEY',         'D;sHP<UyrE0U`ck6yL>5I@lrH<<$zu ).D}mWGYAXc~mB$bV;pmiHX/CO_{!?xJh' );
define( 'SECURE_AUTH_KEY',  'tef+8!K@24Gf%!./r(G SWPkT[Jh*bAZymmUp7Eql+0`t Nw|V,+L<5PQXcNF)bA' );
define( 'LOGGED_IN_KEY',    '``vb_)OG`,1px?$P-QQ|Gt[W<_zImQS~wlp2g[;~|]y98#)EEW/Z@#qdOwRXtCYh' );
define( 'NONCE_KEY',        ',E=|2{s.3V`,M,)R4C}_uno.+:uQ`zC4k-44kUA=[gAjX`4uJl8mU~{>@IQCH,-h' );
define( 'AUTH_SALT',        'MVHv4cu2T6.>^d%e}l3]qtkauWN0L35Q<c^MYsOAF?Y2*/pA9s5S??@(`>)x,kr9' );
define( 'SECURE_AUTH_SALT', '++Oad*-+#^:i~$Rd1<%Y57MCNQfoEIa3SdVY:L{Uf:/!4&7`H>lEefpXwW}{[K$C' );
define( 'LOGGED_IN_SALT',   'i>bYjFVv1D2IoO3X+hVtC+5bB$)iMs|gKptDaZ#~S.7~x}`wLk,WJ_Z.< l,A]aa' );
define( 'NONCE_SALT',       '?%tYjiyfbNK:f7g(_E//(,5}tQ0[IV9.!a~xziQ+V-geYJTJagXNHo)wn{abDGp/' );

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
