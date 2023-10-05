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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '+XJ><Re-,5Cf1_[3q2IwfA_~]`024>>t_n^}BLfKfwF4K@0G8Q}p,b1%vXqEted}' );
define( 'SECURE_AUTH_KEY',  '2^lPIRP?@$}PMdIq<|~]vGCD$=?C8<VQ,z:2jj4.9U1^a*A/n0kU@cWD[<&j+-9~' );
define( 'LOGGED_IN_KEY',    '?f9G/_9`[7_5>--6Ne1`/KSD9Ap9hjT3C$|[dZOt@NX/:Q9ufZqcA1qy7rjah_4(' );
define( 'NONCE_KEY',        'p,%nu{z$Xl1cf!h`mu,,Q*ZLY7xeJf.t&#gB>tNR|+/IhI@N~~(^KKVV-:^a3yjB' );
define( 'AUTH_SALT',        '|Qs4W!K~:Tv{c)mMPfh6C6rZui{q?QE<}@&i:E{Z[c1+L82UP7DDo?9%~y[k.Pt_' );
define( 'SECURE_AUTH_SALT', 'RK#).p#DPImvK6J|]}jV?|)^f`%_CLP%bLdHXzo:R{$<?n,l}W=EOyq_yTPehBf)' );
define( 'LOGGED_IN_SALT',   '75RUo:z/RQL96m^:Z;j3w@<F.:0t4^odU~@7L>*PtmgDY9UxJC?Dkgu/2%1`it=}' );
define( 'NONCE_SALT',       'pRBvMQh|`a3OBKF  qW-8QuR a+}Ya5=-~z%%-tV0zr;<-26^GF?{tJt(.+e5IP?' );

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
