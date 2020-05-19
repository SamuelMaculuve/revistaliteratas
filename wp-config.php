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
define( 'DB_NAME', 'revistaliteratas' );

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
define( 'AUTH_KEY',         'QBe9]:sbXbmt HKR+JE|Ml.aPkXr/%Q4[]W_A{.*V;fKM~@Zgvy x0NAid7*.I0i' );
define( 'SECURE_AUTH_KEY',  '0kukJT~VtH!]$|w<[Zic#Ljc]^*Fj)nnVl(2j7xkWEWF_F?K?oSh5#wnANVk#|V ' );
define( 'LOGGED_IN_KEY',    'D0DyH(:SJO{l9P K8?Q|`V#+?a#~7C@C=XqSbOs)I%b}gjjR8s)U&zu|k0fjc%_n' );
define( 'NONCE_KEY',        '(ure~`ym4;Q6Tz?p:N.(_5~KbUL5_9g7Y+CFOe6yiQ{kfO.lkyMhyzEC:KwM3)Qj' );
define( 'AUTH_SALT',        'L,GISCgWvUmdIS15ypjXGM|78Aqp>@ECsv19_fUQnJ[F!H+fS`7f%+!w3T.kV8A2' );
define( 'SECURE_AUTH_SALT', 'm9wANgwES$cs?V M$&[P~>zceW.uMTl($T#Ml+GI}nm.q%Yb_Et({kwBg]P( u[Z' );
define( 'LOGGED_IN_SALT',   'QVi+eXg:T88~t5`2n| e7M=zUc3Mekwi[fW(%T1A$eXd$ZFN9$M|VNb/Y9yl-]f`' );
define( 'NONCE_SALT',       'gpl#cqj|3+.$V@P?]:WQ#VfUa#.}8NPaays$iJ7HWosZUUeL#WYJ{f/@o/q^.qSk' );

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
