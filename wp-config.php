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
define( 'DB_NAME', 'cooking' );

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
define( 'AUTH_KEY',         'ql]A :?2RJ^=d`&wg*SXAV7PoFgl)|?a&I7aq{i&Ng#n6zO)9:TL7}$*8njiQm.T' );
define( 'SECURE_AUTH_KEY',  '$zX$G{E i?G}?-aJVEHAS=:yVj<gG!X&iO+`Nzo&Ud0J@i<hcyK1}$fQnBHVZPi$' );
define( 'LOGGED_IN_KEY',    '@yGNmR<y/ +c<GZ$:InXI^JvMxym1_3sZ-l0Ab20-XrU]mqKNqd@k[jyr4BI!HfU' );
define( 'NONCE_KEY',        '2}fI4Kz[Yhgc,R<?tMG@XR2QgN]j2r|DZkUNl)U>-ry=K3|ob$mX%cl*,6/DwZw*' );
define( 'AUTH_SALT',        ']?IXHt 9@hPTh7 SCaF3dF_u4#_l#Me t{]rR}fx  !/U6uJY#/]pnf3LjTZ48?j' );
define( 'SECURE_AUTH_SALT', 'fELVi1MGQ)N29oMVju]JRD|@0k;Bw~h?A9 #k>oclR#LBi=&4}F&j:AuBfHv5%4G' );
define( 'LOGGED_IN_SALT',   'laOqMm#rr3jd9?*cFs_E{^oerrly_^xy1f]~)j,uK]r-yz6aqza.{Zr=Gznl~Km<' );
define( 'NONCE_SALT',       'iLlmf%j2G$1AJRp0QxP!xL7}A:((>BFU&]74S7w!O8~bR=8=1 4}9`HMb:@wWmz$' );

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
