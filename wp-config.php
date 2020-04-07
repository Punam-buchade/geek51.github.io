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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define( 'AUTH_KEY',         'nsfI,F~o;WeVu9^a`U95#k<a+@|@&A[Hpn|xa/i/0|O?2YADfbs#N6;Y/ai,=-+}' );
define( 'SECURE_AUTH_KEY',  'LWDks@r^fp>pNx{#^$%LA;K%<9>qV$~c8W6% ?V<2y|EiKOY1a[$|oZ1Sna#D3]O' );
define( 'LOGGED_IN_KEY',    'K:;/lw<forrG^o}5|6C5fEA,#4#X2WC]R1jjD]M>GXh#O^3KRWJvP+/U_nT+P`P0' );
define( 'NONCE_KEY',        'AvAl=tn)}fml~$!)h]5}jU!6~8{qj&@3%tn?wOZv$9=$T-+3Kmk9E!bmk~m[i[wv' );
define( 'AUTH_SALT',        '|03V-OS}[4BX5dXt=a4$[W4}^@?NEIZjwSIyxa/*<2DRv5>g5flovAy-sr?r3Ql|' );
define( 'SECURE_AUTH_SALT', '({eCnC,Hgn)R`Uetk_ik)X=6HJY?cwdAc=7`lvH=USoOm:DxIb{NS8l&0-DwTxo*' );
define( 'LOGGED_IN_SALT',   '#/AcaHm+QX0S7EXO@Pi,B{1||/]u/0jp2`Xpb;*fzSGMz#de--sn?gG!o>WZ$N@?' );
define( 'NONCE_SALT',       'LgB((~W_e;}aHS#vn]_FTC=sp(>0{35FMVg$BExtqr|]r?gk3WQk!]@{MB7^c8kK' );

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
