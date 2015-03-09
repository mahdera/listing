<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_listing');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'VnkQ]u|pZCbThOpv]0il7M9|rvj7)H-?]zxhBddH`.QF`uWzeA3(}gF/,tX+umU?');
define('SECURE_AUTH_KEY',  '-U$)rmDc6M_-B.a-6Buv({9_;-SBl2 ~C*j6aM4RNF/DfSg0fL,d6C+R>|/_AdTz');
define('LOGGED_IN_KEY',    '~G1KE]s;e,5-<oCSdyB+>UG+G5*)%%IzdWf_tP/gO7@ck(*vW>+_YYTV|B5+VkE8');
define('NONCE_KEY',        '^HksF+FE3mj}<GTw7LLfY5NL_1u+/?VvT;KpP@~5LE(/v[5b^Q~1W}Sp{>|#jS<I');
define('AUTH_SALT',        'WPe)oNK USuTFJxbuMNFo3KcaR/]DHv@Y2R1B$r66o|hy)?muBWy!NtUFBbhwhPd');
define('SECURE_AUTH_SALT', '1f9+Nd1R2-M,K+hr*>o,)w!6[j[EHH=Mm11n{If`v%/lpLXfixrG+tt@-19:6QBe');
define('LOGGED_IN_SALT',   'o~oJeliz7ZnzA-qU<96!zmi}_~0.85Sc[iV{|/B6K`F0OkUQ#s%:n :-8|>h2J+m');
define('NONCE_SALT',       'b*+kLN-[:@@F/:Ox8eAe4~CCxg>OoA.X|#9uN?0CHt+X*s^6}LF4j21hkZ+5[+`x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'li_';

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
