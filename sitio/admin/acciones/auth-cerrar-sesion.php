<?php

use App\Auth\Autenticacion;

require_once __DIR__ . '/../../bootstrap/init.php';

$autenticacion = new Autenticacion();
$autenticacion->cerrarSesion();

$_SESSION['mensaje_exito'] = "Sesión cerrada correctamente.";
header("Location: ../index.php?s=login");
exit;
