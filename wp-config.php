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
define( 'DB_NAME', 'development' );

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
define( 'AUTH_KEY',         'RH|j^~Ne2v,A%!cV*-IWaj9-G(#Y71~I;o>Mci}Y-Ol^4H|{5U:Y?lPR{E>DIhy[' );
define( 'SECURE_AUTH_KEY',  ':xD^l  LO(SR(|s,Na=zg@MADOIiQ0)S)8DZlM<hR>0^S8lRca0^]@~H:Hg+Ewxx' );
define( 'LOGGED_IN_KEY',    '0p?L(.!O4iG>?PhA-WlMD<h21r.e/5;!k^0Qh9O0*}o7M3)/w+hHHT6G_.ZY:5$H' );
define( 'NONCE_KEY',        'TySP pqubk9jW,eQVQqO/p#>p:^@wpl&v90agHM] ORc!_Dck%lnb.g klAoJf,|' );
define( 'AUTH_SALT',        'qD%d!]`w[p7Lb>cS2v/PzzFdPLaLThOrOO_s4V0R9c;L.pv~5_zcHH6a)q8yv5[f' );
define( 'SECURE_AUTH_SALT', 'B#]iqU*V>QrRU6&261yPf5T44()2AiTc9utMmvk(R3xgou=e.;bg}iL&L!hGg%H.' );
define( 'LOGGED_IN_SALT',   'k[l78N8Fs1L8C(P1anv/G 2*WW[{99IN[+,q|8W(LZp0dtP*e;&$OR!yI>Ku](;O' );
define( 'NONCE_SALT',       'U?N-vtR9qdr*8v;Rt<$.H3LBKagSW#6SKXJzHDVZjIxpzb =Dt q;<.$:M+CkT~(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dev_';

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
