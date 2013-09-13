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
define('DB_NAME', 'wordpress_8');

/** MySQL database username */
define('DB_USER', 'wordpress_c');

/** MySQL database password */
define('DB_PASSWORD', '703StnMT!p');

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
define('AUTH_KEY',         'uEly4ch74IOCB7scn3d7f@Xs%LEiO&S)imQpnARqvqzaIp7l21VtojRjP0DC(C0J');
define('SECURE_AUTH_KEY',  '&hE@!CSY5pVvRU00Sgv^CHFDi0DfYjDr*)(HNuJO&BGD!Tei%6Nm0ElHFycw&q%C');
define('LOGGED_IN_KEY',    'Rqki9vlfaF*NY2wdEn%3nKD@O5tLvM&LGIMzsJ3tnrXdQ5tOIeffjX3fC27s3vJh');
define('NONCE_KEY',        'CSlxd@%8ffpWnP(warDZFwsuF%32svnPA2N)e@%L*M22Auv86#6b$W@9Ve6b^K$p');
define('AUTH_SALT',        '50ZrFBC04*m^rEXzV7pIXVN5TAcgDWiu7uSA*yDbCTuMg^b$zSHadINYxDHF!(tH');
define('SECURE_AUTH_SALT', 'ksWS05Pt3Uo0lJcOjaWZDg2Pr6iIMzPo*yYmIy)5Lw6te)FHz5*7$Ca^8dg%r$5o');
define('LOGGED_IN_SALT',   '3TJZ4dKJqueL5xAVKH!2!g0xGfmqmSRKM)LvWR4E!jrxjOeoe3h!7FFi64vR32wg');
define('NONCE_SALT',       'x9jCADt%V&NjL&F@5lWodBdxpM!Ds^s%g^@u(Zv72CZ&1ShVS^9yGy&YBK$uTj$t');
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
