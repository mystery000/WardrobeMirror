<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbs13066359' );

/** Database username */
define( 'DB_USER', 'dbu4080370' );

/** Database password */
define( 'DB_PASSWORD', '3AQbvaq4bwlX5K9' );

/** Database hostname */
define( 'DB_HOST', 'db5016038494.hosting-data.io' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'RsC!]Nj91Yu@U5xQd:+%q3d4<iF:erXy)MSh@`4OS}*55.e!>Y&[a2foFstyRp{]' );
define( 'SECURE_AUTH_KEY',   '{3a1Dg6YzjV4?ep~Jb9-9H!Pm6DZ@ -La(DSPo`@f?T;(sD#S :P),s^tWt8#QzF' );
define( 'LOGGED_IN_KEY',     'B|LP-1+cJ?/N_ *syWJL/Yj7B7r~yXI/(s! gS])se{?^4(%6+;b`~(lM+:%,mm{' );
define( 'NONCE_KEY',         '}p3j{T~IT/@sKQg[Mv)#F&V$W)<<=k_@l7Fjn{<<BcgSF Jq5}&3hbE4C(D6,;U`' );
define( 'AUTH_SALT',         '2l4WD%:;zJ/B8Px_|fi1sdYlV!0l,~5Qp {FuxF A)eF&rH%xw:0$k{tqVte9bo:' );
define( 'SECURE_AUTH_SALT',  'q8Wv^JIFX&@!zaqYV=-#qiNOaSE[5zjZ?_w&en[PE4REuwXqf_:T}F*VJj|f>,{T' );
define( 'LOGGED_IN_SALT',    ']Iz)AQl+tcR3ux?Sd@xbeP{3?i%X.CLCfTyKIlkB,D=j@B-do8+15LeItjT<?lNm' );
define( 'NONCE_SALT',        'ufdf96C%+pXuk88Ql!ZMV-_7M@P2dtSD!Ch:J.GiClzV(9YGbmd=#?+=N3,+YQ~Y' );
define( 'WP_CACHE_KEY_SALT', ',4k3b_PqR!>A/pU IuH-Gqj_u*n)K#|?ZWbzl%DK^.v*;m|;rxZ+us2N/B$H|?9,' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
