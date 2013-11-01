<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_b');

/** MySQL database username */
define('DB_USER', 'wordpress_f');

/** MySQL database password */
define('DB_PASSWORD', '0_JpZ61nrU');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z31@NWEx)NFRmM!$O8DXi2m6HS#J8&kTegaosl*@q(R(G%WJv2cMLsoHbh!(%)TV');
define('SECURE_AUTH_KEY',  '2EDLVSt0D5yH^qjKHlEWWkRMUgSMsWJUJS4YmB%rmuE21@lP2@iC%9ux1$(kA%PK');
define('LOGGED_IN_KEY',    'sGuGc^l0xozOTUgUQS74Oj7CfF@vN83jekB4#g(7FOREkj$tZldM*a$qv@FdYFEG');
define('NONCE_KEY',        'Usjae^SkdvXwAS8t@gY1qAGl2WktXC)t$SX(7kvd5qORTs8wkcDMVpJt)TP@8slV');
define('AUTH_SALT',        'Ji8cadjAkQZYzPJDIH@M9(296(Zg*iAdcNA59VeVj&!k98dsiJQ3Z1gE2^z5^3yv');
define('SECURE_AUTH_SALT', 'vs9n1eWjkp2GvuLU95%b7TrmsV!RGp0gey0RTkSYHclbKwmNH&9Ms$m@GQr&yVJY');
define('LOGGED_IN_SALT',   'Il0WHCuv8w0ZsgXvMoLLT&Ssi4fe3qrm2Bq8B9q*h2dpk@2YpXBFHoONf(adOCaG');
define('NONCE_SALT',       'tlnKWYRQ0tZUqAzKiwJ*E$RkyXSxPv6umX^Z4x71SPS25AzO9KsLv0ZogG55R*JU');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>
