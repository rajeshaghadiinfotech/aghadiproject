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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';c=JT:ISt+AAJ[9W!rA[E>A1rxc3QikBvF$9mrl.fXdf;=xc7#RwO*T-XYP;u!|B');
define('SECURE_AUTH_KEY',  'EP/V%35:Md~adpAEV(dt?$Rblx0i#HyPJ$5F0P^_Kvw?<]W[n]d066AB*l~j-^(m');
define('LOGGED_IN_KEY',    'J2e!8xzN}ZY :(&~W?ZL8#e#40@sEc##:>V@lC~v}!FAA|q%kn#Yblb_(=mlzA77');
define('NONCE_KEY',        'DbFbzXnP^e),sB1Z<1M4CC>a]VZeI=|30r7RDw^4xv!lNYPf[f^#5z$Druh:u$nv');
define('AUTH_SALT',        'IwK$Rf%kcwV7_FVXnD+PQv6B<Y5w{Rr(tY^(k(QF+sCk}*aw*Giz?Qr>tOH|<LYw');
define('SECURE_AUTH_SALT', 'p}X)p7N,<,2[E&-PJ>XR(-WlfDi@-d$~OD8(B2Wl/kt$0YB!. gUGmH/An:iCyar');
define('LOGGED_IN_SALT',   '-Qi8]r#<+V;j`y*_(4Ve=&U-,zI@ibQ=}:OuWr9GOX}S&wtIo]@BC$pCyX`h]/I.');
define('NONCE_SALT',       'd7y}B*` B]%Q(]2 2+zO#W.sv^K^qdt8F(3hox0x[,#jzyxnnG})S02ydx=dG,Z!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
