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
define('DB_NAME', 'MirabelleMakeup');

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
define('AUTH_KEY',         'vE0_=^*uJkBeECrFZ-+AbI&&;ZScF(.O,^kM>j06d>-(a}ml_<sNU.<A0u~,po|N');
define('SECURE_AUTH_KEY',  '.9T,RCh!wjnU0;.$#W7Y>rsjwI]3lBBn}Qo+W|uk}gIWC V+/?.J^%~2lrUF:+^f');
define('LOGGED_IN_KEY',    '?pzs1N-#eyAsj==|79g@,#UPsRJ6jk-)pgJz%=P*xW_i]+z-JgK$TiI~*D08EV@n');
define('NONCE_KEY',        ',*sb}T_CX@)fY!fH0`<~eNWD#)3@$&bB}KY~AEsOeMF@Wv%pmj1_h.`YJh/HPrre');
define('AUTH_SALT',        'mC9}yE0dcfqycmlf5j6*_,p]cYs%[_0nUCXIe#@>XqI!o >MQK2}kls/0A5E.4Z)');
define('SECURE_AUTH_SALT', 'nHo%H|fO{ACD/GQF`VXG6c1il+T:4T<ZU{<U}j_LVarspWcHr$OYB${: A/eZLMK');
define('LOGGED_IN_SALT',   'q.-zsk3w[nOc0 9%3C+W|i;J94>|F(Uan|Ah(K3<zN*+t;N<Q-9_WH_+f%%}(3ov');
define('NONCE_SALT',       'UUJe|V(+ae|Qtw@Vbi$4U{HmSRW@-S7im9DdiO>(F0(b[fc&2&+Rl&8>w=G+Z]q8');
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
