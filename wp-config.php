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
define( 'DB_NAME', 'caveu' );

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
define( 'AUTH_KEY',         'u|!?{<jl!A2 (c%DfUf[!/g/F~$R/2:73<K*4%P8#G3 [cDqV`Hc1P`7>pRerq89' );
define( 'SECURE_AUTH_KEY',  'KSUvsOI4@@cqf`]`M[>n#h-60Cy6}s@Z==8gU.Q#k3l?w{m xx|bD-sJ]WIOrD@J' );
define( 'LOGGED_IN_KEY',    'ZrG8&DQ2@c]@Wu:W&ComZTt(aa),(p3>*q%PZ]m;Y.#:H]]u&D>M]5sP4}B],|`8' );
define( 'NONCE_KEY',        '%uJGaM}kr]pm6L<an^jdE|XtcpRAUM/m}6>fjSdm`dZY@1.oi2kK4&?I&+fmcR.P' );
define( 'AUTH_SALT',        '*28QS/@FTnG=cm<B}OTh/oQL)I17mg@KZ#%5!nf(b?%eVm_lrpu[DM@G|iIiS=sS' );
define( 'SECURE_AUTH_SALT', '*#i?pD%6E<`xZyVTK>oxO15D_{S-cHq4wa&f:ZI%_Y6iOGv?k>A3d(ClIKb1Irn~' );
define( 'LOGGED_IN_SALT',   'kT]W]2jlfLf<:7K4~{v7HhOKgzR_{@=@cI?cUiiB2oTaDT$51u^{qPPxKN_j;Je2' );
define( 'NONCE_SALT',       'K/E9NTAN19ZkL|{P~,kvTtuQBFtc1g/?2F!?/kE372 5w*oldOz;AdE|k=C]%eBM' );

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
