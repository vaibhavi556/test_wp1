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
define( 'DB_NAME', 'test_wp' );

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
define( 'AUTH_KEY',         'w^(ML~~7=Fx?LtOo02U!S}xpMChjw S=}XP2,>rjX,se.CvGJ*/e=i&?07OUe2pl' );
define( 'SECURE_AUTH_KEY',  'S-.eI;DdDwmAHYBssJq^6^*mDA7go9Z%.%y,H$uGOjco$eVT5vy2B m<qkb1s4K,' );
define( 'LOGGED_IN_KEY',    'ViMm]lV}-0%Qjiq`G#wC`-*$wIOuL$1Z6{-DqFgZ|XEJK]=HRH3S&I`w`(T]?t3S' );
define( 'NONCE_KEY',        'KX.kt@u)f2k+wP!f7JV+-=5C1`D%YM|1U`PpmHsmhA1lMY;]H.`8>|Nu{+3GAE?5' );
define( 'AUTH_SALT',        '2K-`[z}CA^He1X=D#spy}c;Ew5hI;uHd32VI;lOgVn4~Sc6/F0&E/JH7<`su7<<q' );
define( 'SECURE_AUTH_SALT', 'gCq_cSx5mS&U|/QvaD9T3+<M%uu]]EH.L;DU:WXCiIW9?GmLisvT*}Pi=U1EO_N?' );
define( 'LOGGED_IN_SALT',   '7tk+S/I!@KYmZ&U|lfUEf[;K}A7<)koD~4Z5.yU3]r=u}l@^kLzP[ni~px>%1&Bp' );
define( 'NONCE_SALT',       'w:O-(q@BAKE(f%+PVht-*Yzb@k+86I^>P2Nt_hP8aHU`89=hlv_@cxD[1iHvhG})' );

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
$table_prefix = 'dvbp_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
