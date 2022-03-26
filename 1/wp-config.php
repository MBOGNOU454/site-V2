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
define( 'DB_NAME', 'dexxys' );

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
define( 'AUTH_KEY',         'L*_rL*.A$wXC cy6~EgT~EJR!S4?aM+^?.l{W/ozZG__R[s#J1f9ccqOKnpU,(w0' );
define( 'SECURE_AUTH_KEY',  '#A>Rx =!IUYpCE_[*==yFCNiX}H8I m=~%)`bhM(0Oy],(!kThw;m9L<%dNJ,eJ!' );
define( 'LOGGED_IN_KEY',    '<PXTAQ3[g_z-fHHI.U?0GmZU;{l.l*>=hIV|WQXS03K>a?oj]8JtF:]Y$1H_4i?h' );
define( 'NONCE_KEY',        '<S1Q0>*wrOb[Uf<?*y_/]r^Ki5|8MWfg%nAqJm&;fk&&6Uc^NhYE2f60TWoPr*-_' );
define( 'AUTH_SALT',        'G@T,ynaL<Y>fBO[F|h_7s)%J9Xo5<TUNTA+*Y2?`HXI!kVe/ PBtAAQp=|<[pQVI' );
define( 'SECURE_AUTH_SALT', 'G|,[WC+${l_^:f^d=.s)p[KVi_mPJ!T]n# VF1uUyUJ>9zuSqouNP*73rl$dx+tw' );
define( 'LOGGED_IN_SALT',   '}P^C<w7$IyZ;]FB_U~fGdU|a3:&m|M|nq)1l6P?M)ot+NA&lY.4<||)`DA!_0-vQ' );
define( 'NONCE_SALT',       'q|z6+XSg1p{UYDRT`_ojZE93?KWH#{*j324`W>=q<I|B4&m/gSVeJaPHTHe[.Drp' );

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
