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
define( 'DB_NAME', 'wpstarterkit_db' );

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
define( 'AUTH_KEY',         '|N1fzM/0?lW`o&P8n-0GoIh`KF=?#xa`g5$B-(B!VX$dS{h^+DM73Q.!,h.KZtfs' );
define( 'SECURE_AUTH_KEY',  'lN02LzhZQ<H1B zGNNIPP:pG)u/qCJP`WeD>V:;oX &i+Pj;%L?8D*($c7L:nKIF' );
define( 'LOGGED_IN_KEY',    'bxh(+AU.7.R-BFc*f|rR6 _aTAW3sK&ae53O@cQK-;+Fky!A<xso^3R}aUl}<Wvt' );
define( 'NONCE_KEY',        'ZV/4srCy7Qr&gfY{7:-*xzF/hb&9PS8cXA}9GpGvermozJfpUS0$&Q&,[9f-9EMo' );
define( 'AUTH_SALT',        ')aAH]l6@B@gfc mqN|TI1rO8@8zfQqa5Hs:i.?h)5*uY*~nuyCs?sOl9sH4Z-v%3' );
define( 'SECURE_AUTH_SALT', 'aX*e7l#o2Q)@nbUh{tf{N/ucuDOZ57Ut95AHX:R>EbeG;{HPnKckq}&936;jEgQb' );
define( 'LOGGED_IN_SALT',   '4&oQ)4(Y?=wO4jz4vaF086_EiUQ%;?Z^huPVsxbc#A9vW~:e:RlL`F>.GyRNOl1O' );
define( 'NONCE_SALT',       ';[p@PO~1|RPOhA0O}tMr98)8&SpVehQSdad4n~*J_StvPmpB.;d/&QXi-nBAMGU-' );

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
// define( 'WP_DEBUG', false );
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
