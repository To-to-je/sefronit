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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sefronit_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '<+({<M}`l>FKt6k*3xjnoDXS}.?A:si.8Te},3VT^5+3`I*W>|r[dOh1Q^,B4UuC' );
define( 'SECURE_AUTH_KEY',  '>;U?,y!Xce|]g:N go@n(PvhgjkS$9.9pp9Jr% 0a&_$pAm{zxJ5ys<XvrIM-j0:' );
define( 'LOGGED_IN_KEY',    '3(;90n<jae~-eFMt!E:TRNg>zUp:}@we$B QH9z$|AA|jD;EokKJqgIFYprWnvwA' );
define( 'NONCE_KEY',        'Z#W.D2pU`znK6m^u4$gcx~`g]cphWd<k-A6F+~s;$|(^ulcWV8fDyKJpf9lK(Yz+' );
define( 'AUTH_SALT',        '!VY{yI+><zNQP8_C(RLiCy_I?qR-r=;,4DId5<6KU<Roy**x$bhI C#n BAierfT' );
define( 'SECURE_AUTH_SALT', 'l-%qJ+[29p[^_oL-X#y,3lz@jD8sE cuQA#r!94+s*Z%RRfD-}:v>$r160N*_vb@' );
define( 'LOGGED_IN_SALT',   'K?gD?k&B$9ndTBEp0!vpJpW6^[[ZRE$+Mmt$#-,95:{vm(#q-r@5PatCf35GVq#g' );
define( 'NONCE_SALT',       '}qHaVwj/8T: I&7ege;.9j6g|H~[ayeA{MgRm#9~jtco/)Dc$|d,86voUyi3zJ<&' );

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

/** Enables page caching for Cache Enabler. */
if ( ! defined( 'WP_CACHE' ) ) {
	define( 'WP_CACHE', true );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
