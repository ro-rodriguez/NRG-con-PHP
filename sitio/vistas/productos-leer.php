<?php
use App\Models\Producto;

$id = (int) $_GET['id'];
$producto = (new Producto)->traerPorPk($id);

if(!$producto) {
    header('Location: index.php?s=404');
    exit;
} 
?>
<main class="container mt-4 pb-5">
    <section class="row mt-5 pt-5">
    <h2 class="h1 micolor text-center m-auto fw-bold mt-4 pb-1 text-uppercase"><?=$producto->getTitulo();?></h2>
        <div class="col-sm-12 col-md-4 col-lg-3 mt-5">
            <div>
                <p class="m-auto text-center micolor h3">Producto certificado</p>
                   <div class="certificado m-auto"></div> 
                <p class="m-auto text-center mt-3 micolor h3">Apto celiacos</p>
                    <div class="gluten-free m-auto"></div>
                <p class="m-auto text-center mt-3 micolor h3">Cero grasas trans</p>
                    <div class="grasas-trans m-auto"></div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-6 text-center mt-5">
            <picture>
                <source media="(max-width:768px) and (-webkit-min-device-pixel-ratio: 1.5),(min-device-pixel:1.5)" srcset="<?='imagenes/medium-'. $producto->getImagen();?>">
                <source media="(max-width:768px)" srcset="<?='imagenes/'. $producto->getImagen();?>">
                <source media="(max-width:992px)" srcset="<?='imagenes/medium-'. $producto->getImagen();?>">
                <img src="<?='imagenes/big-'. $producto->getImagen();?>" alt="<?= $producto->getImagenDescripcion();?>" class="figure-img img-fluid">
            </picture>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mt-5">
            <div class="h1 fw-bold text-black pb-3">
                <span class="visually-hidden h5 fw-bold micolor">Precio:</span>
                <span>$<?=$producto->getPrecio();?></span>
            </div>
            <div class="pb-4">
                <span class="h5 fw-bold micolor">Peso:</span>
                <span class="fs-5 fw-bold"><?=$producto->getPeso();?></span>
            </div>
            <form action="index.php?s=gracias" method="post" enctype="application/x-www-form-urlencoded" >  
                <div>
                    <label for="sabor" class="h5 fw-bold micolor pb-4">Sabor:</label>
                    <select name="sabor" id="sabor">
                        <?php
                        foreach($producto->getSabor() as $sabor):?>   
                        <option value="<?=$producto->getSabor();?>"><?=$sabor;?></option>
                        <?php
                        endforeach;?>
                    </select>
                </div>
                <div>
                    <label class="h5 fw-bold micolor pb-3" for="cantidad">Cantidad:</label>
                    <input type="number" name="cantidad" id="cantidad" required placeholder="1" step="1" min="1" max="10"/>
                </div>
                <input class="text-body boton-asesorar rounded border-0 h5 my-1 px-4 py-2" type="submit" value="Enviar"/>
            </form>
        </div>

        <h3 class="mt-5">Beneficios</h3>
            <p><?=$producto->getTexto();?></p>
            <table class="border border-dark bg-white mt-4">
                <tr class="linea-separadora1">
                    <th colspan="2" class="h3 fw-bold pb-3 ps-2">Información Nutricional</th>
                </tr>
                <tr class="border-bottom border-dark">
                    <th class="ps-4">Porción</th>
                    <td><?=$producto->getPorcion();?> gr.</td>
                </tr>
                <tr class="border-bottom border-dark">
                    <th class="ps-4">Porciones por envase</th>
                    <td><?=$producto->getPorcionesEnvase();?> gr.</td>
                </tr>
                <tr class="linea-separadora1">
                    <th colspan="2" class="h5 fw-bold pt-3 pb-2 ps-4">Cantidad por porción</th>
                </tr>  
                <tr class="border-bottom border-dark">
                    <th class="ps-4">Valor energético</th>
                    <td><?=$producto->getValorEnergetico();?> kcal</td>
                </tr>
                <tr class="border-bottom border-dark">
                    <th class="ps-4">Carbohidratos</th>
                    <td><?=$producto->getCarbohidratos();?> gr.</td>
                </tr>
                <tr class="border-bottom border-dark">
                    <th class="ps-4">Proteinas</th>
                    <td><?=$producto->getProteinas();?> gr.</td>
                </tr>
                <tr class="border-bottom border-dark">
                    <th class="ps-4">Grasas totales</th>
                    <td><?=$producto->getGrasasTotales();?> gr.</td>
                </tr>
                <tr class="border-bottom border-dark">
                    <th class="ps-4">Grasas saturadas</th>
                    <td><?=$producto->getGrasasSaturadas();?> gr.</td>
                </tr>
                <tr class="border-bottom border-dark">
                    <th class="ps-4">Grasas trans</th>
                    <td><?=$producto->getGrasasTrans();?> gr.</td>
                </tr>
                <tr class="border-bottom border-dark">
                    <th class="ps-4">Fibra</th>
                    <td><?=$producto->getFibra();?> gr.</td>
                </tr>
                <tr>
                    <th class="ps-4">Sodio</th>
                    <td><?=$producto->getSodio();?> gr.</td>
                </tr>
            </table>
    </section>
</main>            
