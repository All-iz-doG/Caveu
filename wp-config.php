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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         'BiGP]>Pp2gBYK-i<zRo>$4k0bDacaYut,t!R%ux(/par*$<AsZC2}V<Ivob3r_iN' );
define( 'SECURE_AUTH_KEY',  '-7TTlE?D}Oud:uZ^p1oLZ_dNLH4<!*xGMDbvZZui]K0I@Zj|R,pJRu#DTw0o(5%2' );
define( 'LOGGED_IN_KEY',    'gHo{b$L2y=Zp;mBi3*5Y>{g2zVcXcF1=e[zY.;Q#_53.Q^Wv(uJx2b`-z78YEC45' );
define( 'NONCE_KEY',        '5Au$k=MyY,;bCN1E328kRI+o]&V$;pa#!!EAinc]:Zcrh<?K1XE+PZawoA$*<+cx' );
define( 'AUTH_SALT',        '<?Q~cDrt,0TaNFAX^J{W;qYf`3:v(r2=jLObMEk_T$QU`Q)%^]`Um>ZJ>r$n% 7 ' );
define( 'SECURE_AUTH_SALT', 'SGus/qKB0g=;x|~5+a]j;EITp*jEu>599B}EtNDNc=WC89#]Y:kdfYmTOn[u1{L-' );
define( 'LOGGED_IN_SALT',   'c,OHM-!}JR2e=tZl2g8=IH<=%%RgZJa`5]& ` -3xA+,fHf!q+%2=8]WmOG PRF$' );
define( 'NONCE_SALT',       'W,sUKL3h]y4LqQI>&WFQ, BM`&8Wa1CumXWm4F)6Q-KV/E5PfuWVpfdrAPD:~q>2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dvd_';

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
