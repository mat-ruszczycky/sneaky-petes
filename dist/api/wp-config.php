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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'moshpit-db' );

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
define('AUTH_KEY',         '%IC#JA2DA-RS/sI?iD#4LeJYx/@:UYg7mZV2z8I+=_]8-8)3$=:/uC,Q$)1]pk$c');
define('SECURE_AUTH_KEY',  '.IP_[`DqN>Q.ZTksoub-vB5xi Miu-(-1dt,+tsuXn4h9KJ$J!xp0-E.vbV:OEd0');
define('LOGGED_IN_KEY',    '9o-/|_ &=DG#G,RspD-C+IlLAA@_c^S)-!o5KJX,i;TY J7|:#918]RFQ!0|?R6_');
define('NONCE_KEY',        '$2rnC`l2J|Gf&7x6$NysMg}]0t!38AU%jr9I(/Dht-n8ZG$8-Dvt0ej{ ZIqT;r,');
define('AUTH_SALT',        '2v&s,u.?YKH}wy%96/5e6yGT7$evPexr5juPWK[kRgUObr-Z8?XD0sAHnwo-v-bi');
define('SECURE_AUTH_SALT', 'Dtg>>>[ wy 0cP$aO-<Qzzokh~[G^c:n.mUi=`-s39)^(W*oU|:+qwG ln+C^Vb?');
define('LOGGED_IN_SALT',   'hbVYT~vonIi~W;eUM6.~S7EoV]hL}+4mwK44OSx+#&9kM94e-.|,gPV!Fo(m.5|>');
define('NONCE_SALT',       'E)`bBdOc-&M^g]Y+$!xKdeG?kiF,qm{./sZxkh|w=r!3=W#ta_~wK}lpW&{}|xj0');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
