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
define( 'DB_NAME', 'Nexus' );

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
define( 'AUTH_KEY',         'Xtuc3%z=a.=B.kWOT:h~iu6ze}D5^fmA;gwGTNFaIHM4X[bt5(hu]uPZ_ak-R`y/' );
define( 'SECURE_AUTH_KEY',  'C=1r&|d_^=fuE~98S@*SD$y9S;Al ;8Ru.]q}}mB}j.3I9$Tj=;%68f!z1)va:.~' );
define( 'LOGGED_IN_KEY',    'QKRX#$@1)|:M8ar0uKr7t:>kCEV*nw+_{LuY)Ao0K]S5tXQKWo5i}t5ZyK~JkNy>' );
define( 'NONCE_KEY',        'rM2[h C.r<r:#L.^=7xzDnEUxU8&qAW.R{>Bb-5ae;X:a,HePGt(d:`nyq>xxAmU' );
define( 'AUTH_SALT',        '5Ic*Od)F_oTIMhKryg]C-5Dg%8&C>lrc^vIBgtW>~G7YL%Z%L}CrwhF+3~Cu uX=' );
define( 'SECURE_AUTH_SALT', '}d-. &XAc.6H7gKIzFzYQ%8Q9pKL;`wfI;(0|[g<:Gm^IE?Mx.4GpOO9oN}WzMk^' );
define( 'LOGGED_IN_SALT',   '&gW,|J*G7*tw%]m2CR7Y;9^n6e!Ab#FqhU*)9R..Wy14n7!WE/IVg/wbiXi}@O4Z' );
define( 'NONCE_SALT',       'Z}yB$Q{T<.-<og81sE5#znw%VfF(3q?7g_(8A~e({+X1sdG7UA{{iOv<,axrf$1`' );

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
