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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'personalblog_wp' );

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
define( 'AUTH_KEY',         '0CW%b2 !&&bYsw*5SPq)L]-)M(E71dW?:sH47j<^K3ky4S!+~tMd6QW<,x=De6s@' );
define( 'SECURE_AUTH_KEY',  'q[[ZVvPY$N)!2$L+zltLS[!Y$PoyD?R$@7}Ub6x.JLNqc,8HHW,M*I.I .hAAPdb' );
define( 'LOGGED_IN_KEY',    'AN>oB3q5BuZ`C]0,%{Eotr)Dk,k.g5s)9v})8GJRf;aM4rnZ1~h?P0:~Fo+<`ZX8' );
define( 'NONCE_KEY',        'R!}^#oz45uNCNWKF.p&2P]I/fY5-YjUBZ[4#SW,:[V(L3plXUo2Cwd;2&^CP%oWn' );
define( 'AUTH_SALT',        'HAyVlCs5/zqeJ93LwGnETIOmT!B|7ds1pXhivu;ISBy0;[y_f.Z]Is?1prU|x~<d' );
define( 'SECURE_AUTH_SALT', 'Zn&]7e}qEVS8b#r:82X-YNc$`,:&4~OD7sztu3^X)Slq/%>IRq<$!D*<2mnxi<wP' );
define( 'LOGGED_IN_SALT',   'NCvZb_L&re?xvzws=[rM;3~}Q?ayIn$aU@SM9^6pl4<W3!SA<(>=x=XEXa>r9T)I' );
define( 'NONCE_SALT',       '>R&.&*9%uyp(yKK`-Zk4A;Mbe9m4I$N^8,yO)R;Jm!r|j/TmPx8?iCUm$WQw@rbu' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
