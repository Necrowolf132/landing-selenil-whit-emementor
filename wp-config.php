<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'selenil-local-1' );

/** MySQL database username */
define( 'DB_USER', 'loki' );

/** MySQL database password */
define( 'DB_PASSWORD', 'RRjj88j$$' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'poeHs^xm9Yf@kTiE3<4ziM0P$q9?PVWSVG&E$n%Pn{:i%jd]}107K3<, >v_ Kx0' );
define( 'SECURE_AUTH_KEY',  '!R4J4LwDU`Lsh;Abq<$Lvoe{z.VH_<JIk(]u*>oQ2My*jSyHp4K=DB$?rZ`AZbwG' );
define( 'LOGGED_IN_KEY',    'dA+wJM|53z_Kvvld1wb@@?vrHTKefdi1}Js{am1cuY?AyZ7_ 8$?{g11=B7$r#$L' );
define( 'NONCE_KEY',        'MsM$Qhu93;bt>tIhahcBS}Sq0[7%&E~=!d&Q9FB]!%2h+UHplRr(?&1sMS~rW`hG' );
define( 'AUTH_SALT',        '2da_fx~-tr6:rho>`c&~SA^=clA(%G|!wx`m3DU>[U.^b+9wlk-aiEc~x2t)+kao' );
define( 'SECURE_AUTH_SALT', 'XK{CXmvRo_@^$9QW7^<<4YdmY*A05vR:x,jCX;U,I0|W6}tOX9OQ[^iXWSNSx .1' );
define( 'LOGGED_IN_SALT',   'TpF6p.S8z=MpOV%>]{Sf+*+91TbnivmnPwF|c5 ~PQtC]D&IM5@( 7^J*E)L:$Xm' );
define( 'NONCE_SALT',       '71Go<!rigevmM5gC%:CZS`q3#c0c-hQ;+@<l[2=9Ma<1N~]xnNgzLUm[Yo2_+#] ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
