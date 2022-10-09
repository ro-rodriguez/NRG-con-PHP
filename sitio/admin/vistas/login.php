<main class="main-content mt-2 pt-5 mb-5 pb-5">
    <section class="container-fluid bg-width">
        <div class="row">
            <div class="mx-auto px-0 w-75">
                <h2 class="text-uppercase h1 micolor mt-5 pt-5">Iniciar sesión</h2>
                <p>Credenciales requeridos para ingresar al panel de administración.</p>
            </div>
            <form class="row mx-auto px-5 py-4 mx-0 w-75 mb-2 fondo2 text-white borde-container rounded" action="acciones/auth-iniciar-sesion.php" method="post">
                <div class="col-12 pt-2 px-2">
                    <div class="row">
                        <label for="email" class="col-lg-2 h5 mb-0 px-0 text-white">Email</label>
                        <input type="email" id="email" name="email" class="col-lg-10 border-0 mt-1 mb-3 p-md-1 mt-md-0 mb-md-3 rounded">
                    </div>
                </div>
                <div class="col-12 pt-2 px-2">
                    <div class="row">
                        <label for="password" class="col-lg-2 h5 mb-0 px-0 text-white">Password</label>
                        <input type="password" id="password" name="password" class="col-lg-10 border-0 mt-1 mb-3 p-md-1 mt-md-0 mb-md-3 rounded">
                    </div>
                </div>
                <button type="submit" class="text-body boton-asesorar rounded border-0 h5 my-1 py-2 w-50 mx-auto">Ingresar</button>
            </form>
        </div>
    </section>
</main>
