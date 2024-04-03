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
define( 'DB_NAME', 'wpgh21a' );

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
define( 'AUTH_KEY',         'q/72v5%W#[I88[Xn 8w-4n%8B7<[:0Ug1_Sl73n`:7fvmY GW{ #.-9KtYL6~>rf' );
define( 'SECURE_AUTH_KEY',  ')zHU;.apeGmDx7-cJ>L{>1D$-1?$;+KiCAB-{G4O0rc,Ow:Lxhw3aJ$H/SR{|7_o' );
define( 'LOGGED_IN_KEY',    ',q&*/@plyTw5<1pR5C<,:O.ugu-A2h>Awg[Ddc($k.EVGJF```;wU:G@6)Zw,%rm' );
define( 'NONCE_KEY',        'pQsE4TINa01Sb[fKY4%tPMWN45P4Z6+^kd(M=v>1nOT>0_. Tk+,)n}+keuw&F$,' );
define( 'AUTH_SALT',        'qN1+j7_0Ae}Q(,~9a>%cOEu>^Y*4[UyhN]A$Aqi]!zfBlU?NtgKN NwmU;,uq?hd' );
define( 'SECURE_AUTH_SALT', 'p8wpz/B(M&q}XbcX_Azd]+@Xk|5^^IB9os$4hbYtb,kbymY=PgJL{vVUQtx?9EtB' );
define( 'LOGGED_IN_SALT',   'Xl$nn~$EQ~fR:%gA=h(Wb#@mA;{s fv^jdGvW5<?2`e|SW3SDel=:_#2=M8%CyDt' );
define( 'NONCE_SALT',       'IY;98|KLbti~2NnEr/+V|{{>B+E{*1syaEszaFD1Nzc`fxblH>(><E|$L7h}gDGu' );

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
