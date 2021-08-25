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
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'ecommerce' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ecommerce' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '8zDU~,?$QIs~EKH|3vP GkC1iTRO/T>.OQ[f[!Dn;Y;<W5dAc>t3S4pAeJR7QohH' );
define( 'SECURE_AUTH_KEY',  '}=c0{57Tlwxi6oap}qdh)J}|q/=bX&Lc)^|fB&OdE@v_jx2V;0=&mtbJ^Z6b(8rH' );
define( 'LOGGED_IN_KEY',    'L`]$f4ct})|yXM=iWWgiT r>)W[#C4Rl%`sj`lc>J~Xi38@Pwmv98&l70L&UGr_:' );
define( 'NONCE_KEY',        'T$?3iUpWF]0t*q(b/:VR @vSQT-:!xHS*ka=WS<rXioG+*wD$Tmxf.{:)DA<io~4' );
define( 'AUTH_SALT',        '+Hp`)[~|>:/Q h{+v=.DX(Q@G~^8dJ/=$%+|J=BdRMi/B?o[,K3`WVu{H7Bx(v|!' );
define( 'SECURE_AUTH_SALT', 'Sg9~In:Pv#^b82n6Zu5#ci.sYot:?Tnt$~$( 7No9uwijb)V=(GI-:txpm:J]wnQ' );
define( 'LOGGED_IN_SALT',   ')}p)Yp1ML#Q16im!uR1IgJP,k5/Q=p{=BS*]l2^}-=%6qel@.a;sve}+i4WY_t~o' );
define( 'NONCE_SALT',       '<#ZHYR*YThIe_j*d=>cVSUJXS*3O[w&_P?bZafR!@ADt&,l>akI#hD@no}>}ZoQJ' );

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
