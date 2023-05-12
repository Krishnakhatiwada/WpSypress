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
define( 'DB_NAME', 'sypres' );

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
define( 'AUTH_KEY',         'XTBJm D4}aDGBkKdo]F37ISfoc :rEZpJ.Mi)U1&GEh&K9*. p3j>Ngt(B]<#g$;' );
define( 'SECURE_AUTH_KEY',  'h a]fHlHBbI3LWyj1;C0%fO>?1a1l!fXgmb{t0|gf}H+j`b_m%6HO_*wR7I]}8t#' );
define( 'LOGGED_IN_KEY',    '+EQBD3{BY2y7O>W3FX!=XdOhMi/G{a5)_u^-0B?@s?Un[C`/<4G115)gVraFL2PZ' );
define( 'NONCE_KEY',        'u92(BDxg-M8)oH~CDztq/ZfM(;ydYL2+=0rsk!$:%h!V^mN ,|A$d6G[?MKz5tS_' );
define( 'AUTH_SALT',        '4:.sZ~Q2)(*av(I>A^`Nss:L0*9|6[BVo~d{o5Ap,Jf&]?fiROE(37umh|d^kYF%' );
define( 'SECURE_AUTH_SALT', '?~rX=iu]jXWBv%@d}lqkw8C#5Nql=Y}3C q|o_oYI~-6{0m.:Ac&RPixIQ~,Ht-J' );
define( 'LOGGED_IN_SALT',   'PHO]|FhbA~[m2SkcU(|lrbRBAz(*(JxE>EoS(g{8TN,ETGQsbdhlX,Mw^[o>dYn-' );
define( 'NONCE_SALT',       'peG}ta!Vo!|JkmnjSe8u#mjz2.Z4qBEr(bd?:L(`7V5oudO7 : 03IuEi6A#gwNX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'syp_';

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
