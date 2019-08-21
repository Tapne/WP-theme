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
define( 'DB_NAME', 'wp_start' );

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
define( 'AUTH_KEY',         'n,%`POe!?Oif$87bdqYz@E8RaCaDpz_3#<{++)+<cX2xM^yL=V#b*@qJ|=6_);lF' );
define( 'SECURE_AUTH_KEY',  'F0lyMil=UjK!S!#Q=UWQx2)[nNU)*- ((x<6_:7 4Tu2VR^tMAMJs8.?&v]_on}*' );
define( 'LOGGED_IN_KEY',    'b2C`JdwG5AUKS)]A<)-RM`ieC#p}Q| V0=8KFBRb!}MZrjtg7gpK--hS|HYbwDko' );
define( 'NONCE_KEY',        't6Vg#`A2{VPC6e.jf[:8_[Lib!p=d(VtzER4}?1P.-&;I9p$ts:+$%hJsO@.7H3@' );
define( 'AUTH_SALT',        'q52}?j 8F=MGJdh?}E7z%7r36Y*E65[gT~&GSIA8m&gAv1i?y>#`A63B^WbD,$KN' );
define( 'SECURE_AUTH_SALT', '/;{*8G`2zQ9~uKi9JPr(iq~MOVy<5x{*|-n7(<u.=7kwmfvi~`Cj%GH%eXEe,L2y' );
define( 'LOGGED_IN_SALT',   'Z!Y~(IAAV,_UCn} MM><bsK`.N05i&H@fs@=AYhriu~X2S(n~kAtdjtm$PG1:K/n' );
define( 'NONCE_SALT',       'Ciq&|7OiC4g_,<7FQdr^&3uvHsTj~f^+[`|FlO^(mXmPb/K6,tkPdl/O%^MxxOqG' );

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
