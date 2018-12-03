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
define('DB_NAME', 'lqFinal');

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
define('AUTH_KEY',         's3Gx[j^:=VEe8q@=`MRHYIiS,9i)@Q4W@vXz4*E0p]ks*Py/r[X0zGCo1pYzT6Wa');
define('SECURE_AUTH_KEY',  'xpl~Mq- r9Zz]#@#5ZonMC|Ii&YE]n12;#IDFw+7ldQ`=gAq7mL}9Lazso[54KEh');
define('LOGGED_IN_KEY',    'a&-r<]IKFpef)./^~?U`r1N 54NCoU$DS])u/CCV8VYm6T{KL^=aIgyFgQnsI@xZ');
define('NONCE_KEY',        '5<yDdqa&rJ4m|n+(E0y>;pIvHpq~+t6Z(ZaxYG!.84UC=0,sgIAOt{xI//,{)QPS');
define('AUTH_SALT',        'f(,kL. cgDUC.^+;YE^WK.DVbPfo$WGK0|5CzvY=i^x;jb.[XO5;TAHVp,{$E|eS');
define('SECURE_AUTH_SALT', 'V]mYrQADVPyw_3YOYOtVF,?iO;w[xlq1bRu8f@Ai4.tMLVw0T}/~!D!`o:~.7E,e');
define('LOGGED_IN_SALT',   'xz}su{/cnQ9=o+G1<o%EG 0$6t8WTo!DweS$AjYeMMKM~N.0WFz7gS)b4h;x-v0W');
define('NONCE_SALT',       'US!w}*4o#/B*v|$rlT&Kr>$xnnLg<})|b+;pC{hdJ{v/MUU$g4~wRY[vQQ&F#O H');

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
