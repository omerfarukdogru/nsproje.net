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
define('DB_NAME', 'omerfar8_wp671');

/** MySQL database username */
define('DB_USER', 'omerfar8_wp671');

/** MySQL database password */
define('DB_PASSWORD', '2p(VY8.S7x');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '5qxsjuzdjzi9ufrfw3mlrm7mxgya4spx84bkmlidhpdtxrrw27fjxhsvhs3pin6n');
define('SECURE_AUTH_KEY',  'pu2vkrfxm5kociogfjyhsq7dbiciqrulmz8otogoy6f2jft36b3hvv1yfsyzgzb8');
define('LOGGED_IN_KEY',    '41rupezrhyxsbha3iwcoi9gzkjagevpdbplerrctlcm3wjns2nwqfidxszl8r48y');
define('NONCE_KEY',        '3ufxtzx7rfx1qbqci18zgehadwa49l6evoqaubucihcd3rsrlgdv3fsnkklzvssd');
define('AUTH_SALT',        'ckfpex5nnkq8weswu3yez7tsnwa4oyai32gxc3h3lga11udbpovd6xr1lsjnthyw');
define('SECURE_AUTH_SALT', 'bdstvutuj5epvka3jqf3rbfyydunjzlgrchluxbqukuxushqxlclecvazbbafgd1');
define('LOGGED_IN_SALT',   'rclfmchzc1049fwbons6rbhcqwjhawexiauopyy402i9x5fpwf3ukbpz1tnq6jg0');
define('NONCE_SALT',       'vgt6v3smgmirt6n2lnnbmepamj3jcihw2vxtzblyatwacpkabkwyitjv0rh3xjur');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpei_';

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
