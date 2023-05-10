<?php
/**
 * Configuración de WordPress
 *
 * Este archivo contiene la configuración de WordPress. Este archivo se utiliza
 * por el instalador de WordPress durante el proceso de instalación. También se
 * utiliza para definir las constantes de WordPress y configurar la conexión a la base de datos.
 *
 * @link https://codex.wordpress.org/es:Archivo_de_Configuraci%C3%B3n_de_WordPress
 *
 * @package WordPress
 */

// ** Configuración de MySQL - Puedes obtener esta información de tu proveedor de alojamiento ** //
/** Nombre de la base de datos de WordPress */
define( 'DB_NAME', 'bdwordpress' );

/** Nombre de usuario de MySQL */
define( 'DB_USER', 'wordpress' );

/** Contraseña de MySQL */
define( 'DB_PASSWORD', '1234' );

/** Dirección del servidor de MySQL */
define( 'DB_HOST', '192.168.10.62' );

/** Codificación de caracteres de la base de datos */
define( 'DB_CHARSET', 'utf8mb4' );

/** Collation de la base de datos. No cambies esto si no sabes lo que estás haciendo. */
define( 'DB_COLLATE', '' );

/** Claves únicas de autenticación y encriptación. */
define( 'AUTH_KEY',         'pon_aquí_tu_clave_única' );
define( 'SECURE_AUTH_KEY',  'pon_aquí_tu_clave_única' );
define( 'LOGGED_IN_KEY',    'pon_aquí_tu_clave_única' );
define( 'NONCE_KEY',        'pon_aquí_tu_clave_única' );
define( 'AUTH_SALT',        'pon_aquí_tu_clave_única' );
define( 'SECURE_AUTH_SALT', 'pon_aquí_tu_clave_única' );
define( 'LOGGED_IN_SALT',   'pon_aquí_tu_clave_única' );
define( 'NONCE_SALT',       'pon_aquí_tu_clave_única' );
