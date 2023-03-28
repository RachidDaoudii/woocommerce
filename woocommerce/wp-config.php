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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         '8m CSsqlU5cG@]88b~D)hld)e|*K%@M7>D[{oSM]gWb.x,l9Cz%^Q4tgR{vWdO#w' );
define( 'SECURE_AUTH_KEY',  '{`0?8{mnaOoe){[B9,BDAsh5gUVjDVOB5cTxR{V =tnk)^2;|&UQFLPC .6 fAzP' );
define( 'LOGGED_IN_KEY',    'Ml;Q&{b6~9pziL!-b.^drL(T4hgzO5Ma?)Se]A.SFC>/,n,IB3q1[:*_-jH|>nN)' );
define( 'NONCE_KEY',        ')_*V=]Ql$Bzn6?EgdPr@s&<TtV5,_-dAeUhDjPGQ5&+NCG<SfidzA45L(j ow7B(' );
define( 'AUTH_SALT',        ';=2v^.AWDdYQE]nR#ZLEtppjD.VKSM2m{f5i$o{ v/+>v9ub3nmzg!sP`>46.D{]' );
define( 'SECURE_AUTH_SALT', 'fOAAgfAAvz3;#GJdO-W$2m|suQUTwX:_nOYuVjc[ruEVez3)/H[-a&qpJ~L>0Ukd' );
define( 'LOGGED_IN_SALT',   'Ao62%vM/T3$6aPxw~&%Bg 9)y>CSR?E^r6<TbF;w87~cS!ipx0r*zEQ8<^YpwGQ;' );
define( 'NONCE_SALT',       '.k,js^9~03MnIbICZV9&j~A~q=fw.rS4:T#;DA3^;2R>M!vUc8iA,wAoyF69dL0Q' );

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
