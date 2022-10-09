<?php
/*
 |--------------------------------------------------------------------------
 | Archivo de inicialización
 |--------------------------------------------------------------------------
 | Acá vamos a definir y ejecutar todas las instrucciones, variables, constantes,
 | etc, que sean necesarias para el correcto funcionamiento de nuestro sistema.
 | Este archivo lo vamos a incluir en los [index.php], así como en los archivos de
 | las acciones.
 */

/*
 |--------------------------------------------------------------------------
 | Sesiones
 |--------------------------------------------------------------------------
 */
// Inicializamos el uso de sesiones con la función session_start() de php.
session_start();

/*
 |--------------------------------------------------------------------------
 | Constantes
 |--------------------------------------------------------------------------
 */
// La constante DIRECTORY_SEPARATOR retorna el caracter que sirva como separador de niveles de
// directorios en el sistema operativo.
const RUTA_RAIZ = __DIR__ . DIRECTORY_SEPARATOR . "..";

const RUTA_IMAGENES = RUTA_RAIZ . DIRECTORY_SEPARATOR . 'imagenes';


/*
 |--------------------------------------------------------------------------
 | Autoload
 |--------------------------------------------------------------------------
 */
spl_autoload_register(function($className) {

    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    $className = substr($className, 3);

    $className = "clases" . $className . ".php";

    if(file_exists(RUTA_RAIZ . DIRECTORY_SEPARATOR . $className)) {
        require_once RUTA_RAIZ . DIRECTORY_SEPARATOR . $className;
    }
});

