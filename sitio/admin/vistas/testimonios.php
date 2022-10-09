<?php
use App\Models\Testimonio;

$testimonios = (new Testimonio())->todo();
?>
<main class="main-content pt-5 mt-5">
    <div class="container">
        <h2 class="mb-4 text-uppercase micolor">Administración de Testimonio</h2>

        <div class="mb-3">
            <a class="text-white fw-bold px-4 py-2 fondo2 rounded border-0" href="index.php?s=testimonios-nuevo">Publicar nuevo testimonio</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th class="border-start border-white bg-dark text-white">ID</th>
                    <th class="border-start border-white bg-dark text-white">Fecha</th>
                    <th class="border-start border-white bg-dark text-white">Nombre</th>
                    <th class="border-start border-white bg-dark text-white">Texto</th>
                    <th class="border-start border-white bg-dark text-white">Localidad</th>
                    <th class="border-start border-white bg-dark text-white">Provincia</th>
                    <th class="border-start border-white bg-dark text-white">Profesión</th>
                    <th class="border-start border-white bg-dark text-white">Imagen</th>
                    <th class="border-start border-white bg-dark text-white">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($testimonios as $testimonio): ?>
                <tr>
                    <td class="border border-dark"><?= $testimonio->getTestimonioId();?></td>
                    <td class="border border-dark"><?= $testimonio->getFecha();?></td>
                    <td class="border border-dark"><?= $testimonio->getNombre();?></td>
                    <td class="border border-dark"><?= $testimonio->getTexto();?></td>
                    <td class="border border-dark"><?= $testimonio->getLocalidad();?></td>
                    <td class="border border-dark"><?= $testimonio->getProvincia();?></td>
                    <td class="border border-dark"><?= $testimonio->getProfesion();?></td>
                    <td class="border border-dark"><img src="<?= '../imagenes/' . $testimonio->getImagen();?>" alt="<?= $testimonio->getImagenDescripcion();?>"></td>
                    <td class="border border-dark px-3 pt-4">
                        <a class="text-white fw-bold px-4 py-2 fondo2 rounded border-0" href="index.php?s=testimonios-editar&id=<?= $testimonio->getTestimonioId();?>">Editar</a>

                        <form action="acciones/testimonios-eliminar.php" method="post" class="form-eliminar pt-3">
                            <input type="hidden" name="id" value="<?= $testimonio->getTestimonioId();?>">
                            <button class="button text-secondary fw-bold my-1 me-sm-3 px-2 py-2 boton-gris rounded border-0" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php
            endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<script>
const formsEliminar = document.querySelectorAll('.form-eliminar');
for(let i = 0; i < formsEliminar.length; i++) {
    formsEliminar[i].addEventListener('submit', function(ev) {
        const confirmado = confirm("¿Querés eliminar este testimonio definitivamente? Esta acción no es reversible.");
        if(!confirmado) {
            ev.preventDefault();
        }
    });
}
</script>
