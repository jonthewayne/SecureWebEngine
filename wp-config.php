<?php

if(strpos($_SERVER["DOCUMENT_ROOT"],'Sites') || strpos($_SERVER["DOCUMENT_ROOT"],'staging.securewebengine')) {
// settings for dev machines & staging server

$serverip = '184.106.55.84'; // used for domain mapping plugin

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '328441_swe_staging');

/** MySQL database username */
define('DB_USER', '328441_swe_stag');

/** MySQL database password */
define('DB_PASSWORD', 'ZdNh7vcG');


/** set MySQL hostname & envname var based on env */
if (strpos($_SERVER["DOCUMENT_ROOT"],'Sites')) {
	// for connecting from dev machine to remote dev/staging db
	define('DB_HOST', '108.171.166.235');	
} else {
	// for the staging server, which can connect locally to the dev db
	define('DB_HOST', 'mysql51-011.wc1.ord1.stabletransit.com');
}

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
define('AUTH_KEY',         '_dgUS8bJCJ3#BfE8sIz>6a>k,iejMX!EYwQd5+~*6x`g$(-MYQBX=@!U[/X>`g>>');
define('SECURE_AUTH_KEY',  'X0gdd@>?DG0-1mq0X-o#T#Wk?vJp?CQsoDy<f.Kv?$DgeR-bmG%][Tf@|rJ/_tKo');
define('LOGGED_IN_KEY',    'Bi[+0XMsqL#9L Psc6<|~Sqzc`Ha`{&UZ(xdv8n+]J uk;WFx.{Q(W9#N)5zkK+z');
define('NONCE_KEY',        'F[c?PPk$:]68#0v0th(n=;yC6AR(mow/DqXu/w-Fam0]*v5ZH3^zmU*l&f-K95Jt');
define('AUTH_SALT',        '&J^kp3%`|4e; @,} |=QA`En~SMLtlG*Rr#}2^#xH#{+gAC}ii&jt1y-*CJ:9jx#');
define('SECURE_AUTH_SALT', 'Mbc}aVLOGw~-(H]QcHw$SZG1[8&!FA`Lr,G^D[l)qw-?GiWt)mfB{A5z(+y}e7D4');
define('LOGGED_IN_SALT',   '6_`0j<du]5Q6WMT3V|P^]dWT*;/G)LJiE>5eD u#u}~k]RXW}[fA$Q#|)eI@Xr9q');
define('NONCE_SALT',       'Lo-_>!7oGt^}+oG=9TYy+ Y_9E5-$`?z %]]e>IRnX~+S<R43Nw+7cM:-aM9X|2H');

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

// enable multisite
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'staging.securewebengine.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
define( 'SUNRISE', 'on' );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

// end dev settings

} else {
// settings for prod server

$serverip = '184.106.55.84'; // used for domain mapping plugin

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '328441_swe');

/** MySQL database username */
define('DB_USER', '328441_swe');

/** MySQL database password */
define('DB_PASSWORD', 'ZdNh7vcG');

/** MySQL hostname */
define('DB_HOST', 'mysql51-011.wc1.ord1.stabletransit.com');


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
define('AUTH_KEY',         '_dgUS8bJCJ3#BfE8sIz>6a>k,iejMX!EYwQd5+~*6x`g$(-MYQBX=@!U[/X>`g>>');
define('SECURE_AUTH_KEY',  'X0gdd@>?DG0-1mq0X-o#T#Wk?vJp?CQsoDy<f.Kv?$DgeR-bmG%][Tf@|rJ/_tKo');
define('LOGGED_IN_KEY',    'Bi[+0XMsqL#9L Psc6<|~Sqzc`Ha`{&UZ(xdv8n+]J uk;WFx.{Q(W9#N)5zkK+z');
define('NONCE_KEY',        'F[c?PPk$:]68#0v0th(n=;yC6AR(mow/DqXu/w-Fam0]*v5ZH3^zmU*l&f-K95Jt');
define('AUTH_SALT',        '&J^kp3%`|4e; @,} |=QA`En~SMLtlG*Rr#}2^#xH#{+gAC}ii&jt1y-*CJ:9jx#');
define('SECURE_AUTH_SALT', 'Mbc}aVLOGw~-(H]QcHw$SZG1[8&!FA`Lr,G^D[l)qw-?GiWt)mfB{A5z(+y}e7D4');
define('LOGGED_IN_SALT',   '6_`0j<du]5Q6WMT3V|P^]dWT*;/G)LJiE>5eD u#u}~k]RXW}[fA$Q#|)eI@Xr9q');
define('NONCE_SALT',       'Lo-_>!7oGt^}+oG=9TYy+ Y_9E5-$`?z %]]e>IRnX~+S<R43Nw+7cM:-aM9X|2H');

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

// enable multisite
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'securewebengine.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
define( 'SUNRISE', 'on' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

// end prod server settings	
}
