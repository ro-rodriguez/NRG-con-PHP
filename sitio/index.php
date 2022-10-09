<?php
require_once __DIR__ . '/bootstrap/init.php';
//Eliminamos los require de la clase
//require_once RUTA_RAIZ . '/clases/Principal.php';
//require_once RUTA_RAIZ . '/clases/Tema.php';
//require_once RUTA_RAIZ . '/clases/Producto.php';
//require_once RUTA_RAIZ . '/clases/Combo.php';
//require_once RUTA_RAIZ . '/clases/Testimonio.php';
//require_once RUTA_RAIZ . '/clases/Conexion.php';
// Incluimos el booteo.
///** @var PDO $db  */
require_once RUTA_RAIZ . '/bootstrap/rutas.php';

//Pedimos las rutas de la aplicación
$rutas = getRutasSitio();

$vista = $_GET['s'] ?? 'principal';

//Validación que la vista que pide esté permitida

if(!isset($rutas[$vista])) {
    $vista = '404';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NRG <?= $rutas[$vista]['title'];?></title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <header class="container-fluid py-2 bg-dark fixed-top">
        <h1 id="logo">Nutrición y Resistencia Garantizada</h1>
        <nav class="row navbar navbar-expand-lg navbar-dark fondoheader pt-1">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#barra" aria-controls="barra" aria-expanded="false" aria-label="Botón hamburguesa">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="barra">
                    <ul class="navbar-nav ms-auto text-center me-4">
                        <li class="nav-item"><a class="nav-link fs-5" href="index.php?s=principal">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link fs-5" href="index.php?s=productos">Productos</a></li>
                        <li class="nav-item"><a class="nav-link fs-5" href="index.php?s=temas">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link fs-5" href="index.php?s=testimonios">Testimonios</a></li>
                        <li class="nav-item"><a class="nav-link fs-5" href="index.php?s=contacto">Contacto</a></li>
    
                        <li class="nav-item boton-asesorar px-0 ms-4 rounded"><a class="nav-link text-body h5 my-1 px-3 py-2" href="#asesoramiento">Consulta Nutricional</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?php
    //Requerimos la vista que haya que mostrar
    require 'vistas/' . $vista . '.php';
    ?>

    <span id="asesoramiento"></span>
    <section class="container-fluid fondo2 bg-gradient py-5 my-3">
        <div class="row mx-0">
            <div class="col-lg-6">
                <div class="row mx-auto text-body text-center w-75 h6">
                <h2 class="h3 text-uppercase text-white">Consulta nutricional</h2>
                    <p class="h5 pb-3 text-white">¡Descubrí tu mejor versión!</p>
                    <span class="asesorar m-auto bg-white"></span>
                    <p class="pt-3 text-white">Por consultas nutricionales completa el siguiente formulario o envía un email a nutricion@nrg.com</p>
                    <p class="text-white">(por favor completar todos los campos requeridos).</p>
                    <p class="text-white">Estaremos respondiendo tus inquietudes de manera gratuita en un lapso de 24 hs.</p>
                </div>
            </div>
            <div class="col-lg-6 px-0">
                <form class="row mx-auto py-4 px-5 mx-0 w-75 bg-white borde-container rounded" action="index.php?s=gracias" method="POST" enctype="application/x-www-form-urlencoded">
                    <h3 class="h3 titulo-azul text-center text-uppercase">Consultanos</h3>
                    <div class="col-12 pt-2 px-0">
                        <label for="nombre" class="h5 py-1">Nombre:</label>
                        <input class="py-1 mt-1 mb-3 p-md-0 mt-md-0 mb-md-2 w-100" id="nombre" type="text" name="nombre" autocomplete="off"/>
                    </div>
                    <div class="col-12 px-0">
                        <label for="peso" class="h5 py-1">Peso:</label>
                        <input class="py-1 px-1 mt-1 mb-3 p-md-0 mt-md-0 mb-md-2 w-100" id="peso" type="text" name="peso" required placeholder="Kg"/>
                    </div>
                    <div class="col-12 px-0">
                        <label for="altura" class="h5 py-1">Estatura:</label>
                        <input class="py-1 px-1 mt-1 mb-3 p-md-0 mt-md-0 mb-md-2 w-100" id="altura" type="text" name="altura" required placeholder="170"/>
                    </div>  
                    <div class="col-12 px-0">
                        <p class="h5 py-1 micolor">Objetivo:</p>
                        <div class="w-100 px-1 mb-2 mb-md-1">
                            <div class="d-block mb-2 my-lg-0">
                                <input type="checkbox" name="objetivo" value="volumen" id="v">
                                <label class="text-secondary px-2 opcion" for="v">Más volumen</label>
                            </div>
                            <div class="d-block my-2 my-lg-0">
                                <input type="checkbox" name="objetivo" value="resistencia" id="r">
                                <label class="text-secondary px-2 opcion" for="r">Más resistencia</label>
                            </div>
                            <div class="d-block my-2 my-lg-0">
                                <input type="checkbox" name="objetivo" value="nutricion" id="n">
                                <label class="text-secondary px-2 opcion" for="n">Mejorar nutrición</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0 mx-0">
                        <label for="email" class="h5 py-1">Mail:</label>
                        <input class="py-1 px-1 mt-1 mb-3 p-md-0 mt-md-0 mb-md-1 w-100" id="email" type="email" name="email" autocomplete="off"/>
                    </div>
                    <div class="d-sm-flex justify-content-end text-center px-0">
                        <span><input class="text-secondary h5 my-1 me-sm-3 px-4 py-2 boton-gris rounded border-0" type="reset" value="Borrar"></span>
                        <span><input class="text-body h5 my-1 px-4 py-2 boton-asesorar rounded border-0" type="submit" value="Enviar"></span>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="container text-center text-secondary my-5 pb-2 pt-4">
        <form class="row justify-content-center" action="index.php?s=gracias" method="post" enctype="application/x-www-form-urlencoded">
            <h2 class="h5">Suscribite a nuestro Newsletter</h2>
            <div class="col-auto">
                <input class="rounded border-0 h5 my-1 py-2 ps-1" type="text" name="email" required placeholder="email"/>
            </div>
            <div class="col-auto">
                <input class="text-body boton-asesorar rounded border-0 h5 my-1 px-4 py-2" type="submit" value ="Suscribirme"/>
            </div>
        </form>
    </div>
    <footer class="container-fluid bg-dark text-center mt-5">
        <div class="row pt-4 pb-1">
            <div class="col-md logo-footer py-3">
            <a href="index.html"><img src="recursos/logo.svg" alt="logo"></a>
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
    <script src="js/bootstrap.bundle.min.js"></script>
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