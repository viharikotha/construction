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
define('DB_NAME', 'con');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'wenso123');

/** MySQL hostname */
define('DB_HOST', '52.31.22.59'); 

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
define('AUTH_KEY',         '{x)3@1Q@l9:J9S>?3<MN/r[H%TJ*6=xs!3D4irZuJ2H|l3fw&%J%8myLsAKFx^5s');
define('SECURE_AUTH_KEY',  ',d4&vJR/6O#LEFs5Eshhm1PR$d-FMtK-S$QI=ZwCEv P2{Us!qa2)7-l5:j;3i/O');
define('LOGGED_IN_KEY',    '6Msu[zQ3YlhcQjT53iJH{$Bp0fMXt]@$uHUD(v}NV4Glwft,I}&9;NnCQUtYL&I%');
define('NONCE_KEY',        'bap#d^w+plP+8f>?O,$8bj:G<U0u?J^72t![gEvN2Uq/c@O$NLAN/Q$@)bn.iS3S');
define('AUTH_SALT',        '>8G^3@7*(l+:5kFFl=;5TLGZBUJ%lF~5XepMVBoO,Qy$(UbMgT?yiH=Quq5^FSRz');
define('SECURE_AUTH_SALT', '^V#TE?iITd?iZ^Q{FzWWt~Eto2I&D&:Rl9wa@%WMsv7Zt&~;2jkB+j7s`S3of6tI');
define('LOGGED_IN_SALT',   'Gr]0nEm4d`vLMiS=U$^5q4@i61TS<]vXYhgf_xG@ks3jsvNbh^C*dM~/ {{cRsod');
define('NONCE_SALT',       'N`#h{|P>woilODM[{n=3/t}x<j;+{6Vdq|~.<ltt6X%v%N,`DUk# .n5Xc%askzW');

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
