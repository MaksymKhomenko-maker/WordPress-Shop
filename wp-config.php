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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
* the {
    @link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
    .
    *
    * You can change these at any point in time to invalidate all existing cookies.
    * This will force all users to have to log in again.
    *
    * @since 2.6.0
    */
    define( 'AUTH_KEY',         'bB!oIQeX0~Ru|sDncPj$O$tIl_,2HhDMY7QND2}Y]d8s>l?=AX1kvgqbm?zErIAe' );
    define( 'SECURE_AUTH_KEY',  '+@W.+2Q^g-ovAUu|T$^mh*%xMov3Fihm;Cd(H9h2O=<RFP+/5&nT{9}fb7G%:uBt' );
    define( 'LOGGED_IN_KEY',    '6G)oldr!Vru^hwW4_SR$SCo4(!),UTM>Mxxlb1fY^<KjgB;f-Sb#1N8Jf@m[*O;I' );
    define( 'NONCE_KEY',        'x{`xC.@^wwKWxINCU^hT2&dAiYhRbp^wlUI5?/v4)ck.DT<U4y7Tg1VEIpYTF-%F' );
    define( 'AUTH_SALT',        'r/(OW!lJmG^!Hm9NIj|,aQ8+M (*SV5kpCPU4qJT5>;T_8(xE<b4N)`8!ycWQGe{' );
    define( 'SECURE_AUTH_SALT', 'E=Fh$Z#W/jG?hhrW#5LQERJBx`|8eggwlpAFI%vp8B3R<CFBw<!S!:*79?G@%Z S' );
    define( 'LOGGED_IN_SALT',   'Fo;@qe|B3U$.I2^7I&GO-)%&5tUo5yh6o#L7oleq4ku|)Yy2H3ixbA<fWFlYtco/' );
    define( 'NONCE_SALT',       'fQ)qG>g@00jc)}+xdF:xklPTvurDWUz>;EX6+BG6[Y wXGrCXX9y]xw%[YJ-=NJU' );

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
    * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
    */
    define('WP_DEBUG', true); // Enable debugging mode
    define('WP_DEBUG_LOG', true); // Log errors to wp-content/debug.log
    define('WP_DEBUG_DISPLAY', false); // Hide errors from displaying in the browser
    

    /* Add any custom values between this line and the 'stop editing' line. */

    /* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
