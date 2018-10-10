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
define('DB_NAME', 'osd_db');

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
define('AUTH_KEY',         'gPD(n|6nN(p`Jy6&VpP{%mAH4GU@=3]~[_c$IIt^-$jRgOXLLk9G3zr;`^5]dFS}');
define('SECURE_AUTH_KEY',  '_ +f2UJl  z4D@61@#kbr,VTzm#KuQD*!g_h%%Je7VKE*BF1n)N*W(RHBfvY(wju');
define('LOGGED_IN_KEY',    '0EA{?`WLL=-U_4R*;Z>z@Vm!cuLsa6X KO=<Y8l`H5Nl>)XN^m#)x9+K9m&Wx:>,');
define('NONCE_KEY',        'bxn.QKJcta{E<MF1DHaU1K;1VMmwhqo*=_ Lp#jlF6}l4.RY4L#(|R#9eKMUQ}Fs');
define('AUTH_SALT',        'Kkr;HAy.Rt)S495 kV5ijnI^1{gdhH&x6PHz~cNA?;3+HZ%(1)qk@a=r)8|&F*+>');
define('SECURE_AUTH_SALT', 'f{;>Lrl3MAsgLa(AoO&!T%dqrni2Ii$%0TA%fq]x*cr~l>2Sr[VfV{0%|&K3Yzo!');
define('LOGGED_IN_SALT',   ']}JyI ,R!3y4s~sV9YQ?K?jnS-Bw-d5ffD++m4QD}(/*x|*e&2c-qJdis9Uz:-@i');
define('NONCE_SALT',       'ret(hj/;o?[#>hUorl!Ytf^^U`8(ZoM%l3l>E8~E1s3d4MYG0#?v(r(S6O}2dd5u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'osd_';

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
