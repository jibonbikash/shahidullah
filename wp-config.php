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
define('DB_NAME', 'wordpress');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', '');
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
define('AUTH_KEY',         'P`eawb7J;%]}s%#dT/Z=&)?}3:By<{cx[?J.`4u=QK=nBC9Q!/vO9zt!(zx+ib^X');
define('SECURE_AUTH_KEY',  'xD7Vw&+aqG|$S8m[Tiy.eO<;DAf VQ#Gy^=hJ411dB&Xwkx2}Jk>t9ejNW*`(X7^');
define('LOGGED_IN_KEY',    '7OoU$#oCG`97k,0i^#.(}XRG $OOV:cl%dvRCD(VBrg*EHj&06GF4w#NX><o .EB');
define('NONCE_KEY',        '156L6m;Io2,=I^3twiH>P?P8-s60tcc2*?`=CZ78Xaj0#QGMLehS!O>g@6jvoo;F');
define('AUTH_SALT',        'Q-Pe{cdDw<p7P-qq4*[7t/pb`|}ZP=.~v`)#s,n]w2Qm;xa,CnVF:LnbbhGSGh)x');
define('SECURE_AUTH_SALT', '~)tGbbU;+3w,H&|j2J]G2nwgQM7/CBAjp=uKFpqTBz9~B4,k1Iw=x_A)M#*DUUIH');
define('LOGGED_IN_SALT',   'Pu-p+O1%Hv!sL4.;WZbAfe+]fqc+g6z(/G?h<;GB _8or^h?j^9+;_<7e5R.[ar9');
define('NONCE_SALT',       'N;xx]+My@pw1dDDx&fN;t-zk>2{UJ3:B5H?kwuv2Z|E7Hs%R}I3 XSd/Ly^_(*M}');
/**#@-*/
/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'sha_';
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
