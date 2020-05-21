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
define( 'DB_NAME', 'soovi' );

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
define( 'AUTH_KEY',         '[8BTdBhH70]vr;8rfP.pJfvX?/jP8N54cE@-?O:xgJx%^wXqt88Upu-76!]8l#[H' );
define( 'SECURE_AUTH_KEY',  '&r,U_Cv.9`q2j(&L;:e]|G?Uvm{}h(BpM}.5?mu3%g|ImYdc}iFq Gz/^s9lN!Ue' );
define( 'LOGGED_IN_KEY',    'GH$pFJkdAOmZBa5>P3(<xcl;l.e1J*bQ~+q)+BmYHcBFs4ts~(%.IZZh IrtJ3FM' );
define( 'NONCE_KEY',        'R1#<HzHpPoOeZLbsVtGt= o$p/&J?4wrzer +;mm:-[E)#M]p$wD~vzGuU /%f11' );
define( 'AUTH_SALT',        'hiHi[@(boC;HXUk9.R^v5d^F{>]VT09Rw1Jb[7{rK(DW+uBANYGP9m4oRKUQ fTi' );
define( 'SECURE_AUTH_SALT', '2io^KI4Kc*N#4uvi0m~4GI9zI=hebV]lO2;|lx)j6dtl; kGp1pJl-b(rN!x/>h ' );
define( 'LOGGED_IN_SALT',   'puVY%xu{5N}%dA0> >gun)HYe.|q,0=/VI/vK rqzV&&7}ewp#gbgRpkMv!V9N9G' );
define( 'NONCE_SALT',       '@@+p=cR7iC]ho?nZA]H>w^.4<S}W,CW@Il?]Gz0[PI<X_aS@?//gAKJww6#HM`XN' );

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
