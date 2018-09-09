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
define('DB_NAME', 'wordpress_property');

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
define('AUTH_KEY',         '17eXYKs/%1{3J^Jk]}G289XdH{F> c?87;~WC^l[VkReDBWnB!Xuq oF;pVLj.-=');
define('SECURE_AUTH_KEY',  'j|+1Jw,W.!8weW=NFIf^@^ko~O{X%liM!g<_-Ckvm*o]%*zeY^,_=qjL_jx<I^LK');
define('LOGGED_IN_KEY',    'BBn46DCD~~, :0?9[rR$+JCh1YG]3*mvvg20;J~ H{O&.u`@znAiO7B-e_$3]GcP');
define('NONCE_KEY',        '8L)3{LNHF<CCw1ot_)^8HYrS6xNpW|BM1y&bZQ<tVXWLE2[L-yS/N^C*JrJ|[`=8');
define('AUTH_SALT',        'q2R@3p^gRA8/OANT).<&4}wpl00_*Z//;>RGgCvi0hv-bV$19{TGcBR?G6-7y&2C');
define('SECURE_AUTH_SALT', 'T.zkmCRCI4rEy1-](I6}BOv:Hueigm7d{@2&@S<;,f{`:zw(`3+@}^LAOpwG`g~h');
define('LOGGED_IN_SALT',   '58Hw.W)5N3xXekZ,}oCK]OQ$n!;uC$Yk5yt-p=4DmSu%f()$,@$$/0fYjNZ{9$mw');
define('NONCE_SALT',       'HnVBpyajXLYL6C%s}li;@ blBL*qDcq<(]R#UGe+Z]SJ8X~u _?2I`M6W9o0d(oP');

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
