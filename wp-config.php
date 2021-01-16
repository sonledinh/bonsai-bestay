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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'back-bestay' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'eEoSMB@?pKdPWNh<YLW=:WN2S=gaXAap>/INr3u/6Ar KT:!sF8A=f)8&d+)M~~c' );
define( 'SECURE_AUTH_KEY',  'q6.4CJG3whl1gi1zu-D:A5d)vx~^Ub#YzK6g*U3oLP v=]-M05=W5,A![i:Z+6|^' );
define( 'LOGGED_IN_KEY',    '(~@#q1;R$d7v@o@iLtv1dsSn<8mpCm!o0Ai]<lFrio ?B]?.k_e~9_76GtbQ+iuJ' );
define( 'NONCE_KEY',        '(|nVaM&Q{(-ITc.vhuN;$bC_}-OZ)OtZ2J*2cw2u&aH5vCrf^0o@vzHFUl]+M*;{' );
define( 'AUTH_SALT',        'tv%Yg*V4PHV7!!d>5pOKo fIGLBE@G/!t7=xflb&!D4p1-]X3Z3Vpy$v(uQD_`3@' );
define( 'SECURE_AUTH_SALT', 'xFQZN#nlSk$7>yuE04R^k[ 3nJ)Q(<wtv5NYsEi:%6 +zX Lh^P]Sxf=;Nt~EtH!' );
define( 'LOGGED_IN_SALT',   'n_x=!89O(I)qB=eP+dVj,XWRz9==jj/(UvmE9tf%Jg<ll20LaV[MqC08Jc}o$&N|' );
define( 'NONCE_SALT',       '-G([m3;vg29]skFn{umOZ*oeUv|[*Ra.WQ*]yb#WO%e1;SXX}s?19+vI=>Hk8zE@' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
