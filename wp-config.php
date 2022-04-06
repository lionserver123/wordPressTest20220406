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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '_n-KF#bF]9]rD~.KO/MFAq!)bbP<>3FY<At]9NR1SQ3yAfR[RDuO&OJ2?pU}Bztp' );
define( 'SECURE_AUTH_KEY',  'm>h{A$5yjD<^$gidnWb62xhmf>Ed$/bYh`i^:d8xWh>$8{?%#R?_fLTFiLc&j`%M' );
define( 'LOGGED_IN_KEY',    '!<x)R8Y}>en6+6P<RygPghMZ.l`Hf+^WvrF:t7OxQ>Pt*uKXLQBH<YUSyZP{mPv*' );
define( 'NONCE_KEY',        '2w<DY%C@>}x OT!u?59O&I3olL`hn}~NtI<{mI!LN.%2Bd@Eh)A>3(#{7xOxG$ZL' );
define( 'AUTH_SALT',        'oe|%U$qE=!v`#m102S.GIh|pz_#$>/iG#aPSuPER{6kX*6dTxEioC9-_}$rh{F@?' );
define( 'SECURE_AUTH_SALT', 'T?icB/]Zx#$aLa|:7tErA~e<Alf*O}6a!{(/Q^&YMPBsN:;z6wsSO>^lPgYfp7ji' );
define( 'LOGGED_IN_SALT',   '(I#sopc7H/wEAv6 y=z~[|DPc216FgH*k@(#7i94kS{@!Fdx5EpA+Y_wS~nR|fV*' );
define( 'NONCE_SALT',       'psGm*1iieo>^g/_>Z7wDu0gHoE=ph<3rAtq|N3+z}[$U#&)rPz~RPbIE#Y$PQ4Lq' );

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
