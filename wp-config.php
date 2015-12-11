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
define('DB_NAME', 'u657800276_test');

/** MySQL database username */
define('DB_USER', 'u657800276_test');

/** MySQL database password */
define('DB_PASSWORD', 'kj3IZp9Fho');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.de');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J3{+fia&B*dxX2vBa/^9::1@-li+Qp9ToUJ|b(w]~*Q6.J9hYDt,ZL$ nqXY.~y5');
define('SECURE_AUTH_KEY',  'lV S{Ca1iavL8 ~CEi.68U6lyQVzg&Z|H.dK4WdT Na8n&]OPTrDfnf.QE7(]7^6');
define('LOGGED_IN_KEY',    '-<dn0-UjlBE`+g+Z^b/kmz,b]pY8%eUlFpRzQ2A`V6Kb|6N>F0(wx*`iT.oG7#p%');
define('NONCE_KEY',        '01`|MFOp`K<GeV$|j:#MxOZ@muZ}5(*8Wc#_hI%*b^s;?8T$&WN>`+]g&<5S$*-A');
define('AUTH_SALT',        '-KHxJOo/4v,B;Acp$e+hhl-;n[`23:3K_3|3)d5UeMO4]=|p+cMQK.?9:C|)9bRW');
define('SECURE_AUTH_SALT', 'xk=B|h`B hB[L;&}]|kWj?-w62SI%p-n!BZHR_o>+TeB{q[8G>h|vq.^70z2t#_T');
define('LOGGED_IN_SALT',   ',TzfVTY&sn~9xFoAU2Bc$dU63-4|GJiMK`G*[-G{1_z4u~xwBTp5e^I?<+d3dF,o');
define('NONCE_SALT',       '$4513u8n3n49os4:>krV?s;46,BCcp% mL[ ),{3#-tuSAmfyoQYsXwePSC6jWF_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
