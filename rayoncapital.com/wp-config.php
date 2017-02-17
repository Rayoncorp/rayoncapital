<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home3/hira/public_html/rayoncapital.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
/** The name of the database for WordPress */
define('DB_NAME', 'hira_wrdp24');

/** MySQL database username */
define('DB_USER', 'hira_wrdp24');

/** MySQL database password */
define('DB_PASSWORD', 'p5tWYu6WE9Zl4y');

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
define('AUTH_KEY',         'a7*9p^3YwZt7U/oNo?eA>qo#\`eOf25C#U@f-1jV0T2KSkDO#|)?d9dNQrMoQZhf<1g(iK');
define('SECURE_AUTH_KEY',  '1DqU3Vx0b_HH>J58K-|ETYOTdalxTM;p5:V<C@Ci|9)lwA*SHJ=!m3RQ\`@p~ouGL6)Q?gEl<');
define('LOGGED_IN_KEY',    '-m5r-/K!RfpY$L84OZ6-qk)eN)WbiU\`J<<qiI_S(Pe|9u|oK~UEBxwFc|O@~?32PJ^g3uaORnM!Ofw1Ca');
define('NONCE_KEY',        '-fX2vDqaqgH7Sx_JmBBK$GGcqpJWJ4vC=9l*)o46gjI0PzF?eJSEgdxHR9;?a!Li7<vfoOWOdtm');
define('AUTH_SALT',        '6XnOzM>wBN5-kfsNf8M5|GziKdYu<1d(xYeLL!uUutg>mBodSpefPcm)kvhZe0::*OjQ-');
define('SECURE_AUTH_SALT', '|_zV__7$RW;3kw*vYmdzV(;O>gG3W^ActJkI?97PJ7Kwe)okPJX-\`!2r4DVQ^4(u\`vppwVcbAHzZ8tI');
define('LOGGED_IN_SALT',   '?HeOQ/vDA5X;ZR(oVyqM@Q3F-yrdRs/bl*6iJo*Hfi3uiI3jvn#jdNw-oQI>|_Ol*sR\`-QBgA');
define('NONCE_SALT',       'Kkli;82zE9@x0-!qV*@BS?AJVVtm1eA/#Sh2xNJAU==@(X2EboC^QB|Np;O9S:V0?');


/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
