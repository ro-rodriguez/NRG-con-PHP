<?php
use App\Models\Testimonio;

$testimonios = (new Testimonio)->todo();
?>

<main>
<span id="testimonios"></span>
    <section class="container text-center py-5">
        <h2 class="text-uppercase h1 micolor mt-5 pt-5 mb-5">Testimonios</h2>
        <p class="justify-content-center px-lg-5">Nuestra consejera nutricional de NRG, Carla Diaz, nos dice: "El mejor consejo para ayudarte a mantener tu mejor forma es evitar lo que
        se llama el efecto dominó. La nutrición y el ejercicio van mano a mano. Uno de estos componentes afecta al otro, y es un acto de equilibrio
        que cada persona tiene que aprender a dominar. Desviarse de un plan de nutrición puede disminuir la motivación para hacer ejercicio.
        Comer más y ejercitar menos puede alterar la composición corporal y hacer que se gane peso rápidamente. Además ya son miles los deportistas que orgullosamente recomiendan los productos NRG a familiares y amigos. Ellos hacen de este mundo, un lugar más saludable y feliz.
        <p>Conocé algunas historias de éxito:</p>
        <div class="row mt-5">
            <div class="col-lg-6 mb-4">
                <figure class="ratio ratio-16x9 figure mb-1">
                    <iframe src="https://www.youtube.com/embed/mzwax1QmMXY" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </figure>
                <p class="h5 text-secondary">Ezequiel Borja - Rosario, Argentina</p>
            </div>
            <div class="col-lg-6 mb-4">
                <figure class="ratio ratio-16x9 figure mb-1">
                    <iframe src="https://www.youtube.com/embed/DyeVbKGLflU" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </figure>
                <p class="h5 mt-0 text-secondary">Micaela Guzmán - Buenos Aires, Argentina</p>
            </div>
        </div>  
    </section>

    <section class="container py-5">
    <h2 class="text-uppercase text-center micolor mt-5 mb-5">Opiniones de clientes</h2>
        <div class="row pt-3 pb-5 ">
            <?php 
            foreach($testimonios as $testimonio): ?>   
                <article class="card col-md-6 col-lg-4 mb-2 px-0 borde-container">
                    <div class="order-2 card-body text-body px-3 text-star">
                        <h3 class="card-title text-uppercase pb-3 h4 border-bottom text-center micolor"><?=$testimonio->getNombre();?></h3>
                        <p class="card-text text-star">"<?=$testimonio->getTexto();?>"</p>
                        <p class="text-star fw-bold"><?=$testimonio->getLocalidad();?>, <?=$testimonio->getProvincia();?></p>
                        <p class="text-star fw-bold"><?=$testimonio->getProfesion();?></p>
                    </div>  
                    <div class="order-1 figure card-img-top bg-dark py-5 text-center mb-3">
                        <img class="img-fluid rounded-circle" src="<?='imagenes/'. $testimonio->getImagen();?>" alt="<?=$testimonio->getImagenDescripcion();?>">
                    </div>
                </article>
            <?php
            endforeach;?> 
        </div>
    </section>  
</main>