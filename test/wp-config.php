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
define('DB_NAME', 'db-casa-doro');

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
define('AUTH_KEY',         '?h(BQ&3_I+ZKJTDTN}p]$iHbM.C8lcvmXw4fgMVCL;*NxT%ufzO7Kek2R?PgXk2@');
define('SECURE_AUTH_KEY',  '}9_U&&m@/y._XPMcfyoX9,&FX7b:lR4Ll[7,:`XyIli-W=/aJ2=Yn~GxQCW{[BZU');
define('LOGGED_IN_KEY',    'lI)=Z`t~U{M>nI C,_ #oTqHni%8*55P)]Yq6| `nb|kE?VwI>hez]Q1>EKWVQ1G');
define('NONCE_KEY',        '#4gsgMVs8[<Qj@hv,, ]PK>5Vz38~4L`dD$t<aWK+WhQ+ol=bO]:h,NJ!&05h=yx');
define('AUTH_SALT',        'b|2:EkD|mkEkozS6Y89s5*T=p?-n8}+|/^H yc&GV#ddfvu%wFWEBO8D&5`[fGn ');
define('SECURE_AUTH_SALT', 'L# %9&HEk%kNGD)+IL5`-_}vIK9k6| [ lkQ%_eH$n7S{1`rj#(HG5SLBSOXb]CC');
define('LOGGED_IN_SALT',   'jk0D%^!lc7l|~ZQ}W1t0v@5QGj/ 8!)C7N6I3-%i`.^~7&XSJjR,T,}PFrT& syV');
define('NONCE_SALT',       '02`r6ClQ6qz0E%G/ipj,Kq,#`pn#KC,>+wQWT0J7RA%c5dbEZw.[_Au<_;~&oFFD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cd_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define ('WPLANG', 'ar');