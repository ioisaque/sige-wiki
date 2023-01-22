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
define('DB_NAME', 'wikisige');

/** MySQL database username */
define('DB_USER', 'wikisige');

/** MySQL database password */
define('DB_PASSWORD', 'uOes9^56');

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
define('AUTH_KEY',         'yPm|WXfnT?u1e]{u&s[^Edm!U%;T@Sz)fR[G-g>?k9kMP0IXW7Q%iX=Q0HQ?WA~8');
define('SECURE_AUTH_KEY',  'Ay>(A}2c+4:)s]TNE*c7G;kC`&;A:3J{<0k$-ru.FLD48(9q1ovcO=XngA$Qvk,H');
define('LOGGED_IN_KEY',    'C%@`lTA9KW/RBk=8uo/s|6ui%a^{t!gk&u`0QZ#Tf7tMQIc&OCHA$_Q8]uU]+ Hl');
define('NONCE_KEY',        '*l5R4~ip,}[XDe}A/KEH#.;75m04k{kxr;/W`W%u]U4<%$_,l!#1~/8ws.C~.Lzl');
define('AUTH_SALT',        'HV36_tEwDiO*-g3v:Uu&+i+>3PpG}f_i@lNxz7f2weL~_D=rW5kpWy+K|V+4]Np8');
define('SECURE_AUTH_SALT', ')FbCilZ++ro<wCQ^32C jk$:iCI`a[rP`2MH,F*@&>yEP[u!HqW48Q_>n<h ;e3;');
define('LOGGED_IN_SALT',   '*]^xwjGv=Rq-a Gj3rr[ogO-86Vnj@JzO{?Wmp^`w%/*`x8kE(/CW+rPW@jb|FHt');
define('NONCE_SALT',       '+:P^Vlj49$z [<*q5WE=KlPjJfi`*EHh|gN 9Hl?B)f%aPWCLoqQ>r8tQ!GK+ ZX');

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
