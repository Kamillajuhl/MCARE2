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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ah}4tAb,T$E9D(-WFXA$va0?{IaN3UO81,ta^H[Ju42ysJo_:/U2^B!Ca`mU>eN:' );
define( 'SECURE_AUTH_KEY',  'XW=blaPW6JL^Kw9Pz>P&^abp=1#boJk||^}uH*#yovzbh2T=S%R`[Kb`xuodPr/n' );
define( 'LOGGED_IN_KEY',    'tXHr1,LeI 9ldoI6V.gyAq5|f}4@tY[tx3}yXIjaR5l}o~-O5o$5+DYu:8B~Q({=' );
define( 'NONCE_KEY',        ' yJ[SCy%q_8yE&|i}^2xZ::@84ZL)i17jebK$Z=Q)g ]o^.c/eRyh;N`%|Kg-?0L' );
define( 'AUTH_SALT',        'd<aceK,&v|tmTa8%k&X3nyz?=F/V2l.qo:.,?lMl5IJN*67b5,JenY$<hlQrc|.(' );
define( 'SECURE_AUTH_SALT', '}~}6}aVf Y!*hta67RF{WCwHX ez0F{zD[j)OS~K&qMHM*:/NJpU;(#)k^JYE2jJ' );
define( 'LOGGED_IN_SALT',   '=JS*a#8dWl&c4qsz0!Q,C2h_a-vY.-.LTCL@D-X7sSTLn.n~54`rt3M)Ky$(xub9' );
define( 'NONCE_SALT',       '{w${@h]#:|fAKYha?wDF^HhbNVBAMhV{M/J~?@hLhCEK3zUr`7A~;P8mucj1@ ,^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
