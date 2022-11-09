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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!pOjd4)Y1NGY#G&)%2KDamZeXwjn6;WkXJw,vcwd}~clNPuu9byKF-nts6s7ZRX5' );
define( 'SECURE_AUTH_KEY',  '!##7T~fhBM%mI,WTlBpHXk=zJ,)_{aYR&*713@*Z,sET[ $)K/r|]7)F/n+3/*`F' );
define( 'LOGGED_IN_KEY',    'Y)6XPcC1#fHO?|RV&HJ*f)N0e*|9Y#ijnY~D@$LT-4_M6i-c;oxI=W9<wY9C))+~' );
define( 'NONCE_KEY',        '=-BXDbm.F;BmZy$ELs8>-5HNAZlAlK34ak5u;Q%ox]iHRPKB,,]W<LK~ob*i;q2F' );
define( 'AUTH_SALT',        '_!;eMk=su. &B2`|~=TZw+6#B?oNyG4)h+pBRA#MdR`G;g#C?LZ<kEw]4>c^J5[o' );
define( 'SECURE_AUTH_SALT', 'AkyqE+%R2d4kX}zt*zw;9U|e$-)+^96WXx)(Q:B8L^7U&P59f^#k#^g<TNdwjd.[' );
define( 'LOGGED_IN_SALT',   'xR^XL~,AH@IK2 .0ll+=Tz2(hVG%B0I%J,L,uLkR-Bh}Pw+I]m(!1nlGH3}It_1 ' );
define( 'NONCE_SALT',       'bT6 MwVEQp7W7G[8=IkJ3S+D(VZ= >w^Ox)6zR6,j+MkNJ8fB<go3)me.g89uAqw' );

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


