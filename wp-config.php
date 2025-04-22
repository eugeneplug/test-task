<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!NEt@jBcF!M /yY*V]~!+xDJ#pq[A+4E9Qbjg%c5sCnnh&{!$80:mZ&Ma8mS/7(w' );
define( 'SECURE_AUTH_KEY',  'oM``En!`h`B$*)B&?QI0fZx2J*!>RzAoES-^z8B_EOfHSV(DLpaE3-`4T?Qk{7x[' );
define( 'LOGGED_IN_KEY',    '8#S}STD1~ND^^:Zj`K]/$/af-/2laY/ 9+D_DW5%f[S!P^Tt7G/f mA$4e1rsdu,' );
define( 'NONCE_KEY',        '<pZ$Kzvm$3]]NTK0pG/+k M<_y)9bn%,|*v@}0F3i$>sQ|V1u.P6C9:~5m.8QlzG' );
define( 'AUTH_SALT',        'CJVg22py3|0ZV0#b.Jq4H4q$6o*VYm+G}EX+:IHV^2j[=6hCQQzjB+7dvhxdw~DQ' );
define( 'SECURE_AUTH_SALT', ',tlvk;~ LzY*n{aqD E@8zRJCAKTYp,wiSNt[/9!0V%KOIzLdnO[VPov&&K8QV[<' );
define( 'LOGGED_IN_SALT',   'Z;9:wEb3Dxt!i}1qMjzM|yL%u)R%/C!LAYkiL#<h^N,Z$sAQi=VFIm M+ZZVprq^' );
define( 'NONCE_SALT',       'HO79Lw/2#(=D~zlxB^kBO9?f1SL+1iF<5tpWP4j{VMT_s%[y~>M2mcmfF(BnX[,F' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('WP_ALLOW_MULTISITE', true);


define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
