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
define('DB_NAME', 'customizing-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'hoip0qP2KLY;G6H~4q]yW)2}0)z^gJm65#?y;6On` Ag5+!SJ,sAB=k3bE&F%`oL');
define('SECURE_AUTH_KEY',  'g.@8tP~(W:Z3fi9bYv.la(I{{hrsj&?snRW]cVxAKiZl`517NNh{VAs~EV/&i)Pe');
define('LOGGED_IN_KEY',    'x@%@}.qwIo?m0rzDtP,[F2IFelgDtmzb_9twL>4N-PNwpK-OF>H),%4=g0Z0;lzE');
define('NONCE_KEY',        ';:1NtJ>n{!-Tk3IsV#oPq1Vww]&TQC7Y6i~rj5Mai|$+ ly+0YZ1^sGhKEpsoVs_');
define('AUTH_SALT',        'M5vzzz%-OBE--efuSwW`R$Od`K$M2j CkaoKUNrK1qR>-H~]p5#]T1o >$rzE`,D');
define('SECURE_AUTH_SALT', 'QuM8/|9vTKd->$rk1.J|6F>|nrVH*_UW54$GVIq]FL1;[6R}EulMM+G+E<i4!Uf,');
define('LOGGED_IN_SALT',   '}~Fz/`P@y?P63:1OhW&k $@@hI<BuSJy,xr$n(#8q!]<$=p?Lt7e^j$oBK$X5|Rh');
define('NONCE_SALT',       'SG[,cz3*7LYv&i!>QQaX/eE)XBD?fki%Mp.,FV=% ZK3fcC1 i.DYA` >p;d`lms');

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
