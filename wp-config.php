<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'kyleoar1_enormouspi');

/** MySQL database username */
define('DB_USER', 'kyleoar1_kyle');

/** MySQL database password */
define('DB_PASSWORD', 'Skinny!2#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ua> Jo=~kShT1D=lur2,@l)J@En-#q~^-s^s]kvE&dNR[m3%YOnQ=A:Pa]:AAGni');
define('SECURE_AUTH_KEY',  '?LVr!1AG;`lU/Z-eE[KZC;he5}&wXu.^WT?qZu[zWf!JYI*r-+LZsRXEhYH$9[h;');
define('LOGGED_IN_KEY',    'zwt*DG^fH=/Z $@$^&R`k}ry &Be,~*+M>u(8<Hcba`-t-tKxkX*>4B5U`*&S*8+');
define('NONCE_KEY',        ' %ocZ|N4zu8-H*KOn#6y1n&]fMoy%W.bn-b;WHS^j}?g+HM)=[95?]<-vtOb)eFi');
define('AUTH_SALT',        ' 9{9+t=CJkbb%@Suf[clrP.n+^4Fm_EmQh-jJm>TPpnnD-%V6:#:kS}g~Q5StWen');
define('SECURE_AUTH_SALT', 'idxSRkfx-D7}#o3z?{Qj|m(}B-+vn<%OMRj=|Rs;-Xq~I2J94~fqQZ56{gX7k$71');
define('LOGGED_IN_SALT',   'ox-Jyffn~FjN!$<qiD?jh5D*A >$]lp?Ja>Asuti</o{-hBy?-m-{0Xo:UA&& h,');
define('NONCE_SALT',       'GgA!H`-}XE>usSzsRmXJ+O&28{- pa-=bkht{Gd^H&e:71N&]Z|N-R-)Oz=&H+@_');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
