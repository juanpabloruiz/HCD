<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conexion = new mysqli('localhost', 'usuario', 'clave', 'base');
mysqli_set_charset($conexion, 'utf8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HCD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
    html {height: 100%;}
    body {display: flex;flex-direction: column;min-height: 100%;}
    footer {margin-top: auto;}
    </style>
</head>
<body>
    <nav data-bs-theme="dark" class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HCD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="entradas">Mesa de Entradas</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="secretaria">Secretaría</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="prosecretaria">Prosecretaría</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="presidencia">Presidencia</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="labor">Labor Parlamentaria</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="comisiones">Secretaría de Comisiones</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container my-3">
        <form method="post" action="ingreso">
            <div class="mb-3"><input type="email" name="correo" class="form-control" placeholder="Correo electrónico"></div>
            <div class="mb-3"><input type="password" name="clave" class="form-control" placeholder="Contraseña"></div>
            <div class="mb-3"><input type="submit" value="Ingresar" class="btn btn-primary"></div>   
        </form>
    </main>
    <footer class="text-center text-light bg-dark py-4">
        HCD <?php echo date('Y'); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
