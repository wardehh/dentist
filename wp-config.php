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
define( 'DB_NAME', 'dentist2' );

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
define( 'AUTH_KEY',         'e Y#[2dAU)y!S*&OcA,e9Ai~Z#!I&s>26i6z&o9A[J9i5.Gs8cRJ?n;R+e9mwmkj' );
define( 'SECURE_AUTH_KEY',  '-{0Ib8&>:y-E=ge`-yz7jODw@V37}e7<vJc#aRADBXn)1C9odp$tM.RTE-UMP1uQ' );
define( 'LOGGED_IN_KEY',    't&:D2X Tk#hh~q?Q&tpu-:IehT<5zll0/*Y[:f?59v1{8uU#UbR(S6drvj6=fd] ' );
define( 'NONCE_KEY',        '5Fe{R)zC$lP Y+=C<ltJA>%:J2&^UQRKXCO9vf?19m8**!:iDk(]7Vo2sIL_u/)D' );
define( 'AUTH_SALT',        'xqWY 3`zNXt`9<D}$Uzz$;m8Yr}Q#-wi&07HUCv)T`_|#_/ez;<70EEv<eV<Ci/;' );
define( 'SECURE_AUTH_SALT', 'Lo{Q5cm*iuho$.?mLQ3aL/17s<kDiD^j#t%1wR%l*Fc #A=;+[b/!r_Ok~y]t)Mo' );
define( 'LOGGED_IN_SALT',   'oN@gry^/)vyv)fKO8:.9~IW5*e~z>^>z1]R;Lt%L51x 2R66/X46;OR0o$rOvTvi' );
define( 'NONCE_SALT',       'M83WD!pv6/TDcH<K]?ngT8&CYGA`8Ff{=Iv Tmop39{jIPgieZ&4LaiU7|SSfs&@' );

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
