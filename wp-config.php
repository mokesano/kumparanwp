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
define( 'DB_NAME', 'thec4639_umparan' );

/** MySQL database username */
define( 'DB_USER', 'thec4639' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cpanel310313' );

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
define( 'AUTH_KEY',         'Ge)h)AqG@gC./1Y};b}ee2$jEBXo9@gakzZYYQ|cRbBGyxx!^C+_9pRi03T5|%Xv' );
define( 'SECURE_AUTH_KEY',  '!wb,nRBpu8H2|Di{6&Py|*qRIp:>Z4pq^+W`$Q(HBI?d-m|b~5!/NEJ~?~<!vb,J' );
define( 'LOGGED_IN_KEY',    'F 0T81m&&>Ob&B[yENNZj<62C0p&R&vhX!pQ}odzpf%7N(C(XudW$y^(4E9?7AKG' );
define( 'NONCE_KEY',        '>;MFp#v3Iw%{pdfH8+n{}P9:riF#aw; xxz5ATFw]Z4$! (r9S?pSs/N_WDJf(_5' );
define( 'AUTH_SALT',        'n@K)8-~dlJx@:!Te{2.ifch;;/IX<<qEBf-C*p}@l%l],[^^DoT?y9BA:xL5Dr `' );
define( 'SECURE_AUTH_SALT', 'fII/>hKjYHD}T9E8w1iexg6tbrY[mV1Jv[_$}3A@iHF|=;*6U{7`b-uK:+FAdx;#' );
define( 'LOGGED_IN_SALT',   '8/0w;HR7(9ST}ju>1iTZm]KOfKULVdESS Jk`1+$Kl,LyBV?AR`MNGw.Wg|;*O+<' );
define( 'NONCE_SALT',       ',|#6LViKA%qaG?9+BN(=82WI7;Vz@Y(+&W<F).sEQ/?3FgDHtzLw#wWBK R|)f X' );

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
