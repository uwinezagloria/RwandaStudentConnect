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
define( 'DB_NAME', 'studentconnect' );

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
define( 'AUTH_KEY',         'vb^!}Q=ay:g;wzY?M?LH;$$yRJLjJ(l48FkB?YgoNk*s=oJ(GtJp,e8.{USpl8HD' );
define( 'SECURE_AUTH_KEY',  'g=X8;}:<z,,S8X*.V_LBML{882B;T_#H+E>xgEDx|wynhaVZZJ #bv42E{.$]wW`' );
define( 'LOGGED_IN_KEY',    '?|G]8lOior[lBNZT#vsY(I-Un}J)SV0)OI 6-?WnT!`,L!]S.5]sB[:{fVob;u%$' );
define( 'NONCE_KEY',        'I*.F%IbsQjw?8%zXy YB/)q|n%{/4^W0;6wjn#1.o$VFVvggW/4!)[:XJ/7gqZ)c' );
define( 'AUTH_SALT',        'xNCare+_K5_NXW8vOz(OYtB(k3vEuwT(iEUuXlPjFdhyNX6mg6v#|^(}POlKlvYR' );
define( 'SECURE_AUTH_SALT', 'D2*,tC&I>yzSn9mu~Us7z}H:o&GXqbu`Ehq+YPC*_L?=K3r%Jy=U<c[9s>.3@wat' );
define( 'LOGGED_IN_SALT',   '2_iMhI$N9lk2m@X]q,f[a*#qbFg=Zg/f^>7XiWf=7_VyLIrxE1JhGFN_YwB:Q={a' );
define( 'NONCE_SALT',       'K<ntCy-2W~v|C7q@,ZW|BG(5PLN?oLpn$NMhu70#jt+P$}ja, iITmaT|7shr_&s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
