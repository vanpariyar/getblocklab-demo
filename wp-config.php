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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'getblocklab-demo' );

/** MySQL database username */
define( 'DB_USER', 'hari' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hari' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '0@{A}52DU1Hc+%.aQR6dkIsU%8e|XMiij2S_ 7}~Fpe9KK0^@s7n}fH`Yon.Z}.N' );
define( 'SECURE_AUTH_KEY',   './yD>.Lkj7%`Hai~F43LBbI~$mw<@XA:b:E@6<;_4o]eFEsvn;WR#rr<RaYF@?a8' );
define( 'LOGGED_IN_KEY',     'L}?;~ ($00<W:sdQ0r2n<tnf:cR1u3SH~Gtp;:9ZjUbM7m[Z}8`gA<Sg3?;-i$53' );
define( 'NONCE_KEY',         's>c3GvH;7UTO!}AwF$U8ix|4%/1zZune=2E1Y_fcYFct*Pu<:ITV-sy=9+!fXz/%' );
define( 'AUTH_SALT',         '5P$SyGum2H:*w~/1{&H(K/5&~#IB31GkKiGc+t</OF;ml`%&Bu5;y_>Chir4G/_`' );
define( 'SECURE_AUTH_SALT',  'CuE|7<Ecs=e.J`[-2Io`QskG2mg)t/;wj9BuA@QqeZeh`0%2/{ciyRi yP-/:Zs$' );
define( 'LOGGED_IN_SALT',    'b7*pMzS;f 3L1at7;xuVCBpc&y7ps3rFo%PPq>:4+8-eGtiP3%2`H:eD1,!wI0i_' );
define( 'NONCE_SALT',        '6&;cNjds?N2xRl^)9EDS` D#|?;~%U%4!$G3ZlQCt`h^aEIdJbvYjIhtyb>Yj*5|' );
define( 'WP_CACHE_KEY_SALT', 'f%|^l{u:Eh4m>&>e5[V}O*[c1hB**Z@MM<dE :.b9>Jg=?&X0.<Af2RU--T<d,zY' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'getblsc_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
