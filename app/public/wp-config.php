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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'xpmL0JdimDS;(v_s:-s1`}w[)i=@dS:7.qNL*(a8j0w<%3)K/]gidZ[R9KvN4Ovf' );
define( 'SECURE_AUTH_KEY',   'PC~)4XBvrJP3~<P|OoW}%Hkk.@h8D%:QPALUPLnYM7QMJ-MYtJ21^G=?5+PB8#Me' );
define( 'LOGGED_IN_KEY',     'U8{JQj#z`,$.mJ=l/S$+Yh5e9~m/$2@#5_)gGfQ;jcGzCftDBm6.n@z7mp<VVt:c' );
define( 'NONCE_KEY',         '>0iXf`?UDwmyk*;gDW}u_W]@A_P}wf2]s0a$$pWh?sCYwr=y,J`0h TGJ,3MM&1N' );
define( 'AUTH_SALT',         'FpPAoNf6N+P|vN2xdpM4=zTHpX0yRAg5*9):]&HFGSb_.-Gi88J!Y%XFVCDt_G@3' );
define( 'SECURE_AUTH_SALT',  '4L3t l3M]F6wZ.B9z J9LS[j8{8CKR<>>=dpW;AwT%.N?U{71%=:!O:v6{hl(Jn^' );
define( 'LOGGED_IN_SALT',    'k*C]b9ar_Yd`]_+0C~whFsQ3(wvkNRWT~)4dn~!RlE6V1||P[Tr3`weK,J#2aNNj' );
define( 'NONCE_SALT',        'R7>h:WSu5M4gKXL|R1[y^&b~+DTu=.C9TRPl!F2Y=zWpO_/Rw{xx>+S0H}MUvluk' );
define( 'WP_CACHE_KEY_SALT', 'jTD{~+^P.dN>G6VqrvR+sW0)kYIpVH&A7~-AsiVfrVPQvdTXd1K4SV1T4IKgV82U' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
