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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         '[pG/]eKDwsbcVC+2MR05k[v}_.%E/s%qvQN7jZ?HRwgX.8{DU{[8dPA*)`}k}*Dq' );
define( 'SECURE_AUTH_KEY',  '[rOu(./ZM*GSl`4go1]$Ntqoq4@kkBcujQT0UJD17|O1~|JtkJ4GSV4j?D?.*^_U' );
define( 'LOGGED_IN_KEY',    'TCJGGs57^@H[u]PSk5@Lsw|~VZ{t!iX}$92<D>%+6AsLs NNQ5K;WoZE5?O-<;,}' );
define( 'NONCE_KEY',        '`6 RpYH!n*<#sN;&Q4]^`6h! hnnTMAoo9uHzMe4&qOEF!Ee o93p9:pG7+BU>G=' );
define( 'AUTH_SALT',        '5?P]X0O? -xWgjw3j*,Z{9xlB5G~[Vp17%Z?y.>7i>.Imj8HwiBVF=~j!LxV *Vc' );
define( 'SECURE_AUTH_SALT', 'Vh4%dk4x|AL{.I+{0~</bKkfgNY46t`N9/OZ4Q-t)KtZouVZQEV0$ ,Zi!lACRc`' );
define( 'LOGGED_IN_SALT',   'p02Gn X^`h[DbNTs:XKi7(!YuiQ`0=gg[rkQ1%gk }W]lSJR^Aig,mj;)6w5/d|9' );
define( 'NONCE_SALT',       '=NUx;5BW?GR ,_F83)H.|U}Qm0&7J6Mi-G1h^,<g8hKs}G7*U!RR(&WAX=]OD1P~' );

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
