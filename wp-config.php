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
define( 'DB_NAME', 'contactpoint-test' );

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
define( 'AUTH_KEY',         'y`X,Z=4)T[0_9?GG.naKsUQ}z^g?&ucQsI`IxR^Uf6Tof4x2{*^JzxK;l{_Q<}5F' );
define( 'SECURE_AUTH_KEY',  'WI*N5p,}stxDBEyVx.QA*2fE_q%F_^NeUyPsC(61mvVZm:qkOGis1P$S#Hn.q:!3' );
define( 'LOGGED_IN_KEY',    '!pwtcAb;.bAO#xp~RwTGIPBQFmGtfrlKlVaD-~bq<#?Gc?~4;v4#CK1j/{H!HUPD' );
define( 'NONCE_KEY',        '*0|bgD7AzT4oDCc(ua&h& m$qEj%XNWs{JXxn=n7uTSHH!|n;A4Ccnb6z~>[R%Mz' );
define( 'AUTH_SALT',        ' XlcNdm$ ,edO;NdE]c*6Re 2#DtNPqR$4%eBT-_Nlq:VoR9B50#hIB[Csr*0Ej{' );
define( 'SECURE_AUTH_SALT', ';[QMy_4ffl_/8rU ei9V=$?[akX!#?S6)m!6X{b{&hyfh/[)So$N[G$vAbMXp$cI' );
define( 'LOGGED_IN_SALT',   'yv #R|: k$ybnL5+k!-[0?<bL^-e[w@vbG|tcw*hQlGCBGt,J/y4|,,v7kn4ZbSo' );
define( 'NONCE_SALT',       'dq@CN|rR^(vx@VU]J0_VkPD9av;<}blBJu|,,W17=N>u?ErHkU%g,&.nlZWggg~u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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


define('SCRIPT_DEBUG', false);
define('CONCATENATE_SCRIPTS', true);
define('COMPRESS_SCRIPTS', true);
define('COMPRESS_CSS', true);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
