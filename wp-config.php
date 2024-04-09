<?php /* BEGIN KINSTA DEVELOPMENT ENVIRONMENT - DO NOT MODIFY THIS CODE BLOCK */ ?>
<?php if ( !defined('KINSTA_DEV_ENV') ) { define('KINSTA_DEV_ENV', true); /* Kinsta development - don't remove this line */ } ?>
<?php if ( !defined('JETPACK_STAGING_MODE') ) { define('JETPACK_STAGING_MODE', true); /* Kinsta development - don't remove this line */ } ?>
<?php /* END KINSTA DEVELOPMENT ENVIRONMENT - DO NOT MODIFY THIS CODE BLOCK */ ?>
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blueorangev2' );

/** Database username */
define( 'DB_USER', 'blueorangev2' );

/** Database password */
define( 'DB_PASSWORD', 'UJSxbRzgyifuzji' );

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
define( 'AUTH_KEY',          '*s8cvO7U>rch!d`)$Bl#8IW]QSQ6[Ew/D3WFMs] nDMf[Waj_.dVGmfiVIx)N(SN' );
define( 'SECURE_AUTH_KEY',   'V)<-6%:*Rke3v26wY5UfJ|SR=-r{3PO6#pJSTlJkU|j,&5:^;Hi{_; o)B(F|S%/' );
define( 'LOGGED_IN_KEY',     '?7Tje+JPrdNToFQ[MHq1Ru&P.pUgT*?a(|BsR Hgh{=%q^smc@.u[= W)Z :uOC`' );
define( 'NONCE_KEY',         'g6yn|^xHcS-``dFdt#7cX[av9mqqk_S(#mLkHskz$I;rkIf rJB4t)6xx*WXk:Qt' );
define( 'AUTH_SALT',         '8Ei%wV7FRuAH7:Ux1n7z*>wW8vacB/[o@GZK|0Jq>cEg/Nt_)5vA?+MxeZ.>gARP' );
define( 'SECURE_AUTH_SALT',  'b^_M/OhP/y>nh> ucZnVdscd2cI uaTfTE>PY~Y&iYg+a+|/e{E6k6B b=v,e:>|' );
define( 'LOGGED_IN_SALT',    'PMOyqvhiKMr/]qi 8M@$Gw9t#Wa`H+{mjGwV$bvHSu j(_n9Ig.:pz_){zj&A%[P' );
define( 'NONCE_SALT',        ':A2= MBf-0bc6WKdCn5iy?KPY&)GB-a>>uj)Flc#XYV}H7M!_V81|JT?554vU:ke' );
define( 'WP_CACHE_KEY_SALT', 'G6#NG6O5=4L{TVQJ-sIW5pYaDh;9JrU{E)s B9};_b6Q#-k}lYQ+IR[wO=]/?6Pp' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}
define( 'ALLOW_UNFILTERED_UPLOADS', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
