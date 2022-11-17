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
define( 'DB_NAME', 'dpc' );

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

define( 'WP_MEMORY_LIMIT','256M');

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
define( 'AUTH_KEY',         '8y+@#*R]+^f+0fLIIGM|W,Ua0<:$/&nX?LJpo/z]B/=0!&$CoGc{9IRIT~:MMF[n' );
define( 'SECURE_AUTH_KEY',  'VUXr?:jaa@$2[XZ)ba;+#fF9]Gl/7n<A@6[vg(IXsV2`c>ybJKsxD/c1j7W??OG=' );
define( 'LOGGED_IN_KEY',    '+A94a%lR4!M0JZ-#]t)~/78V?!;{+!$xM0 !b$HWHWX 5p;O~a;l5DDU]s/amL@@' );
define( 'NONCE_KEY',        '6?sSiH)#Ch- k#kmM w?:|,NiHY9RO(p2b9TWvUradzY2KH) !>4UCNG`N]Nd-,{' );
define( 'AUTH_SALT',        'na:b=j^)9ybs$Ezx W_pvV)>.s4b]zz@5.Pr+-#jRHE~[9a&h6->h(>Vh[Zp]#C,' );
define( 'SECURE_AUTH_SALT', 'oluXC4fbM<{=/`]d/9+QW()d1h@hYbclrO^<v{6E~0E]O zM~FEsI/7Y8Gky6Z;c' );
define( 'LOGGED_IN_SALT',   '3Oi8r[KD#Kc1pJ s^Z[,Snf7?oaP,?n{nUO6L${ji0{-`k8PE+M)$2|PK8:rLm=|' );
define( 'NONCE_SALT',       'L1_a*Pui;o^b +t[hYo:<v9K@&~e-m!E%6_V|xOxwd_O[Hn_nl~qo %!] Tz|*9L' );

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
