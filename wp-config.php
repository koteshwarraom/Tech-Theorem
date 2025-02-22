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
define( 'DB_NAME', 'tech-thorem' );

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
define( 'AUTH_KEY',         '&r}#VDwh$evp%d@~N_Ja{2>2JS5?]d}`5jJP&|PQe^()p^!.?^5J)O{+_I1A|p[d' );
define( 'SECURE_AUTH_KEY',  'qq A>.UvEk6S)0  d8UbF9;@GQL+ViLXr-WDjF|n(uA1+o$y&X![2>N6^S?#ZgsP' );
define( 'LOGGED_IN_KEY',    'MH_vZ1E*-uLF1Q89y3E7v.1pPa>M*trP4u1[8o: iW{=GVO/{%mZ|feS=}oE*y@)' );
define( 'NONCE_KEY',        'Lz{C{J5]XA57J@*s5*($w^M(W)nH:{L%CO6kdU!X<e&8=XTOlvuQh|Z.wD(6J8ne' );
define( 'AUTH_SALT',        'gaujF4yoZ#ntk%h{.^@i)tvS/kV:&2aHlpc9k|,9D>EG}|b0_:NY%?6Tal^yW!{-' );
define( 'SECURE_AUTH_SALT', 'W`x^.V7S?aZbzSpX6MS+/*0W|ECdmos!37.2qWRPSGbL[wc9Ow3XZC?q/;K59:2k' );
define( 'LOGGED_IN_SALT',   '#)OR3:i&2GN.[7~cUy{~Kf-u]#X^t9Ib46dB DZ!<!;U+:__>Kxx:KCet$<!`OR#' );
define( 'NONCE_SALT',       '$&M.y=>(g!dE@+_gDY)qzQ@/,:FEb:FJG3YF?mborpM5i7AqS-^t{?Ud*G P<ud3' );

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

define('WP_ALLOW_REPAIR', true);

define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
