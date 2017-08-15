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
define('DB_NAME', 'crisjodow');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', 'j~uT*U?/izLCPDFR?i&ULcf42E.4s>A&]THsm(|rJyo:?mip+%Di.ZR58&:8zInD');
define('SECURE_AUTH_KEY', ',>I$P_Q7b,WY)fzhpfBfR5V&Y}`(6v&#.Q](V3J])~sVixtzLVFS$_Ms5de?= `w');
define('LOGGED_IN_KEY', 'mC!;-VIKJ-MvP*6&?<?D:H>R7,;@Axe<i^KhCVUdAs*.hc-{m]q-YF]oZp+I=3V:');
define('NONCE_KEY', 'Z8wF6f2|{ q<cqYQ2`}EA{(]w[9?Q,u_EJxkLA#?[Z:#}Ql[ataniea&s(tg);-_');
define('AUTH_SALT', '-Hw/^Fw1 cdv+adbuXEveA5dPVhFR`8}ej}(CcW[Tp`0>T@#~URCz>Oc3!_nWnFg');
define('SECURE_AUTH_SALT', '+2|=}WZ2-s_uZ`sD%@,9n{hb^N&@uD6qPJ((it;1QCIRMpiFU~rw],xv))kzk{;w');
define('LOGGED_IN_SALT', 'ZSsi8^(iC)l(=pLlrT{_UXlsu@[Ma=#v8Ghz*K3-+K}>i![Dc_LkD IhhMt;HiEp');
define('NONCE_SALT', '*LhYMC5A1x8lRTz2f&_!i,DrBAcnpZ0SBW_qz7<oE Vvhny=nz7qRkSp7%t@[=VB');

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

