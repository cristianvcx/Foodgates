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
define( 'DB_NAME', 'kingstech' );

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
define( 'AUTH_KEY',         '_&;0t^D<osP*c]#p~g^77#auIW|>I,pd,*C*+xg7I;bxo_c886Zr1=1c)4]ybNK`' );
define( 'SECURE_AUTH_KEY',  '8EQa woGdGGLj3T |L3o_(P:EnH1Qb1ck-S;`,hO(l0^n?29R.,|.o*y;Uwrf1|b' );
define( 'LOGGED_IN_KEY',    'I/l+4h$v=v>0?Ec4)45WdL^zh1XnW1~I?RkjvWr#19~45oru>GR%RO.ntmFT6)4;' );
define( 'NONCE_KEY',        'olUy`ma7zZ>-vT;L{l}R}23<]H$Mx@qb[Jh.MsnY!wPa?)J`*ey2[oj?J-[C]gP[' );
define( 'AUTH_SALT',        'k4KACZ/6KYO5/#u/w@6<q$Yk&>1rKvYL2nM~6C_WYyy/ZmG{<=VVLV~*4u[2smVf' );
define( 'SECURE_AUTH_SALT', '_6~.>(h1e(u(c;QH!+.5GLb9@X09L(o=Isp5Ty7[=1qld`$+L_JQ,<(M4rn85})I' );
define( 'LOGGED_IN_SALT',   'w VbL3d**<@gB -Zx)Ck^uzjXQ3&r5Kofv$F[kID%-(TBuiud,}D| m34rE6G:hO' );
define( 'NONCE_SALT',       '|s~II=n<xW0V#~P@G4<N<tb}Cvo<11t-A0pV2vA8cyZWW<>=G#PWk$z|;AnKc>y}' );

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
