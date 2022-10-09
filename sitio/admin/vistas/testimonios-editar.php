<?php
use App\Models\Testimonio;
/*
 |--------------------------------------------------------------------------
 | Guardamos en una variable común los errores de testimonios
 |--------------------------------------------------------------------------
 */
if(isset($_SESSION['errores'])) {
    $errores = $_SESSION['errores'];
    unset($_SESSION['errores']);
} else {
    $errores = [];
}

if(isset($_SESSION['old_data'])) {
    $oldData = $_SESSION['old_data'];
    unset($_SESSION['old_data']);
} else {
    $testimonio = (new Testimonio())->traerPorPk($_GET['id']);
    $oldData = [
        'id'                    => $testimonio->getTestimonioId(),      
        'nombre'                => $testimonio->getNombre(),
        'texto'                 => $testimonio->getTexto(),
        'localidad'             => $testimonio->getLocalidad(),
        'provincia'             => $testimonio->getProvincia(),
        'profesion'             => $testimonio->getProfesion(),
        'imagen_descripcion'    => $testimonio->getImagenDescripcion(),
        'imagen_actual'         => $testimonio->getImagen(),
    ];
}
?>
<main class="main-content pt-5 mt-5">
    <div class="container">
        <h2 class="mb-3 text-uppercase micolor">Editar Testimonio</h2>

        <p class="mb-3 text-dark fs-5">Modificá los datos de testimonio que desees cambiar. Cuando esté completo, presione el botón "Publicar".</p>
        
        <form action="acciones/testimonios-editar.php" class="pb-3" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $oldData['id'];?>">
            <input type="hidden" name="imagen_actual" value="<?= $oldData['imagen_actual'];?>">

            <div class="py-3">
                <label for="nombre" class="fs-5">Nombre</label>
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    class="form-control"
                    aria-describedby="help-nombre <?= isset($errores['nombre']) ? 'error-nombre' : '';?>"
                    value="<?= $oldData['nombre'] ?? '';?>"
                >
                <div class="text-danger ps-3" id="help-nombre">Requiere al menos 3 caracteres.</div>
                <?php
                if(isset($errores['nombre'])):
                ?>
                    <div id="error-nombre"><span class="visually-hidden">Error: </span><?= $errores['nombre'];?></div>
                <?php
                endif;
                ?>
            </div>

            <div class="py-3">
                <label for="texto" class="fs-5">Opinión de NRG</label>
                <textarea
                    id="texto"
                    name="texto"
                    class="form-control"
                    <?= isset($errores['texto']) ? 'aria-describedby="error-texto"' : '';?>
                ><?= $oldData['texto'] ?? '';?></textarea>
                <?php
                if(isset($errores['texto'])):
                    ?>
                    <div id="error-texto"><span class="visually-hidden">Error: </span><?= $errores['texto'];?></div>
                <?php
                endif;
                ?>
            </div>
            

            <div class="py-3">
                <label for="localidad" class="fs-5">Localidad</label>
                <input 
                    type="text"
                    id="localidad"
                    name="localidad"
                    class="form-control"
                    aria-describedby="help-localidad <?= isset($errores['localidad']) ? 'error-localidad' : '';?>"
                    value="<?= $oldData['localidad'] ?? '';?>"
                    >
                <div class="text-danger ps-3" id="help-localidad">Debe tener al menos 3 caracteres.</div>
                <?php
                if(isset($errores['localidad'])):
                ?>
                    <div id="error-localidad"><span class="visually-hidden">Error: </span><?= $errores['localidad'];?></div>
                <?php
                endif;
                ?>
            </div>

            
            <div class="py-3">
                <label for="provincia" class="fs-5">Provincia</label>
                <input 
                    type="text"
                    id="provincia"
                    name="provincia"
                    class="form-control"
                    aria-describedby="help-provincia <?= isset($errores['provincia']) ? 'error-provincia' : '';?>"
                    value="<?= $oldData['provincia'] ?? '';?>"
                    >
                <div class="text-danger ps-3" id="help-provincia">Debe tener al menos 3 caracteres.</div>
                <?php
                if(isset($errores['provincia'])):
                ?>
                    <div id="error-provincia"><span class="visually-hidden">Error: </span><?= $errores['provincia'];?></div>
                <?php
                endif;
                ?>
            </div>

            <div class="py-3">
                <label for="profesion" class="fs-5">Profesion</label>
                <input 
                    type="text"
                    id="profesion"
                    name="profesion"
                    class="form-control"
                    aria-describedby="help-profesion <?= isset($errores['profesion']) ? 'error-profesion' : '';?>"
                    value="<?= $oldData['profesion'] ?? '';?>"
                    >
                <div class="text-danger ps-3" id="help-profesion">Debe tener al menos 3 caracteres.</div>
                <?php
                if(isset($errores['profesion'])):
                    ?>
                    <div id="error-profesion"><span class="visually-hidden">Error: </span><?= $errores['profesion'];?></div>
                <?php
                endif;
                ?>
            </div>

            <div class="py-3">
                <p class="fs-5 micolor">Imagen actual:</p>
                <img src="<?= '../imagenes/' . $oldData['imagen_actual'];?>" alt="Previsualizar imagen">
            </div>

            <div class="py-3">
                <label for="imagen" class="fs-5">Imagen (Opcional)</label>
                <input type="file" id="imagen" name="imagen" class="form-control" aria-describedby="help-imagen">
                <div class="text-danger ps-3" id="help-imagen">Elegí una imagen, sólo si quieres cambiar la actual.</div>
            </div>

            <div class="py-3">
                <label for="imagen_descripcion" class="fs-5">Imagen descripción</label>
                <input type="text" id="imagen_descripcion" name="imagen_descripcion" class="form-control" value="<?= $oldData['imagen_descripcion'] ?? '';?>">
            </div>
            <div class="text-end">
            <button class="text-body boton-asesorar rounded border-0 h5 my-1 px-4 py-2" type="submit">Actualizar</button>
            </div>
        </form>
    </div>
</main>
