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
define( 'DB_NAME', 'dgrace_medspa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '96#hl|kWQ^F}eu~kLg9o-A,-Vc?-BS`P}]a_* -(l-:9L*x3R&gq;AmNRo_4=|,B' );
define( 'SECURE_AUTH_KEY',  'IbF)g*@noyy=Q:%c=;&U.U11H?S*:3)Xf#HUP|Kf$if3kA]rZJ~JlIgm{U/v)%dG' );
define( 'LOGGED_IN_KEY',    'xYKyuL7BgI-90cczNwrp_l:VqdG(HjLL={Y`,mLSOXT{S,TNa$aFlDFFHT+N(QeY' );
define( 'NONCE_KEY',        'MU;%H*@l/a,42vnes~1F9HOS%hR/p-T]~JHBlgiX`TD:1X84%I/Ty$Y[Q<|ZH6N^' );
define( 'AUTH_SALT',        '##[PxnF=&@$hk~)38xr6Y82KQR<79x(HYI0d[UiLKt}_,=<>8Cy]oL iK1!o?):u' );
define( 'SECURE_AUTH_SALT', 'A6wOID4O;CH4@KcypmE_A8_=iN>5~ZjdNXfctfU68<fWs__0x*IiJti&*C3h62R5' );
define( 'LOGGED_IN_SALT',   'EuH-#U&*z8Lp0`<{;~jx?|}O|L4-g@uL3K)PAw;MtM)lw;,Zg(X|Z?4~>=p7*BO.' );
define( 'NONCE_SALT',       '1y>g))c9MuYixh_tiCS[`>N!IC:5h y+1{!4??^>xeF3[,gh-NFAmZab$~oO+tEb' );

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
