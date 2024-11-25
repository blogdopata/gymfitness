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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         '2p}a1-j0DGQo_BBjPR[zEEX6Fkp=.nHT(Iw2{I5Db(6$;V7Es]q3s:e(_CJ=6msa' );
define( 'SECURE_AUTH_KEY',  '<WRkm0q_[IMG}%&`>Rh$,6%mdM}-]U66@+TDa3qQg#21PG<s<Wo!rxAG:=U@5Q!q' );
define( 'LOGGED_IN_KEY',    'vK{9&87]%=}ruQkL}7#:+f+4*8*w[y^4+vF>$f[_#$+D#YW8eKh+L3_,p2Ml>ZY*' );
define( 'NONCE_KEY',        '.ieEJF1y .ETR4U;u)4KTDitepEm_RyXh g1]8dKG%b Knm4#km#^vb(1B|#TqzV' );
define( 'AUTH_SALT',        '_U0)TMQN*+vy-cXG%F**8:riHKvoBloCb5ptd=zx){T)NdF B5@Ae?b}Q:=ENpVe' );
define( 'SECURE_AUTH_SALT', 'l,5IF7TpS#+K%@im;q9$aeKLn_rXHFh?sH-?V``Ec&oN{g)sRQ0Sa-%Irqw>X:w`' );
define( 'LOGGED_IN_SALT',   'Up)pF@aJ,Sd*j(;LU3cC>W39U?<AQRxO#x`*iX64T^`S*dadU;8PZq5[!x+< 0^A' );
define( 'NONCE_SALT',       'a4b0z/^X+M5f,>dvuv6V&Se hh_u:M$?7JK&6!y6^iM9DQj*s#o|C.a#KQR(g(4L' );

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