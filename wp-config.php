<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gfashion');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '102030');

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
define('AUTH_KEY',         ':.udjB!dUK)uj,GS>BeA@OM?i-=-}5eaXj$d9}B-|<)~|/p<1+L[z`Mu+{O0|w!e');
define('SECURE_AUTH_KEY',  'b}KZ{yhuMaYFZJkpt|kc5E$*%Pq<!2:xyYofSadnkd]@J5wchET9>-.9RjA}<}OP');
define('LOGGED_IN_KEY',    'S+Hu.PUA|<-S62C)+1)a*t~SdjtS`gH+M l+-TF~f+yJyOt5q5X&S7P/2n,o#Uys');
define('NONCE_KEY',        'Bhew$/+6]U/]QZ,4UgE2-Osn(6g(Rqt{L<<5vmF0.%3V>nl}6#G{|PdQ,M{V=AEK');
define('AUTH_SALT',        'l$pP+8wY+T|FTNWh*b*y&b1_C491^L<|U Q7;}?DWzS!Z5s(CC5%>@}|cYuT-!VU');
define('SECURE_AUTH_SALT', 'zHV(nF66ddN~I|&HX{O,zci)F#BFs.c7Q4B|I<cj|@=2#@c/azlixZL6^cH?)^!R');
define('LOGGED_IN_SALT',   'zu/1ILu|;<&sC T9ie@_N7]:2P]u{+#Qwv0ac_{@R08oP,Ecm(Vm~B,)eA,3Bf=|');
define('NONCE_SALT',       ']Mn2M+[n/$*;^Bh4jrGs|31xp.B[W]h61U4Gd+|T0Sw.Zf=6a~5h$vXz=T/:)|]}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
