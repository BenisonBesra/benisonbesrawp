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
define( 'DB_NAME', 'benisonbesrawp_db' );

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
define( 'AUTH_KEY',         '[.Hg=,$>=?v(1~GC6<_j9^fn1~yX]dP#=o+;w(yc,:!W3< Jkk:J@Tg]dFE.S5 j' );
define( 'SECURE_AUTH_KEY',  'tQw{!Ou(Nd0H7Wjgl+zlqvxYWU=j^_wn3~Ah(+|HNgO+#6n|T/KZuMyrzkX:I?yj' );
define( 'LOGGED_IN_KEY',    ',:wM=u9k!Evko*,Uv>X/^4(cqG}hOB(G/+r!~>T8Map-mOCHvsPEtrXZEDR<XnUM' );
define( 'NONCE_KEY',        'V+jurtc-2c&j{x,9jf5Kx:8=liOVL>OClV^Gi*fZEA7o+hT&}+|?=Z1YxS+o|&){' );
define( 'AUTH_SALT',        '`Oc_z-_lkX7yyZSPBXskw VbTc!H~/lPFsOK4&Mi2<5z1JyD/a]x#7w}6iVTdd7t' );
define( 'SECURE_AUTH_SALT', 'Q| jj&4D1n4UT)L_o&0Es,y5MJ ~i0+1&>Zwe:2I^,2n=S;3T@w:viwP/5+w7BZ`' );
define( 'LOGGED_IN_SALT',   '8A#%b.`#LaQ)X%DMcywkN4) A5FL*+l&iD&tj6~y8+>0X*a0L#L+4Ko+.}L#z^Vy' );
define( 'NONCE_SALT',       'lNWP.tK3U?1xy7nWzcqjo*QUKEl.x}TQ_FaS26@IGWb&rWm/FuIdt*.<zZmU}vQF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_4';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
