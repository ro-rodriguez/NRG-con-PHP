<?php

use App\Auth\Autenticacion;
use App\Models\Testimonio;

require_once __DIR__ . '/../../bootstrap/init.php';
//Eliminamos los require de las clases y creamos la función autoload en init.php
//require_once RUTA_RAIZ . '/clases/Conexion.php';
//require_once RUTA_RAIZ . '/clases/Testimonio.php';


//Verificamos que el usuario esté autenticado
$autenticacion = new Autenticacion();
if(!$autenticacion->estaAutenticado()) {
    $_SESSION['mensaje_error'] = "Para realizar esta acción tenés primero que iniciar sesión.";
    header("Location: ../index.php?s=login");
    exit;
}

$id = $_POST['id'];

try {
    $testimonio = new Testimonio();
    $testimonio->eliminar($id);

    $_SESSION['mensaje_exito'] = "¡Excelente! El testimonio fue eliminado con éxito.";
    header("Location: ../index.php?s=testimonios");
    exit;
} catch(Exception $e) {
    $_SESSION['mensaje_error'] = "¡Error! El testimonio no pudo ser eliminado. Por favor, intentalo más tarde.";
    header("Location: ../index.php?s=testimonios");
    exit;
}
