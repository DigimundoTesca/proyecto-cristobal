<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'basesita');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'oG;>TNT)RV)x!z`q|a>fME$:6`fo>mXY|Oq/wKZ}l3X<kh}[#`,VEM9;]{d|_*@M');
define('SECURE_AUTH_KEY', ';43%A_,YT-kdU0^kxj&Rw%{b$m[gono;yc,g[w MjcpHv4fC*{31?EOO.J+gp@E[');
define('LOGGED_IN_KEY', 'c!1]Sn-p<7_Evm{aylanJ#a{^X0Z%=CoB[P!!j#<:;OP!9gh~&HTTJ-KoK:S7Gn5');
define('NONCE_KEY', '^4^_yA;c sYM9v!W~;Vw>6fDt:~V{SL}VLjP-. N?e(~3&YsXzS$Nf6#$- -),{~');
define('AUTH_SALT', '(RYlIy;_i]XZtfX&.<%|Mi/y(a0TZ1m{.=1~1Q$k2_jjVO4P* Hr(o[F|v1=9j10');
define('SECURE_AUTH_SALT', 'p>)EdAsxe s_<wu[%~: &W>.t_D@,w^%/MO2G#kkO?:)ciP29x;_-js&Joys41Rp');
define('LOGGED_IN_SALT', '|5-Bg}ktO:g@fb*X0VVlmi<V/~(fw8BBox=/oR_c)IQQ@OB=*E(fQ)pyh6YePMBs');
define('NONCE_SALT', ',Ir~,4!k!)|IaX##F!?0EPYYntsY),c.,.o -VsZCciomtP$C0PDT[K^odPIoAR[');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

