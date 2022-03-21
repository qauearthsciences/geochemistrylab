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
define( 'DB_NAME', 'geochemistrylab_db' );

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
define( 'AUTH_KEY',         'HqqNQ;w|G,}y:1/zvqV]v6o;ngH5#5wxLnZLiNm901Y}@0l~hen`D$+gAJz?6dMx' );
define( 'SECURE_AUTH_KEY',  'h1,M;,VR: ~Xg5Xg@ZOm|ww}C<kn&Z-5AL=dQX/wN8CP~UCtloQ1[G<&Q=Z30#n|' );
define( 'LOGGED_IN_KEY',    ':<[1H,w4_qRUpk cgORsW#FqD%fT:[p2Ira@R<At:To^A`2dGiO%DwJtk|7P*8%T' );
define( 'NONCE_KEY',        ']|Y(+&8%EE*u_YoFVf}PROJX1zKfi>i9o }{Q@>FP88LVXScG{Gj+s[O?y^R@z!R' );
define( 'AUTH_SALT',        '{y;=6}8Q%8(Zi#hEItWQRRtb+@O9_[Xtt{{l5dWT_QBFqYT]%Ey8c4j/5=f4cMHb' );
define( 'SECURE_AUTH_SALT', 'uS(3(jABf<L4/=ZR+i@?G:3XVO#[e^!y4B;f*xbBB_(.(w$5(EHQr:~DS91N^CRa' );
define( 'LOGGED_IN_SALT',   'f^=|Pbs,h~hx%:=>V7`}kIH[J&>R`r6/zxeUH~a^>,@]lMxyK@8`Q8U5X79wfErK' );
define( 'NONCE_SALT',       ')=^@=Vs.,AoRv~BtY=7{a[L`KOv.-V[{500bXl`O[6%*yt;J Z}9AW=_NmAU;XjJ' );

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
