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
    <title>Mesa de Entradas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        <div class="row">
            <div class="col-md-4">
                <?php
                if (isset($_GET['editar'])) {
                    $id = $_GET['editar'];
                    $consulta = mysqli_query($conexion, "SELECT * FROM entradas WHERE id = '$id'");
                    $campo = mysqli_fetch_assoc($consulta);
                    echo '<form method="post" enctype="multipart/form-data">';
                    echo '<input type="hidden" name="id" class="form-control" value="' . $campo['id'] . '">';
                    echo '<div class="mb-3"><input type="text" name="expte" class="form-control" value="' . $campo['expte'] . '"></div>';
                    echo '<div class="mb-3"><input type="text" name="adjunto" class="form-control" value="' . $campo['adjunto'] . '"></div>';
                    echo '<div class="mb-3"><textarea name="extracto" class="form-control" cols="30" rows="10">' . $campo['extracto'] . '</textarea></div>';
                    echo '<div class="mb-3"><input type="text" name="letra" class="form-control" value="' . $campo['letra'] . '"></div>';
                    echo '<div class="mb-3"><input type="number" name="paginas" class="form-control" value="' . $campo['paginas'] . '"></div>';
                    echo '<h5>Seleccionar autores</h5>';
                    echo '<div class="mb-3">';
                    $usuarios = mysqli_query($conexion, "SELECT * FROM usuarios WHERE categoria = 'autor' ORDER BY nombre ASC");
                    $seleccionados = explode(" - ", $campo['autor']);
                    while ($fila = mysqli_fetch_assoc($usuarios)) {
                        if (in_array($fila['nombre'], $seleccionados)) {
                            echo '<div class="form-check"><input type="checkbox" name="autor[]" class="form-check-input" value="'.$fila['nombre'].'" checked><label class="form-check-label">'.$fila['nombre'].'</label></div>';
                        } else {
                            echo '<div class="form-check"><input type="checkbox" name="autor[]" class="form-check-input" value="'.$fila['nombre'].'"><label class="form-check-label">'.$fila['nombre'].'</label></div>';
                        }
                    }
                    echo '</div>';
                    echo '<div class="mb-3"><input type="text" name="estado" class="form-control" value="' . $campo['estado'] . '"></div>';
                    echo '<h5>Seleccionar documento</h5>';
                    echo '<div class="mb-3"><select name="tipo" class="form-select">';
                    $opciones = array('Comunicación', 'Ordenanza', 'Resolución', 'Declaración');
                    $tipo = $campo['tipo'];
                    foreach ($opciones as $opcion) {
                        echo '<option value="' . $opcion . '"';
                        if ($opcion == $tipo) {
                            echo ' selected';
                        }
                        echo '>' . $opcion . '</option>';
                    }
                    echo '</select></div>';
                    echo '<div class="mb-3"><input type="submit" name="actualizar" value="Actualizar" class="btn btn-primary"></div>';
                } else {
                    echo '<form method="post" enctype="multipart/form-data">';
                    echo '<div class="mb-3"><input type="text" name="expte"  class="form-control"placeholder="Expediente"></div>';
                    echo '<div class="mb-3"><input type="file" name="archivo" class="form-control"></div>';
                    echo '<div class="mb-3"><input type="text" name="adjunto" class="form-control" placeholder="Adjunto"></div>';
                    echo '<div class="mb-3"><textarea name="extracto" class="form-control" cols="30" rows="10" placeholder="Extracto aquí..."></textarea></div>';
                    echo '<div class="mb-3"><input type="text" name="letra" class="form-control" placeholder="Letra"></div>';
                    echo '<div class="mb-3"><input type="number" name="paginas" class="form-control" placeholder="Páginas"></div>';
                    echo '<h5>Seleccionar autores</h5>';
                    echo '<div class="mb-3">';
                    $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE categoria = 'Autor' ORDER BY nombre");
                    while ($campo = mysqli_fetch_assoc($consulta)) {
                        echo '<div class="form-check"><input type="checkbox" name="autor[]" class="form-check-input" value="' . $campo['nombre'] . '"><label class="form-ckeck-label">' . $campo['nombre'] . '</label></div>';
                    }
                    echo '</div>';
                    echo '<div class="mb-3"><input type="text" name="estado" class="form-control" placeholder="Estado"></div>';
                    echo '<h5>Seleccionar documento</h5>';
                    echo '<div class="mb-3"><select name="tipo" class="form-select">';
                    echo '<option disabled selected>Elegir tipo</option>';
                    echo '<option value="Comunicación">Comunicación</option>';
                    echo '<option value="Ordenanza">Ordenanza</option>';
                    echo '<option value="Resolución">Resolución</option>';
                    echo '<option value="Declaración">Declaración</option>';
                    echo '<select></div>';
                    echo '<div class="mb-3"><input type="date" name="creado" class="form-control"></div>';
                    echo '<div class="mb-3"><input type="submit" name="insertar" value="Crear Expediente" class="btn btn-primary"></div>';
                }
                ?>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <th>Expte</th>
                        <th>Extracto</th>
                        <th>Creado</th>
                        <th>Funciones</th>
                    </tr>
                    <?php
                    $consulta = mysqli_query($conexion, "SELECT * FROM entradas ORDER BY id DESC");
                    while ($campo = mysqli_fetch_assoc($consulta)) {
                    ?>
                        <tr>
                            <td><?php echo $campo['expte']; ?></td>
                            <td><?php echo $campo['extracto']; ?></td>
                            <td><?php echo $campo['creado']; ?></td>
                            <td><a href="?editar=<?php echo $campo['id']; ?>">Editar</a> <a href="?eliminar=<?php echo $campo['id']; ?>" onclick="return confirm('¿Desea eliminar el expte <?php echo $campo['expte']; ?>?')">Eliminar</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </main>
    <footer class="text-center text-light bg-dark py-4">
        HCD <?php echo date('Y'); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
if (isset($_POST['insertar'])) {
    $expte = $_POST['expte'];
    $archivo = $_FILES['archivo']['name'];
    $adjunto = $_POST['adjunto'];
    $extracto = $_POST['extracto'];
    $letra = $_POST['letra'];
    $paginas = $_POST['paginas'];
    $autor = $_POST['autor'];
    $autores = implode(" - ", $_POST['autor']);
    $estado = $_POST['estado'];
    $tipo = $_POST['tipo'];
    $creado = $_POST['creado'];
    mysqli_query($conexion, "INSERT INTO entradas (archivo_mesa, expte, adjunto, extracto, letra, paginas, autor, estado, tipo, creado) VALUES ('$archivo', '$expte', '$adjunto', '$extracto', '$letra', '$paginas', '$autores', '$estado', '$tipo', '$creado')");
    move_uploaded_file($_FILES['archivo']['tmp_name'], 'doc/' . $archivo);   
    echo '<script>window.location="entradas"</script>';
}
if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $expte = $_POST['expte'];
    $archivo = $_FILES['archivo']['name'];
    $adjunto = $_POST['adjunto'];
    $extracto = $_POST['extracto'];
    $letra = $_POST['letra'];
    $paginas = $_POST['paginas'];
    $autor = $_POST['autor'];
    $autores = implode(" - ", $autor);
    $estado = $_POST['estado'];
    $tipo = $_POST['tipo'];
    mysqli_query($conexion, "UPDATE entradas SET expte = '$expte', adjunto = '$adjunto', extracto = '$extracto', letra = '$letra', paginas = '$paginas', autor = '$autores', estado = '$estado', tipo = '$tipo', editado = NOW() WHERE id = '$id'");
    echo '<script>window.location="entradas"</script>';
}
if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    mysqli_query($conexion, "DELETE FROM mesa WHERE id = '$id'");
    echo '<script>window.location="entradas"</script>';
}
?>