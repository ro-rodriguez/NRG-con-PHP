<?php

use App\Auth\Autenticacion;

require_once __DIR__ . '/../../bootstrap/init.php';

$email      = $_POST['email'];
$password   = $_POST['password'];

$autenticacion = new Autenticacion();

if($autenticacion->iniciarSesion($email, $password)) {
    $_SESSION['mensaje_exito'] = "Inició sesión correctamente";
    header("Location: ../index.php?s=principal");
} else {
    $_SESSION['mensaje_error'] = "No pudo acceder, las credenciales ingresadas no son válidas.";
    $_SESSION['old_data'] = $_POST;
    header("Location: ../index.php?s=login");
    exit;
}