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
define('DB_NAME', 'scotchbox');

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
define('AUTH_KEY',         'Ljz6@M|Za^:H4F:NP/gUqG]zFt^qH;}1>B#eshNFo+#*Co=CrjO1{qy+sA+bz$5R');
define('SECURE_AUTH_KEY',  ' >/Z+APEdrCEQ9jEgb;E;;^KPmQ+>/_Hqb^z,Fn@-D>+52[!a,Wiaw0--$H5NdAe');
define('LOGGED_IN_KEY',    'LXX(7gnS%t5Y|mxK/+jv~A#[qi>-;[U>s0DXT5>f^&b1vC;(|C-Gw+qHAc~Q)4v|');
define('NONCE_KEY',        '18RTXl-bw?-,Xh%O![a.qfvaYMw]:K7Pm(,Sq{ ~C!%+1IgU{PJag,S`<]Wh,^.q');
define('AUTH_SALT',        '<<v-DbUWwP^Q0]g[M@%Fr^<QFk>4U;byii:kU,e}eemF/v[LwF>,p6I-3^mUd/;<');
define('SECURE_AUTH_SALT', '9RBX2U]4y1D134Q2%rnicF*PT];J=0/k.?B$ /]jaW3~[Ht}[|v_.@f%*)b#?[j:');
define('LOGGED_IN_SALT',   '<14lopb-n.3d+| DQ,4amW}E_?%:%4rj|XxD2hew#0Yxtk!e^~B^k^C^J=Vt_tOZ');
define('NONCE_SALT',       'NeFdTQBG*kBcvV#vEN,1&:D~f[({iGtV_/4p#~P)*~`/jDH},U[S:pSWx7`6X[M.');

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
