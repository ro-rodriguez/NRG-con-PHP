<?php
use App\Models\Tema;

$temas = (new Tema)->todo();
?>
<main class="text-center pt-5">
    <span id="temas"></span>
    <section class="container-xl mt-5 pt-5 pb-5">
        <h2 class="text-uppercase h1 micolor mb-4 pb-4">La Empresa</h2>
        <div class="row bg-white px-3 borde-container py-1">

            <?php 
            foreach($temas as $tema): ?>

            <article class="col-md-6 col-lg-4 px-md-3 px-lg-4 my-4">
                <h3 class="text-center text-secondary mb-4 h3"><?= $tema->getTitulo();?></h3>
                <div class="row">
                    <div class="col-md-12 col-lg-12 ">
                        <picture class="row">
                            <source media="(max-width:768px) and (-webkit-min-device-pixel-ratio: 1.5),(min-device-pixel:1.5)" srcset="<?='imagenes/medium-'. $tema->getImagen();?>">
                            <source media="(max-width:768px)" srcset="<?='imagenes/small-'. $tema->getImagen();?>">
                            <source media="(max-width:992px)" srcset="<?='imagenes/medium-'. $tema->getImagen();?>">
                            <img src="<?= 'imagenes/'. $tema->getImagen();?>" alt="<?= $tema->getImagenDescripcion();?>" class="figure-img img-fluid">
                        </picture>
                    </div>                   
                    <div class="col-md-12 col-lg-12">
                        <input type="checkbox" class="leer-mas-state" id="<?= $tema->getBoton();?>"/>
                        <p class="text-start leer-mas-wrap m-0 text-body"><?= $tema->getParrafo();?><br/>
                        <span class="leer-mas-target px-0"><?= $tema->getLeerMas();?></span></p>
                        <label for="<?= $tema->getBoton();?>" class="leer-mas-trigger rounded h6 mt-3 my-1 px-3 py-2 text-body boton-gris"></label>
                    </div>
                </div>
            </article>

        <?php
        endforeach;?>

        </div>
    </section>
</main>
    
   
    
    