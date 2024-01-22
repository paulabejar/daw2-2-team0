<?php require_once RUTA_APP. "/vistas/inc/header_no_logueado.php" ?>

<div class="container mt-5 pt-2">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datos["usuarios"] as $usuario): ?>
            <tr>
                <td id="id_<?php echo $usuario->id_usuario ?>"><?php echo $usuario->id_usuario ?></td>
                <td id="nombre_<?php echo $usuario->id_usuario ?>"><?php echo $usuario->nombre ?></td>
                <td id="email_<?php echo $usuario->id_usuario ?>"><?php echo $usuario->email ?></td>
                <td id="telefono_<?php echo $usuario->id_usuario ?>"><?php echo $usuario->telefono ?></td>
                <td id="rol_<?php echo $usuario->id_usuario ?>"><?php echo $usuario->rol ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <div class="col text-center">
        <a class="btn btn-success" href="<?php echo RUTA_URL ?>/usuarios/adduser">+</a>
    </div>
</div>

<?php require_once RUTA_APP. "/vistas/inc/footer.php" ?>