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
define('DB_NAME', 'knovvzik_LMS');

/** MySQL database username */
define('DB_USER', 'knovvzik_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Z}ddT*a[#-r_');

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
define('AUTH_KEY',         't_r=dT=-^<&^02MBktB+Q;vm9pz(m*99s;hdXQ %{(5HMUS.(.e[+-4%]iJ=hD<h');
define('SECURE_AUTH_KEY',  'q=U#$z`gct>~k^Gl6BDB;zN=EW7Ju!3W71 FORcv*+29v9 9&]q%U/ f_atS@Yn_');
define('LOGGED_IN_KEY',    'J+|bwY0`+v/7DyxV{Y8kyaJabmn09M<s:/ M0Lt_u+Je|y-7j/K.o=ZP$3odD?h:');
define('NONCE_KEY',        'G5O#t)-#PzQ7w7]{c4M)^8uFsWxEy-T5@.vRdqA.PX[PgP2DS+_`|h<KRXiqfAEh');
define('AUTH_SALT',        '>j2S-1QQe@`*$r=YKG[mytV9XxC<!Mg90`q!X-(Wc-Q9-M7.v]Hxb)V0OsaT& *!');
define('SECURE_AUTH_SALT', 'U)oX;iK|-gAm(GWV8q&l8 ,j@XN/A/+d~O`2B;+;heUzA~sTLTNp<{HCH6+8W+MB');
define('LOGGED_IN_SALT',   'R_S`QWtW+k{m}v1U%.C*h]>n I2A-whf%p;VMT$dyBbasV^uAt0M9+3U+mG{9(I^');
define('NONCE_SALT',       '&WJZ7?I7hGtgNBxC+=m Qi=;_--AD~=?kQC6.{PZeEa, bu$OHVUW+Qk !N)m-A,');

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
