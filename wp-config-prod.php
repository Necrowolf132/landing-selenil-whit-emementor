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
define( 'DB_NAME', 'u710220034_Rd9NI' );

/** MySQL database username */
define( 'DB_USER', 'u710220034_nNWPB' );

/** MySQL database password */
define( 'DB_PASSWORD', '9NvpjIE7mB' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Z[d>Ve%NVV[yWB!$!<h~w`AWgJJ6v,JPC{f5rxg<J*rJe4Wz~KuZ)FS2DCcXUjIA' );
define( 'SECURE_AUTH_KEY',   'k_c;z4oK~{VAMGk A./<nOC7sd/u7~2lZgdwx*PEF<Q.(dRb7?Y%YDaT}-GUaE 0' );
define( 'LOGGED_IN_KEY',     'cRotoZ$OK7&3`x7q?Egg?JzBxcDm,41ZMdD;soHHFNDArcNp-T^CLO|~}zG`KyJ$' );
define( 'NONCE_KEY',         'EqBCD2`O!{xJ&lw`r2wCrv$S6`1/8fZDlc_/ pX3C<& 2XFX}s C9616VAjG8B,D' );
define( 'AUTH_SALT',         '&z1NXim;-W9h6jJTpA6QvG;May^2VX8jup;[Jx&T9_x.=(iWg#,Rp_xUfA^A)=A[' );
define( 'SECURE_AUTH_SALT',  ')~$P0qb~lY=hqSEpW}P^S#mo]@ls9|Pj>->UO~%1nKa=2#FN)KZantain8zN0`5.' );
define( 'LOGGED_IN_SALT',    'i_h3cOArON!8y:|yw`fv/@q3D9VFQqzCuUYDSXv1,M#H@VUJ,^Lxw?p`o=Cy#HjC' );
define( 'NONCE_SALT',        '>VUJdVGXiL%qO`]:4(k`tS+=f}kG~s4PL-MDOv#DMf:~;jJQ?j|=Id/*SzNBAmy[' );
define( 'WP_CACHE_KEY_SALT', '+b{Z,-QR-pF`dVW:`A3^zXrPTH/`EF[`e2n#E5#rN,i,}RJnQ]Dy+^(,5^[pE3(8' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
