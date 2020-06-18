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
define( 'DB_NAME', 'centrestageonlinedb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'r^s [(qnLi@@fEMbmNZOQf>Z!+MG(.YR_w:n$syane*ldO1H>tk|$c@E~,L:p+A*' );
define( 'SECURE_AUTH_KEY',  '<;[.~(t:;+_ECIlRJ]TnaRrie>GnY0CQ<zs}d*c,@;_V![^O>R}Y0Bz5)_DIekdH' );
define( 'LOGGED_IN_KEY',    'tUK=Oj+^ervM`(U:rESL&d;}pwjn|,HM%u17~gQZtwam)Rn&0m($<_$Uor~-BO4E' );
define( 'NONCE_KEY',        'Qd|q9YHKA{(r1:RG;4;!j_ ]](=3^^GYlHB0TinMat>3CBZPzl`p0XxgM<Bsmc S' );
define( 'AUTH_SALT',        '>hsq#yEnsoYj]4Uo-.4ey-[|LI)Kgl*]+KRb|#TAJ[;CZnt-@^a0JaT8[R`|3c:N' );
define( 'SECURE_AUTH_SALT', '8 GQ6tH=HKWpoFm3Iwu6$Ft<;RDqgCR%6_fYIj;YP]<U&~(k+Gp>)5m2 /Il}:mw' );
define( 'LOGGED_IN_SALT',   'r=2+vU]o7*@+n<DP+HVq7zT;aZ2h;%W+x]tzpVNze^$Kqa8mt$TSyTyTN,z2?:OS' );
define( 'NONCE_SALT',       '%|gXj$KIS7:}hNbx=YbEkiYr6}J-HVvhF7q N&S5h)a>~Pq}YOY4B2KWlLV^R+!*' );

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
