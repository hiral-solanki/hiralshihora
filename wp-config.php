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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hiralshihora' );

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
define( 'AUTH_KEY',         'Yl_CyN{:,0SirPIf;1/z !x[U#]@R%iIvz[bDRT9#_TR:W0m3@wWPHN.+mpN.VR.' );
define( 'SECURE_AUTH_KEY',  '}xP)o S9jhZ%(OV. {$]Oh.fI5O[J~uKdeE:jthFy4-qI>QM*n1>O&;,`E^3J@$c' );
define( 'LOGGED_IN_KEY',    'D%UWHJP)%]OT=;7|R>A`KH{[+K8AxQLw?JMZu[3c#-aJ&HzofsXZ*&3(Cf={HM1r' );
define( 'NONCE_KEY',        'M4<L3^}@*l5&>a?_Sp^bQL0PnUA14iGB}xSd4r0m^Vji@%9|}_F6agu/iYv]J=^p' );
define( 'AUTH_SALT',        'D &L+D*QrBbU1`].g}Y6Qt5.Vn4s/Q=3<X`KG#wb^e77HM#|dH%YOkEuze8#(,NT' );
define( 'SECURE_AUTH_SALT', 'P1gR8p?z69oazadR<P9Ap<==#+e:tlrq{.PV;Kq`e_x%w-Va d4j~ODlVKW/dXI)' );
define( 'LOGGED_IN_SALT',   '*a^v**dVeg4s<VV.]E>X~C2&1zP[$n6C(CLITj^. :V4)%0]v?%mFY5TCuludN2u' );
define( 'NONCE_SALT',       '6+vW8.PMXszd{X>0cCshqxqJkn]Vd8M;BOr~8![S|BxcimcIZua=4KB_s)EOQCBk' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
