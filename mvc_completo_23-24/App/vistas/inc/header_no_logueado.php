<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css " rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTA_URL ?>/css/estilos.css">
    <title><?php echo NOMBRE_SITIO ?></title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a href="<?php echo RUTA_URL ?>" class="navbar-brand"><?php echo NOMBRE_SITIO ?></a>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <?php if (isset($datos["menuActivo"]) && $datos["menuActivo"] == 1): ?>
                                <a class="nav-link active" aria-current="page" href="<?php echo RUTA_URL ?>/usuarios">Usuarios</a>
                            <?php else: ?>
                                <a class="nav-link" aria-current="page" href="<?php echo RUTA_URL ?>/usuarios">Usuarios</a>
                            <?php endif ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
