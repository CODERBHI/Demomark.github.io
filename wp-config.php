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
define( 'DB_NAME', 'marketing' );

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
define( 'AUTH_KEY',         'o%TmYm0wYxG+a0%V5#1T^ZJ=hVE7L7o}03-;*e3B1:+KC*#](j@Rks)*W>n$&D;o' );
define( 'SECURE_AUTH_KEY',  ',kMyfo5{UKo5+&hy3$%SnwJwH2a|=`m_~cV1Jk_FYEliFW2Wvmd0gtJ&v7%J TWu' );
define( 'LOGGED_IN_KEY',    'Mpo)ny?TguQr+&|sWoHWYg]<>`&3ta%87=$2A/aC[iFU!VMkQk=foCr@9~S^T#z4' );
define( 'NONCE_KEY',        'aYiFA4-)8x/ro3_g DOZv2,Wh{*q%ca+Hyp&8RJ{|rIFUpy0ttP%Ks|?aiC2apSK' );
define( 'AUTH_SALT',        '`TpSb6$jTEnem;GmfWJ>HmBB;dUHY85G>:SKgn$$q<:P*Xs~U/_i#j&&(~*E6LM8' );
define( 'SECURE_AUTH_SALT', '`>+cfft<u&XTb:F%,Ad)&Pden83 c7299bz-bqM@9Q:5cH/.tSG%!S8Lg|i_r&3D' );
define( 'LOGGED_IN_SALT',   'f!2PsI>J6X+l6hCb#@H0E[5I$+zD]M6<=w6>iCpb!i|EgiSng)S?]6IS tTn|B0h' );
define( 'NONCE_SALT',       'sN!1|Qnkr}(GKlG[Z^iT2btDsR>^?{1sM9`#M?<;P6@<lTbNo$1}QCoOmP)3l$h(' );

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
