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
define( 'DB_NAME', 'convergence' );

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
define( 'AUTH_KEY',         'qR[VIv+Bwt%.rWoKlLflPz[SzIcIT`~cY`em?BJiD7j_QQo`KjSBU>L7;4(JWLOo' );
define( 'SECURE_AUTH_KEY',  'Vnw:&P5GlCFt~!~e3ZuR%Atgz v=X.Lqt%vsagSrt,7jp;qZQKUtw_*Ms?O]Nvjf' );
define( 'LOGGED_IN_KEY',    '[*V!YuYz)?MGkr,:HsD:wfu*`T)Kk_t7oc`[&/OTrNFl7+ez^G_Ljo6q&S95cXMA' );
define( 'NONCE_KEY',        'B10Ke5,`~$QDB 9}0y8SBH{34W@X=AP?S>=;V;wy&83Q;P|ukwk9APMQN3oU:kY9' );
define( 'AUTH_SALT',        'KS<T+`U1s%-X$=@.2.ro&.V3WLn[t=BV:+kS>p[1Id@ia#$Pz9Y4E7T^k0z?%f7?' );
define( 'SECURE_AUTH_SALT', '9qC5)I]5[9z*FWB@SC9Z`1jEhF4uCgCDU+l{s7][FA`r#@>N:!Fu9(~C^MEf,|[F' );
define( 'LOGGED_IN_SALT',   'ju,k>NeZJ]W$YBK9+Z[o6g1izK/<-pO)k:<P=vH)>FL+9OD[&]a6$}k;R88bo-Z8' );
define( 'NONCE_SALT',       '6X,XEj9f-pc;xOEeA/;g,eopO1pWnr8f$P~o2~Tpt^&z0mCnwwE3WF2 ft~O,7Hh' );

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
