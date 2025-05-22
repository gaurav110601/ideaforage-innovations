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
define( 'DB_NAME', 'ideaforage' );

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
define( 'AUTH_KEY',         ' p3g2e9vs5y}H7VhRRfq3fWULbN+2<X7ybUi.urV/L_>WrL[4q*w4Rp.hW12Et]t' );
define( 'SECURE_AUTH_KEY',  'LaC%;8qq61`7*|lI+s0baN++s=F=o4vT}(tn%UvsjBBuw(YA[`c3XhSK*t:,f+af' );
define( 'LOGGED_IN_KEY',    ';nb $r3%sA0kmazCTyx2a8BI]LJVCAd%K T5olcTab{V:ye(C)9@dcm};gbxmaUp' );
define( 'NONCE_KEY',        'al|bi:[]`m{R%ei@(&b|:MT760QH/5ZmP-=9abkhnK-y~!)(ruu<$Y}]WM[*0=Ff' );
define( 'AUTH_SALT',        'g%?)4vB/V{72t=^w|8 L;?g;h5;?lyhyFef!D|q@>yUtet$[y>bB|*$@x=$l|}IX' );
define( 'SECURE_AUTH_SALT', 'USQyE#pjO7,*8<:MX7Q d<<z7|TrjD))T=Bf_>xlE:)gQPaE<l@VovwIb{$.`CWN' );
define( 'LOGGED_IN_SALT',   ')H$wYAjPSr0YR&VtmV` s/n}.85nH;iM16k6v+zP?u%/7I?8;Q4EcvG,5arL5,.6' );
define( 'NONCE_SALT',       'FoJo; 9e[@2@y,wz5wkINzUoKHrinp(#X.QZXWrYp7@I?luf5,g%0S )ruPC^O/3' );

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
