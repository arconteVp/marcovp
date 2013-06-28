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
define('DB_NAME', 'mchqsdt_wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'mchqsdt_wpu');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'gaury');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', ']KPMG8SO~2XJ8jc]pA<z8:F%.!1G9`J1dz!;V9!q&F^HM!i9a%~Q{eW)DS})< ga'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'zqVq_AAj.lx:MKelR/1%-`8_vh4YmD:lES|XFd[CGVp=H9KB<(-(3^N;0LeK1MX1'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'lf/pFKkT[Ft%Wp]BC3UWf2lgJ{J{C, w+fXyumga@|lTKnu5sd^6Su_g,.<T%@4q'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '@7w%N<I|^lc_!%4DwE;F3_(HBc??*|47|w}bT2[7_B3WL0 (_7e8ggV7+0kYy7U?'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'Bk!Q+~[pZvt$4gX;QVsL+T0&>q>RzubszKUFSk9Xa]<pz|dNI<f=bHe 2Cw@?|EC'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '@MNptL8c)rrlf*i/u$+WQ( p|^^CkpA68]+Fcykw1f3@HzerFnW:Jj|[~(.)+dzY'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'H#GRg1f8pL1`tJeJ|N<DNq* =SU(ai596i%kHz:4Qt]ejgXJp/s{5EzbN*d~X]|-'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '8:q0&]8IylR]6V3u@=*iU,diSBM`54b0*zps_mhQ_`Hah-Y5$6)YpP*YoM46cbHf'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

