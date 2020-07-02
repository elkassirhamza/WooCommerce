<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '^3NBSMIm#--%WZG7n@fL7bAQY=sDPy:4p0m5(5&Mglw1<Y;)5Tytp4%M^yc {#Xz' );
define( 'SECURE_AUTH_KEY',  '~9p+UA2@,xaER1[Gm-:=}?d//s`<^D9yzm`3SXzd~5;}QR) c )1h>pE2Sj ]~Z]' );
define( 'LOGGED_IN_KEY',    '27l7P%GM$SheZ|INY1U #:,&y86P5:Or3Hf~H%<e` CTZ,uf}@6-NIsAx%2Q7:r`' );
define( 'NONCE_KEY',        '/.pBm]8}FMH&^c<Qrvp^mb>_/J`4Ja4e8YZPz{VtUvzZ cB]3%%w.dN@?8{@f>si' );
define( 'AUTH_SALT',        '{?(/+>/plNQ|?4C69cPvuo*,HXP^B[nMC[<AGu7/d]N?+zxQ=8h8#9H(P#4c.+]T' );
define( 'SECURE_AUTH_SALT', 'Cpd1-k%0lt,$U<Mo<W]{p4mw-JU 9l|v?S$pkfLnyXt1Hge~vIv3q/;iu4n:RM8l' );
define( 'LOGGED_IN_SALT',   '.PN]q[sZkg{exD#Sz#*DRsXw!FdZ)x@xYxUz(ZI~t!ES~MX`Di2h`sKw0*8!]&tJ' );
define( 'NONCE_SALT',       '(bn!ukl]m5p/NkRa(2=LF657iZyBjw?o^s|E&Q2lISBSp&l9oh&r2NsaV[XAucs^' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
