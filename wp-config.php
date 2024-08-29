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
define( 'DB_NAME', 'malakfara' );

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
define( 'AUTH_KEY',         'j}8r%vz)*sj_ZznfuNr.#a6-,;,z,N)C^HEmB8?OU6dOu.nGsD<[pX fdV!m6fe$' );
define( 'SECURE_AUTH_KEY',  'iVt=gLtmPy~2lCLR6-At50Z{om`,WRAH&N_/7^xncg;Xx|YH(e{:ZzmP,MON<s<-' );
define( 'LOGGED_IN_KEY',    '[9nn9qgZ&+Y]x3cxd()F~0J-9!bl^5rxh$[Q4W6hl0J_E^*[BlksxqGTK0<+Q<^~' );
define( 'NONCE_KEY',        'wrh*%viEq~6mZ/^{{|}%3gecQ%XHdf@Y~TX6U@Qs3ztnd_rSA[Zw*k+E:HSFFmBr' );
define( 'AUTH_SALT',        'V |xH6xE^{v Osy.y)a1?hCLqH23v<dVW|R<NJh&p(Bx7LYq!nClp1Q|zLuy.^j(' );
define( 'SECURE_AUTH_SALT', '~ZgO2(xx|u_ 4[$j4@%Uy6_]huq]HI-JVXf:deo]mJw29D,PZMZ@R=Cj.R<$9ZHN' );
define( 'LOGGED_IN_SALT',   '6GZieI=#RWZ3gb!3;T>k(V5DN+?ww*4S&O9tX%tn9TAH,pA9H));ueS>|T5n`*~J' );
define( 'NONCE_SALT',       'Q^tzZyvQ,=}*07~ 5_GkWx*T:#>B*L3DX7fx2$e [%bD>k7%<o6JQP;tt#WB8{3V' );

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
