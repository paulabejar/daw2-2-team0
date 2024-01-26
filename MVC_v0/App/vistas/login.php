<?php require_once RUTA_APP. "/vistas/inc/header_no_logueado.php" ?>

<main>
    <div class="d-flex align-items-center vh-100">
        <div class="container-fluid col-10 col-md-8 col-lg-6 col-xl-4 p-5 text-center border rounded border-dark">
            <h1>LOGIN</h1>
            <div class="form-floating mt-5">
                <input type="email" class="form-control" id="login_email" placeholder="Email">
                <label for="login_email">Email</label>
            </div>
            <div class="form-floating mt-3 mb-3">
                <input type="password" class="form-control" id="login_password" placeholder="Contraseña">
                <label for="login_password">Contraseña</label>
            </div>
            <div>
                <a class="link-dark" href="#"><p>¿Has olvidado la contraseña?</p></a>
            </div>
            <div>
                <button class="btn btn-dark mt-3 mb-3">ACCESO</button>
            </div>
            <div>
                <button class="btn">Registrar</button>
            </div>
        </div>
    </div>
</main>

<?php require_once RUTA_APP. "/vistas/inc/footer.php" ?>