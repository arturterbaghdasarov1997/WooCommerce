<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'P^79`D]I<6o:8#Fj156|({;E-@}_vHym3U<S?9u&1xB_ >{~fC04LT<<cp30{^yi' );
define( 'SECURE_AUTH_KEY',   'eNv191b(Av#DA@o0b6q?{cscM)@=X?jk7U[~WN><NH ,r;x19;x(+;+U S4SH@J7' );
define( 'LOGGED_IN_KEY',     'r^M?Hs8ow,mZzST^b{):S.R(:|h:W3*4|:$pTKW$P5,T[YzmW4&Mz^[qa<F)jXs%' );
define( 'NONCE_KEY',         '0Re=]P?mtzooQ`Tz=s~O!{*|^k9j(@p_4~KAP:ET_?S1%tvvC$/#4o?x(h^t,>Ey' );
define( 'AUTH_SALT',         '3QI mpn5Mc^j45]XK/D%ULLu=cstSR@i#QJlaz]hym|ZYTk~Z{~_OWE=|[0k4Ng9' );
define( 'SECURE_AUTH_SALT',  'CelOd$V&0;N|/;s=lTeg!-j!gLj!<LD?+=L{j$nni(BF>N2%B(K;53ULNw[JC|w$' );
define( 'LOGGED_IN_SALT',    'R<W3/vm}BC 3?aRk[+i:60fypiC^_o_QnOk:&lzlyV/[P~ apFp`GdOE<N[71_j-' );
define( 'NONCE_SALT',        'eGq!ND-$b`?O7CG?o{E`mgf]ISwQZI*6k`Fu>eisJxftKq[Xl($d!OSABrt>*dbz' );
define( 'WP_CACHE_KEY_SALT', 'c:$e3An9I3F(SmwbKyoe)^>MIx[H%v_/c6L2s6$SX)!mIKr4>!c.Mt* xyfX>u}?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
