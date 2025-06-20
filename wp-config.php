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
define( 'DB_NAME', 'tokotanaman' );

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
define( 'AUTH_KEY',         'dJlec6fVnK>)UVOTElQa!rYEIkj?oIkcPxr{rR{X6#VzM4a3(s6hML!2[Kv[?Rt-' );
define( 'SECURE_AUTH_KEY',  '(RyxG6r!pY*jt14vV%HMlb*pU <zwT0ALo_`G>*7kwC R?Ii@t)W3OPtISI(=4*c' );
define( 'LOGGED_IN_KEY',    'P0;o,~GGxaawea0(){keZ}(?whwho~Ri0}@WYAn}wu|RGd[?6=7`>^P]E  Pdw}$' );
define( 'NONCE_KEY',        'P=^NJ+n1^Gm~42YEM2J|HKO{xD% Y^/@!/]RzVffUbRxIHh)FNUv}%o<3~YQI`3+' );
define( 'AUTH_SALT',        '&OTTp$/n>tFU>`CG;.r)c19jmA&Z?SGsf*QbX/?[>sTU6_{[&0(UA[e.}2Oh,55k' );
define( 'SECURE_AUTH_SALT', 'fKCO(r)+1r2A%X^c7tba!,}TRCxJVc^1nK+h3/`B5j|s#SHI-]0CD%9Q]g48Rhd+' );
define( 'LOGGED_IN_SALT',   '4/.E9_xy?mr:c;1/!s9oY|<4k54D8Z1G`FaV_b)`0(:ApS9yv)7bikP+Z(2nb;e:' );
define( 'NONCE_SALT',       'C<HVU}r%{=e]9.R;MX]s/(v^W|.je-MXI*(}[s0U4x<!tCw8Q:eK/!bNO4xvb}?`' );

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
