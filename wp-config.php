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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arsha' );

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
define( 'AUTH_KEY',         '9?rbYURAf9@B DlnK1jWV1#,WYK|sts]*Hz#QI1ynQF:y=m$EhtHI>E^1,[[9#Gu' );
define( 'SECURE_AUTH_KEY',  '@<&^ykB3NggP=+Ug}(Expw V~dC6M}q>EA-v@@^VZ[%t_A^1|(:q%efzqUx wUyO' );
define( 'LOGGED_IN_KEY',    'peV|Z^-5]oXa=xk|iNt@hh1E%<j5=#$4>MV<vH.O;jHB%2Sh<{oZ)*SeiQnT1-}o' );
define( 'NONCE_KEY',        'X:XJ,C({AsPbRUVE{1qEL_4&*Y-=/(<4g94^w~#A-&zc{8#{rOEjD@b_bpq}<2:g' );
define( 'AUTH_SALT',        'pv WGNJ!&7r`X@_=4cz]nL X00`NR/Im7*Rjii]?3%Rnjgc8jM,vlOKCW4@y`lRm' );
define( 'SECURE_AUTH_SALT', 'wj#LiF2&p39QXT53se*M@0nCEL#c?H$Q6G-D U>/JAUx*,0I`Wdl2N{(EpbaiTtQ' );
define( 'LOGGED_IN_SALT',   'VB sF_0Ea7FmRB),%Z*=A!<*a+bYH<Kn=gpM<*1K)5_Yc+/FKy>$3+UO2?5<i]2N' );
define( 'NONCE_SALT',       '`+B{wEe~MNm:Q[vK%Mdh>m?[#-an7UKen$U0bBXi}jY~w!?%:~V|*>4aK>q_Jto@' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
