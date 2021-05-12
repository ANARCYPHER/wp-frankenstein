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
define( 'DB_NAME', 'wp_bina' );

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
define( 'AUTH_KEY',         'ivl@nK[|?Exj3UWK,bg%??MTcfOAX?S83%M94ZP</<3TCM~g+PqEAgZNveTU;yg#' );
define( 'SECURE_AUTH_KEY',  '_@k3|Itw /|@xC%j<}0S+IThS+_S>-EuP(DzUcy.exGo0sc*RDr=Y|3LR0BKb}<~' );
define( 'LOGGED_IN_KEY',    '36F1zT{>k2q?;3:c1/]s*a$L!Xq$h,]iBwIXtIskU289bIb|r$@CIla Jq-Q0h>K' );
define( 'NONCE_KEY',        'COgh1,IDBQ5R?!N*gQKJmP,BQ)W>#uwqSkj@wVmW 3K|0r^dqP&:0g@<R3IBjYFw' );
define( 'AUTH_SALT',        'Q|N`@YQUe*j^#[_Vh`MlE$qtZ@^Xc$|&.6|:DE1#x}oD;d6&J%>eJiD`~*j*0ABp' );
define( 'SECURE_AUTH_SALT', 'SA%$COi425+./7k]{(1n2^/2BI]==XX_`R+&2z}yedC:4L8XP*PSiGB_YY8@Qyt|' );
define( 'LOGGED_IN_SALT',   '/Qv)*^_>y&wk[}t}mu+_h2Z23fs+N9&F~GXyQ8:i$hET5)^d=o`)r]S._lv<4:{}' );
define( 'NONCE_SALT',       'S6d_x1vuD0S{-w<vpgpqW3V)/z]W=>sAQw@qZ+<K`},<|?*rv.TUb+:m6RXf,Cje' );

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
