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
define( 'DB_NAME', 'lab' );

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
define( 'AUTH_KEY',         '979u~:D) 1ka #}=x?}k[cSSo1]T!Rh*21W4xt~um_7^yMW%2!EqD[~@SF,y_URL' );
define( 'SECURE_AUTH_KEY',  '=tjX:pyPalhQSmZp(2Pp;@6b3(HV^^zZ2@Uj$[Srg .2kD>!7#`2XzTk%CWGKiiv' );
define( 'LOGGED_IN_KEY',    'DwG6:`bRa?{.Q>xo1;uxu|}8)g9SL(*Q!&*cR1}2&BcDS!&nIz^j$O1zb-{J|N{=' );
define( 'NONCE_KEY',        '}8$Ivzw)@@jJAX-3@|0g-TVO!xj$pm9in{>`NX8>-l<HkDi[Ga7L_Q*QC,AS?``8' );
define( 'AUTH_SALT',        'w?r`^k88@&5*rhe-&u Az[]gQ[%X66y@+?i!bRmzu>O$0|IFc64 dK%}?i:$}Dl~' );
define( 'SECURE_AUTH_SALT', '!pqJ+en|blZ-cyRMcFh|qp+7w!}Lm$n+{AL{6: b%Q)6l[bD(O,TIPB=J}*]b(w]' );
define( 'LOGGED_IN_SALT',   '!GzkEA6W0ZSR2KCH{z_1istN{c}:t?tRY: hAuhdD}$?1x9P$%3IzwL<R<AnPL| ' );
define( 'NONCE_SALT',       'o=gGplm?u8CZUu8_N:*;_-~9LZYF]igQDTsTWeQxI0SWB]CzsLs5KTk1azLp[vKe' );

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
