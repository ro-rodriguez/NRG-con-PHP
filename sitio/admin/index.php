<?php

use App\Auth\Autenticacion;

require_once __DIR__ . '/../bootstrap/init.php';
//require_once RUTA_RAIZ . '/clases/Testimonio.php';
//require_once RUTA_RAIZ . '/clases/Conexion.php';
require_once RUTA_RAIZ . '/bootstrap/rutas.php';

$rutas = getRutasAdmin();

$vista = $_GET['s'] ?? 'login';

if(!isset($rutas[$vista])) {
    $vista = '404';
}

//Creamos instancia de Autenticación
$autenticacion = new Autenticacion();

$requiereAutenticacion = $rutas[$vista]['autenticacion'] ?? false;
if($requiereAutenticacion && !$autenticacion->estaAutenticado()) {
    $_SESSION['mensaje_error'] = "Debe iniciar sesión para acceder a esta pantalla.";
    header("Location: index.php?s=login");
    exit;
}

$mensajeExito = $_SESSION['mensaje_exito'] ?? null;
$mensajeError = $_SESSION['mensaje_error'] ?? null;
unset($_SESSION['mensaje_exito'], $_SESSION['mensaje_error']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración de NRG :: <?= $rutas[$vista]['title'];?></title>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <header class="container-fluid py-4 bg-dark fixed-top">
        <h1 id="logo">Nutrición y Resistencia Garantizada</h1>
        <nav class="row navbar navbar-expand-lg navbar-dark fondoheader">
            <div class="container-fixed">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#barra" aria-controls="barra" aria-expanded="false" aria-label="Botón hamburguesa">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="barra">
                    <?php
                    if($autenticacion->estaAutenticado()):
                    ?>
                    <ul class="navbar-nav ms-auto text-center me-4">
                        <li class="nav-item"><a class="nav-link fs-5" href="index.php?s=principal">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link fs-5" href="index.php?s=testimonios">Testimonios</a></li>
                        <li class="px-0 ms-4">
                            <form action="acciones/auth-cerrar-sesion.php" method="post">
                                <button class="text-body boton-asesorar rounded border-0 h5 my-1 px-4 py-2" type="submit">Cerrar Sesión</button>
                            </form>
                        </li>
                    </ul>
                    <?php
                    endif;
                    ?>  
                </div>
            </div>
        </nav>
    </header>
    <div>
        <?php
        
        if($mensajeExito !== null):
        ?>
        <div class="msg-success"><?= $mensajeExito;?></div>
        <?php
        endif;
        ?>
        <?php
        if($mensajeError !== null):
        ?>
        <div class="msg-error"><?= $mensajeError;?></div>
        <?php
        endif;
        ?>   

        <?php
        require 'vistas/' . $vista . '.php';
        ?>
    </div>

    <footer class="container-fluid bg-dark text-center main-footer mt-2 py-2">
        <div class="row">
            <div class="col-md logo-footer py-3">
            <a href="index.php?s=principal"><img src="../recursos/logo.svg" alt="logo"></a>
            </div>
            <details class="col-md text-white py-3">
                <summary>Copyright © 2021 NRG</summary>
                <p>Elsa Rodríguez | DWN3A | Docente: Santiago Gallino</p>
            </details>
            <div class="col py-3 text-center">
                <ul class="row justify-content-center px-0 list">
                    <li class="col-auto">
                        <a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="col-auto"> 
                        <a href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="col-auto">
                        <a href="http://www.pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li class="col-auto">
                        <a href="http://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>
        const btns = document.querySelectorAll('.nav-item')
        const barra = document.querySelector(".navbar-collapse")
        const cierre = new bootstrap.Collapse(barra, {
            toggle: false
        })
        btns.forEach((btn) => {
            btn.addEventListener('click', () => {
                cierre.toggle()
            })
        })
    </script>
</body>
</html>