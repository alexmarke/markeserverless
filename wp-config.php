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
define( 'DB_NAME', 'marke_db' );

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
define( 'AUTH_KEY',         '|-@b/-:AkY0r5uf0u^qv0E)5k{j@y7p_.ZlX4iSFHM#0`O?Mw|@i=bF&Me-6~?FB' );
define( 'SECURE_AUTH_KEY',  'H0#s$9K8.E(OjdaO?Vvbx[O%P]U>=q}6 GHEx5j}FrGV{Y3skss7- ]9te*b1_(+' );
define( 'LOGGED_IN_KEY',    'lmfwB_31:9mQyi*Nd1PA$(TW[E+89nyOrK+uf1v4T2(1tN}q2CkY=[loPb[I*90&' );
define( 'NONCE_KEY',        'iA7fi5-]lxJ-7v!Cg8,{`#C580GRU<rtP7aeOGO`+%$[S5hzYq.yhr n69,PHGfU' );
define( 'AUTH_SALT',        '],_@vEAGt1yqo2!w`ET`G6l,4SGR/cQLm!D1a1=&8eJ:$,T;ia _G;9(hQf>V~z]' );
define( 'SECURE_AUTH_SALT', ')=XJXvuy2Ph}lWFOqsTj,ldm!o{d%Heg;>+w3cf0Ty-%?JLnfppgmBzeT9.3hr1`' );
define( 'LOGGED_IN_SALT',   'aV@OA;8_X2I2ktfgkj_+xpBWt;wk6K,3Cqr7`an(-9|{L`GchA5&B5}:+NJuFGQ;' );
define( 'NONCE_SALT',       's3p5161b:NJnixKZ:/lN1o2 0f`2m{D3I}v;nV:^N7N%={C[DA`9Sx3i[L_a9gxj' );

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
