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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '}Jaju-T%_#`47271A^01zv.D.4Le]{HjEu[IM2zoLSjueD/Sfj@|~]KW AbL&TAu' );
define( 'SECURE_AUTH_KEY',  ';~3I8Q,VHbeLhb]zyXnL}{`BFt)sDQ`/)g@R0ml[Ft|,KK15$K_!U/-c1CN~nAKZ' );
define( 'LOGGED_IN_KEY',    'QLj`3`Tl]6Ax#G}baIfwA/6ZaNiL.^72h~:q5+P2AJ;,5(rlJzqB$vOczy-Sfo^k' );
define( 'NONCE_KEY',        ' -LM-h,Q? x]0xrV7v b|,IB)UHIeT|=7wdQ{5d=1uaS;};2b<P?nT`FM{LRKWZY' );
define( 'AUTH_SALT',        '3IALq/dh7$[OqK^NPyz L/JCU*a_S!>UIkm}%F,R#;Vf+kLoxH88Y6*Sm}^otqSC' );
define( 'SECURE_AUTH_SALT', '2_3V)rdKa9qdUFldKUZ@fW4XUqznhHTvw+$,Z7df_V)K$]~r59sk<`yp`J|L7QQ+' );
define( 'LOGGED_IN_SALT',   '-I Mu5uo8bnaw[Z(/EYaeb?DL}jhVi{N&;!6,95yWbWMF:#;[GT/cv^c?s%<,6`@' );
define( 'NONCE_SALT',       ')9 :ag^6(5eB2KKpj*5e4W#yG]lV:>:$$p]2)rD_wL*BHoq`|.[b~f@/.+mE$;u)' );

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
