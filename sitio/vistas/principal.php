<?php
use App\Models\Principal;

$principales = (new Principal)->todo();
?>
<main class="pt-5 mt-3">

<span id="principal"></span>
<section class="container my-5 pb-3">
    <h2 class="visually-hidden">Lo más destacado</h2>
    <div class="row">
    <?php 
    foreach($principales as $principal): ?>  
        <article class="col-md-6 col-lg-4 p-0 card border-white border-4">
            <div class="card-img-overlay">
                <h3 class="bg-dark px-2 py-2 fs-6 card-text text-white text-uppercase rounded"><?=$principal->getTexto();?></h3>
                <a href="<?=$principal->getUrl();?>" class="btn btn-primary"><?=$principal->getBoton();?></a>
            </div>
            <img class=" card-img img-fluid" src="<?='imagenes/'. $principal->getImagen();?>" alt="<?=$principal->getImagenDescripcion();?>">
        </article>
    <?php
    endforeach;?> 
  </div>
</section>
</main>


