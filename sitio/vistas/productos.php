<?php

use App\Models\Producto;
use App\Models\Combo;

$productos = (new Producto)->todo();
$combos =  (new Combo)->todo();
?>
<main>
    <span id="productos"></span>
    <section class="container text-center pt-5">
            <h2 class="text-uppercase h1 micolor mt-5 pt-5">Productos</h2>
            <ul class="row list-quiz p-0 mt-5">
                <li class="col-xs-12 col-md-6 col-lg-3 d-inline-block px-0"><a href="#asesoramiento" class="d-block text-white text-uppercase fs-5 text-decoration-none border border-white fondo2 px-2 py-3">¿Cuál es tu objetivo?</a></li>
                <li class="col-xs-12 col-md-6 col-lg-3 d-inline-block px-0"><a href="#volumen" class="d-block text-white fs-5 text-decoration-none border border-white fondo1 px-3 py-3">Ganar Volumen</a></li>
                <li class="col-xs-12 col-md-6 col-lg-3 d-inline-block px-0"><a href="#resistencia" class="d-block text-white fs-5 text-decoration-none border border-white fondo1 px-3 py-3">Más Resistencia</a></li>
                <li class="col-xs-12 col-md-6 col-lg-3 d-inline-block px-0"><a href="#nutricion" class="d-block text-white fs-5 text-decoration-none border border-white fondo1 px-3 py-3">Mejorar Nutrición</a></li>
            </ul>    
            <div class="row pt-3 pb-5"> 
                <?php 
                foreach($productos as $producto): ?>   
                    <article class="card col-md-6 col-lg-4 mb-2 p-3 borde-container">
                        <div class="order-2 card-body bg-dark text-white px-0">
                            <h3 class="card-title text-uppercase pb-3 h4 border-bottom text-white"><?=$producto->getTitulo();?></h3>
                                <h4 class="h5 text-white">Presentación:</h4>
                                <p class="card-text text-white"><?=$producto->getPeso();?></p>
                                <a href="index.php?s=productos-leer&id=<?= $producto->getProductoId();?>" class="btn btn-primary" role="button">Mas info</a>
                        </div>  
                        <div class="order-1 card-img-top">
                            <img class="img-fluid" src="<?='imagenes/'. $producto->getImagen();?>" alt="<?=$producto->getImagenDescripcion();?>">
                        </div>
                    </article>
                <?php
                endforeach;?> 
            </div>
    </section>
    <section class="container text-center my-5">
            <h2 id="combos" class="text-uppercase h1 micolor pb-4">Combos</h2>
            <div class="row mx-0">
            <a href="#" id="combo">
            <?php
            foreach($combos as $combo): ?>
                <span id="<?= $combo->getTituloIdentificacion();?>"></span>
                    <article class="col-md-12 mt-3 px-0 bg-white borde-container">
                        <h3 class="py-3 text-uppercase text-white bg-dark"><?= $combo->getTitulo();?></h3>
                        <div class="row mt-4">
                            <div class="order-2 col-md-6 mx-0">
                                <h4 class="h4 text-secondary">Beneficios</h4>
                                <ul class="list text-center px-0 pt-3">
                                    <?php  
                                    foreach($combo->getBeneficios() as $beneficio):?>
                                    <li><?=$beneficio;?></li>
                                    <?php
                                    endforeach;?> 
                                </ul>
                            </div>
                            <div class="order-1 figure col-md-6">
                                <p class="h4 text-secondary"><?= $combo->getTituloImagen();?></p>
                                <img src="<?='imagenes/'. $combo->getImagen();?>" alt="<?= $combo->getImagenDescripcion();?>" class="figure-img img-fluid">
                            </div>
                        </div>
                    </article>
            <?php
            endforeach;?> 
            </a>
            </div>
        </section>
</main>