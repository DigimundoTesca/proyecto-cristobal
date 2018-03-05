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
define('DB_NAME', 'cristobalj');

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
define('AUTH_KEY', 'mPc(8bGM;&)(vd?AU?]rsS(Fjp249S^leBxk4RbPWWk>Q4M<^t<j!NUFi]~;u|=4');
define('SECURE_AUTH_KEY', '9Rc]fT.!P1^b99dROnS_~Uh;^[@ ui]<%U[ uZjiGvdfTSI QXv&)cM8d4CzWnK?');
define('LOGGED_IN_KEY', ';W p-;1NBFb*8^143Ck:$p|t]8j/]QXI.@1ex.%v0 ~N70Dj`vo5g!`lcW0q?6fk');
define('NONCE_KEY', 'eDot!`RSydrT]-ey_,>z+McqX$W_ MOR8 b{0HQ[%e_EC1vPMJ:6=y>{ D/zb%05');
define('AUTH_SALT', '_FzM}V(CxD-a^K*+~Up^**x;b7LFL#%qHI$>UtD)2#P,):s^>,;hn7&Ne@alT-1q');
define('SECURE_AUTH_SALT', 'l:hrGfl*srtMw}/.75,:ST-nt4(U:`U-3p|YJv_RBG+XBltd>j-TEy.s3{Ak^YD.');
define('LOGGED_IN_SALT', '#lpJAEeFJ/me*r;y,9lxjqcq$Xeu]^X64aEk1,W1ET%o%nV#cL>72hGNVyLAm,#t');
define('NONCE_SALT', '/tZ Q+q3 lik]OS,N|C2(t%4&!-jku9ix52KP[S!#gzIV0EcZ}f<#`)_WS5I4=[B');

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

