<main>
<span id="contacto"></span>
    <section class="container bg-width py-5">
        <h2 class="h1 text-uppercase text-center micolor mb-5 pb-3 mt-5 pt-5">Contacto</h2>
        <div class="row">
            <div class="col-md-6">
                <h3 class="h2 text-start text-body fw-bold mb-4">Información:</h3>
                <ul class="row px-0 list text-secondary ">
                    <li class="d-flex mb-4">
                        <i class="fas fa-home"></i>
                        <p class="ms-4"><span class="d-block fs-5 fw-bold">Domicilio:</span> Av. Cabildo 3958, CABA</p>
                    </li>
                    <li class="d-flex mb-4">
                        <i class="fas fa-phone-alt"></i>
                        <p class="ms-4"><span class="d-block fs-5 fw-bold">Teléfono:</span><a href="tel:+541146904000"> 11 4690-4000</a></p>
                    </li>
                    <li class="d-flex mb-4">
                        <i class="fas fa-envelope"></i>
                        <p class="ms-4"><span class="d-block fs-5 fw-bold">Email:</span><a href="mailto:nrg@nrg.ar"> nrg@nrg.ar</a></p>
                    </li>
                    <li class="d-flex mb-4">
                        <i class="fas fa-clock"></i>
                        <p class="ms-4"><span class="d-block fs-5 fw-bold">Atención:</span> Lunes a Viernes de 10 a 18 hs.</p>
                    </li>  
                </ul>
            </div>
            <div class="col-md-6">
                <h3 class="h2 text-start text-dark fw-bold mb-4">Como llegar:</h3>
                <figure class="row px-0 fig-mapa m-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105159.95950934589!2d-58.53996354179686!3d-34.547257099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb7f3f25246af%3A0x8f7f6599d81b2a0b!2sNUTRISHOP%20NU%C3%91EZ%20Nutricion%20%26%20Fitness%20%2F%20Suplementos%20Deportivos!5e0!3m2!1ses-419!2sar!4v1623347946537!5m2!1ses-419!2sar" height="450" allowfullscreen="" loading="lazy" class="mapa px-0 w-100"></iframe>
                </figure>
            </div>
            <div class="col-lg-12 pt-3 my-5 ">
                <h3 class="h2 text-center text-dark fw-bold mb-4">Contáctenos</h3>
                <form class="row mx-auto px-3 mx-0 w-75 fondo2 text-white borde-container py-3" action="index.php?s=gracias" method="POST" enctype="application/x-www-form-urlencoded">
                    
                    <div class="col-12 pt-2 px-4">
                        <div class="row">
                            <label for="name" class="col-lg-2 h5 mb-0 px-0 text-white">Nombre:</label>
                            <input class="col-lg-10 border-0 mt-1 mb-3 p-md-1 mt-md-0 mb-md-3 rounded" id="name" type="text" name="name" autocomplete="off"/>
                        </div>
                    </div>
                    <div class="col-12 px-4">
                        <div class="row">
                            <label for="mail" class="col-lg-2 h5 mb-0 px-0 text-white">Email:</label>
                            <input class="col-lg-10 border-0 mt-1 mb-3 p-md-1 mt-md-0 mb-md-3 rounded" id="mail" type="email" name="mail" autocomplete="off"/>
                        </div>
                    </div>
                    <div class="col-12 px-4">
                        <div class="row">
                            <label for="tel" class="col-lg-2 h5 mb-0 px-0 text-white">Teléfono:</label>
                            <input class="col-lg-10 border-0 mt-1 mb-3 p-md-1 mt-md-0 mb-md-3 rounded" id="tel" type="tel" name="tel"/>
                        </div>
                    </div>
                    <div class="col-12 px-4">
                        <div class="row">
                            <label for="mensaje" class="col-lg-2 h5 mb-0 px-0 text-white">Mensaje:</label>
                            <textarea class="col-lg-10 border-0 mt-1 mb-3 p-md-1 mt-md-0 mb-md-3 rounded" id="mensaje" name="mensaje" rows="6" cols="20"></textarea>
                        </div>
                    </div>  
                    <div class="d-sm-flex justify-content-end text-center px-2">
                        <span><input class="text-secondary h5 my-1 me-sm-3 px-4 py-2 boton-gris rounded border-0" type="reset" value="Borrar"></span>
                        <span><input class="text-body h5 my-1 px-4 py-2 boton-asesorar rounded border-0" type="submit" value="Enviar"></span>
                    </div>
                    </form>
            </div>
        </div>
    </section>
</main>