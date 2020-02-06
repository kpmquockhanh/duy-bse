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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '.&$.JLBEPeWc/Q~U^ZYQ72X#&x8vF<aUTN5H|z_5J{b/x@+_Mp7I;Ov4we#EJXF6' );
define( 'SECURE_AUTH_KEY',  '<.fjR,a{s4NPr.FX87A#/]@}T+)T[ViPvgD;d68&Rck-x<9>R{}U<C@u1]*^0qnw' );
define( 'LOGGED_IN_KEY',    'QZa5r)F+,9eVBRVQOFxX~MvVErz_:`ik_Dq8?Y~d2?TF7NmP$Wg#KZP#2/xUSa`V' );
define( 'NONCE_KEY',        '6k$1^a*zglm)g{?tcoIfD{0f-0Gm]{72)a$vHfYaRIwz={|eQd+; A(rdTV^L,OK' );
define( 'AUTH_SALT',        '}Cq%T(+HL&Ko02f)L Sadb<5Nif2_W|h#$WFg/7U:1$6%lQmpIG(6OF7r?TW9@(]' );
define( 'SECURE_AUTH_SALT', 'i{O<TixEq8U.[qBGB=IZ10{:7Yo#TJ7gJ)^_evO1GT4JRcOvDG0yMR41s&3HmBH?' );
define( 'LOGGED_IN_SALT',   'O3O5^P5V}WjUdVDV>xM`7mo.RPRS1=iDrBqy xkT?rz`/J.@*yIQ$f>x_I^[`W`N' );
define( 'NONCE_SALT',       '3R8tgOw0^*a.BPYg(Wjv3Bm%K[klRH$<>z+AIqxHbBt*Gf_OmP+kUM4n^$`%euSh' );

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
