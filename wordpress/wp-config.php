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
define( 'DB_NAME', 'wordpress-workshop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123@Password' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'K}d+f0|N%{m*Pso ^C(re_uj8<YPtsFSW!MW]1KCl1V<1u-@J/.ac`N4P_Jf81 =' );
define( 'SECURE_AUTH_KEY',  '9^vGZBN^~N<gKPNc9}J*P^I[2!2JkL8b8H`LS[$yjHd[:Amq-Nwr!{,9<wsfde~a' );
define( 'LOGGED_IN_KEY',    'kTjs@]7[nZ%qW^624tBh0t}W9MNQvw|>rqHMvSRy_Ot]`]5^G3{iHbFF?0#JPJ?P' );
define( 'NONCE_KEY',        'Hh)!e3P^wgy)`R22k2/pr-Xvw{jn[BP#v*0$-^y-VU^MqY6!dadA]0%}3;#6iO. ' );
define( 'AUTH_SALT',        '[<QnRO>;zmnD~XdKJiswxJ;W/fV(W6bBj(NJ=+r4mm!]2.tMZde4ca-TVd[s|{ U' );
define( 'SECURE_AUTH_SALT', 'Ja8tOq= @^[2?r_$o!9@bq[NhK}Xc*}b+AxGiC~`zw<M#(KO0_emhUWp=K/qT?|y' );
define( 'LOGGED_IN_SALT',   ',_!H &}YU#!Bx C^[Xha_wA1o?;?(_61@Hx{(%g*(.~*^L-%?%Rr=Uqip_$W?n48' );
define( 'NONCE_SALT',       '3)O:w`8-8t#k%gRs|s(`}ded,rI7A&Cv8zNw`+eB1_}c}>Yws`!v0jBv {S+$5s ' );

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


@ini_set( 'upload_max_size' , '20M' );
@ini_set( 'post_max_size', '13M');
@ini_set( 'memory_limit', '15M' );
