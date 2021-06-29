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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '=8EnAx>9s@Gplz-[gYy?7?{RPfE4RC3E%CSwW2cDn2Vx28^ul8N/^0L`+)J`On{e' );
define( 'SECURE_AUTH_KEY',  'jn vV!?1yy@WP$vX[rG$]bW7Bi}RD&M75l27^*#F/cRO, `ETVFj@231;!`!!aRf' );
define( 'LOGGED_IN_KEY',    'GeyaK@1{PdND4$j!#~beWFFjd/,Wj]m/PmSiAi&iD/BIZA)wo1`XG9Jehy>0E2TV' );
define( 'NONCE_KEY',        '-WZ 9d&5en5m$K>qSZDO:1s_ai&5!`GzH/D}a^97@xMe?J%Te;SmJ_pAlx{u3-p*' );
define( 'AUTH_SALT',        '<LqM-[qR.#hu778nQo]u8`~*k{Ch[2,b+t-ClW@H-w}4:bO3{,!pM~@APa,bqyO1' );
define( 'SECURE_AUTH_SALT', 'o)&_62i=eXR`@WV0@=MmZZBcR]b:-H4%Wtx8 wJ)&u/9#a0e5*^+rDWeq!wI{CvT' );
define( 'LOGGED_IN_SALT',   '<6Vv52Y/.Z$qi*St9(hn)^IRX]RK-i6vw9*0U$dp!9!x5LZf6,EXgN(MWoeCW }=' );
define( 'NONCE_SALT',       '[d9Qon04lXQ/B0!p,aGB5IMQ:^EQ.ih7&#Dd.N{0~dd$gudZKabp/%=Lp^x0i]b^' );

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
