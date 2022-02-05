<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'shirts' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'r%stIL?tqPzLQP#o_p|23B${XPMBGWUk,>H&XGI6aqjeJ@}qqw$lGJqotZ1*(/ej' );
define( 'SECURE_AUTH_KEY',  '%}x5{hF}G,|+oPILy*<Vj#gr?iGT+8CwY+Qg9xMz^U)Ay]tpiDQCV9~zV4+d*6_+' );
define( 'LOGGED_IN_KEY',    ')^K!c=T*XNN^I57r7%A.O3,s-tJ8.)Ln2[m36r=My0QZ/!8W.b(Q5+pp3b{wT&y.' );
define( 'NONCE_KEY',        'RdbpvN[ 82fQ;.6JYH8$DYy$8X$]y0z+PaTZj/:|^[;AhKj!xF6,LYmx><kDNBy}' );
define( 'AUTH_SALT',        '#DFGh+TP Ca6.=T$5h]SG=A$6!J`Er^dg&T?5~K2*D54%#Zz&<ncY!12F(z(]u[_' );
define( 'SECURE_AUTH_SALT', 'xHMQ}iMf=~</&R[5N:0q%/oqu)GeRhR8~m),Zwg8u%<i> X#:p=|#+$2pp%-vK$h' );
define( 'LOGGED_IN_SALT',   '@Hy9t!o~Pt-n24UuTd`8I8:P9(Cw]VqlQ|A~~Wt~)<joBiV>%(8-]k$pLX]n<v:O' );
define( 'NONCE_SALT',       'rLzbS =#fNDr|4ndEwDwQfv-CEcckb9>=Cf$Wi@T&97eH,CO5BU=.qwf$tn/JP*?' );

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
