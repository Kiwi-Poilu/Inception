<?php

/** 
* The base configuration for WordPress
*
* @package WordPress
* @generator yourblogcoach.com
*/

/* Database connection */
define( 'DB_NAME',      'DBNAME' );
define( 'DB_USER',      'ROOT' );
define( 'DB_PASSWORD',  'PASSROOT' );
define( 'DB_HOST',      'mariadb' );
define( 'DB_CHARSET',   'utf8mb4' );
define( 'DB_COLLATE',   'utf8mb4_general_ci' );


/* Database Tables */
$table_prefix = 'wp_';


/* Authentication Keys and Salts */
define( 'AUTH_KEY',         '.D*%+Gio|+H0]K#d4F_%HV+FA^n{M396WuakPXYz=9^3}^+Mh}J/%ly=~lAB=pX|' );
define( 'SECURE_AUTH_KEY',  '`~]FeaA#;,%?&]M4x9tR]dm)4s.-K(KO,(Z}R-7,dEksH&5MqUYVMym%&jgOJrkY' );
define( 'LOGGED_IN_KEY',    'lXDqv2VsU4i{M0grT~m?J:g9aRQaHgHanyeYW!9hmO+W7FPvRcXsB25{ME]rXBCm' );
define( 'NONCE_KEY',        'PpuIYsI3D{I]8gN`tF-L%s?jh$.t=D|GOcI2vq?B??Z)bU_YpA$nIg%Y(1,OX{^?' );
define( 'AUTH_SALT',        'pNj=bWG-e2;GRC`T8v[ot0mM4aSSE&q4U3-v^qo6W`ygR(;vbPx!K_JGqM/?KvG{' );
define( 'SECURE_AUTH_SALT', 'ez_H^)^Zb!QqLXNSWuVjQWdxB7Jr[~M+ePBRO1QOn.]zWfYm7m5#:oN!vOXEv{_u' );
define( 'LOGGED_IN_SALT',   '1m&FK^Dja_Lq*=mj?Ul28HS-ccy%H!HuiSWPf3[-]X*E#a/J{Ur!O[R5HzDMP7ww' );
define( 'NONCE_SALT',       '~.za5dv;|Q+{/cl?E?7`F-0.!eK2[nP3Y*-426cN7wc,}2lbiL5L;bS](Jn79#7w' );


/* SSL */
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );


/* Absolute path to the WordPress directory */
if (!defined('ABSPATH'))
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );


/* Sets up WordPress vars and included files */
require_once( ABSPATH . 'wp-settings.php' );

?>