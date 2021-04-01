<?php

/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'adm' );

/** MySQL database password */
define( 'DB_PASSWORD', 'adm' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Dddx/>n /Ad.:=Qo9(VGv<k3$n]@YCZ?#[_:%NSM;^]&+?|.%LTZe7>omL9[ %X_');
define('SECURE_AUTH_KEY',  'JspiI$8|V1hu:`)=_e$KAX8#tQF5vac]Aybtl}-^+uH~oE4Pt|e~nU_$N#`Q,$zR');
define('LOGGED_IN_KEY',    'VS#AOVLQ:2vQQA.#Dx.w{b:5@5ZU{B~@@M<IYM803RDh{D@pV?@sq]f2)1*BQa58');
define('NONCE_KEY',        '*3eN@t-D,ZZg!E/MmgO]F[*a}@jU|h?;-jDE&F?.r^JK5Gry&f#qb_-0G`c]rwUd');
define('AUTH_SALT',        'R0[xV7(8LiZ2b3-a|2CX]cXGJr!%}>3NyU?m<|8{=SA?H&5IX0<Pz8B3)lvpLE@:');
define('SECURE_AUTH_SALT', '+Gh(4ay4|m:zWS&4lg#rf#u{1q~9NCo!=xL0F.JXqEs} ` fQa_Z]dw_5,w7g]5N');
define('LOGGED_IN_SALT',   '%;@I.DEndVkTlil{KIMa%>.v^)BHL+t4l{8o| @.-bL4WaV-B8,?dp_cnnPq.%A/');
define('NONCE_SALT',       'pXL`m+_|6I+?W|X=:. rb%P=Hz9BURH2d#{?:1@R=90e_LU%k|PcuM_&SAYqHRzp');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/* For developers: WordPress debugging mode. */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/* Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once( ABSPATH . 'wp-settings.php' );