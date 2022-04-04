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
define( 'DB_NAME', 'bdpruebatec' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nepokratos051825' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'IB9LR,T1%S.ACXBYiUbQ27.9nw:b0S=b FEheyRbMk)~v1>K~J:kzZ|-XttQi]8v' );
define( 'SECURE_AUTH_KEY',  'udhF&8m[/g*[F[c=A348)ZT %] q.Ez2yt/5vVI1DW$Qw*elvR,&ZS7,v4G>]<,k' );
define( 'LOGGED_IN_KEY',    '.;B-mFs&i:zeTLTT5>$(PA<a+!Jj=a$IULjQP^n9{3_h}j`3,Upg]J3:[?t7>p5T' );
define( 'NONCE_KEY',        ',06kc4Qtoj<<`r$sF:RH]^gu@,tsgr{F`OR0)9]PzWJ$E<.Inj.X--OY y:rpTy.' );
define( 'AUTH_SALT',        'C6,XQMj7n;iVh_8oj1alTJFUPJ-Y}8;s.MJ!~EaBgf!g7T>T*jE*SH-M <)m{;p+' );
define( 'SECURE_AUTH_SALT', '<OIQtp@qC@ALSS#(#}vjWG)2t5q.SU9z:z0f|Cm;,iL*h(P)1g+v}9fw#):2;gOv' );
define( 'LOGGED_IN_SALT',   'WXm+?t ,y)68h6WsucaNb@C~w /r2QMqM|Q%Zgk5:P9PzWiJ}{0%(JC){6JyE}`-' );
define( 'NONCE_SALT',       'IK+=@bB6d[|)grX](7VEgSf-:^H]VZlEWCj&e=u^9r{n0|oLODN Y8n)dJeCAnEk' );

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
