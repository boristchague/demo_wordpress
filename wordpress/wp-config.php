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
define( 'DB_NAME', 'demo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '^u5K)o];>.NGoO2bz(pY~CHbD/|vP(]w{%LAp/!UGRja%BLCf1! EGjV$56KG<Y7' );
define( 'SECURE_AUTH_KEY',  'YDJGVK.i!dl@%>6[-$w!N`?QB&vm;CxX/@yi/  OF8(6*l3rEbVvu2+[bnqk|q5O' );
define( 'LOGGED_IN_KEY',    'Bc6^#$NTf`vrSzAO+I +EgBx2)c?P6P*ybS *:tvxp<mB>:7h4t6T>(L=YecB?1w' );
define( 'NONCE_KEY',        'J$X@>Hv^FR[PGAFbiCky 3{?ZE+[Iu4=)}m$f$FnI([A6Ba?BRZ>:R?G_z|RPyxc' );
define( 'AUTH_SALT',        '99v(sn)%*buyI`D?FeOpVURw[r{;F;pCJ0E~U-Qf2Wql45Ot5ufe2aVv[adl!ip6' );
define( 'SECURE_AUTH_SALT', 'Tv?NO5Pl+H}q#?W`R?qd3IaqN5Et*$`G}Y4XFWYyxCr/&2x)v34}C6RY@CzS68PB' );
define( 'LOGGED_IN_SALT',   'j}nVXa6a;6A^XmB&y{O>%Wk,rn7KB8a[Y-vUJ`4-h_ds_vkB}:ZU9r7879hdmn>R' );
define( 'NONCE_SALT',       '^!qOSk(aZP@g@]aB7V9yrvJg5(Q|}K7`W%9nQKrQqun/[aN%afN)A:>C7qZ.<2/D' );

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
