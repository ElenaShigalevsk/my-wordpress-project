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
define( 'DB_NAME', 'zr241323_cicdstage' );

/** Database username */
define( 'DB_USER', 'zr241323_cicdstage' );

/** Database password */
define( 'DB_PASSWORD', 'zF9!m4s+F4' );

/** Database hostname */
define( 'DB_HOST', 'zr241323.mysql.tools' );

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
define( 'AUTH_KEY',         '#a:r ZVmq.&C5}Y?Ko6u442v Hu|-s~D0FKTrHWP,y?d3<3`a*O2wC^sF|:7-gGo' );
define( 'SECURE_AUTH_KEY',  '}Sq/Z}>cF^<$U46#Q-y{b:<GcuNXZuSCz%N>&i0hA1+&3@[iIyKY`_QAb|1ljjtZ' );
define( 'LOGGED_IN_KEY',    '2)=,C4mz=_-xBqfOkq-I1BA3q[(V<h^FT8zuc^lkeHk=!&x[;owOy6Mnl+PSc%iL' );
define( 'NONCE_KEY',        'a!FnR-[3ECr[SVK6gU{i{_+/XSvEC|T<czO6T|P@DTos=v#7h[C^cBg|*jqg>XNm' );
define( 'AUTH_SALT',        '+2Hm2wi(Qol 3!o6M3W7eX$DV-Ks DNcMI 0M-$GWFe}4Dp~w:kV,HHa&qOX )T;' );
define( 'SECURE_AUTH_SALT', '!Bf_E^`;>q7C@u?XM]YSt9c@bUyNE;{.C+0;w|F`Ue&@IVI@ThN=Pp@[-!q&v!p1' );
define( 'LOGGED_IN_SALT',   'VwG7ZjdX)p4w6nfUPx iX@&Xh!R$cAC_NK4o8OUS]r )tbQ&DLK`Q4O,ADxH^52V' );
define( 'NONCE_SALT',       'P$/9=St$ ,KC?giHfpwmBlE|$EWQQDB4$A)?>OaUqelip*9T]1sWc?oTlh_Zm*pa' );

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
