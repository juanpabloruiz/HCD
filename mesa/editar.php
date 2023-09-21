<?php include('../cabecera.php'); ?>
<?php include('../menu.php'); ?>
<?php
$id = $_GET['id'];
$consulta = mysqli_query($conexion, "SELECT * FROM mesa WHERE id = '$id'");
$campo = mysqli_fetch_assoc($consulta);
?>
    <main class="container my-5">

        <form method="post" action="actualizar" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $campo['id']; ?>">
           
            <div class="mb-3">
                <input type="file" name="archivo" class="form-control">
            </div>

            <div class="mb-3">
                <input type="text" name="expte" class="form-control" value="<?php echo $campo['expte']; ?>">
            </div>

            <div class="mb-3">
                <input type="text" name="adjunto" class="form-control" value="<?php echo $campo['adjunto']; ?>">
            </div>

            <div class="mb-3">
                <textarea name="extracto" class="form-control" cols="30" rows="10"><?php echo $campo['extracto']; ?></textarea>
            </div>

            <div class="mb-3">
                <input type="text" name="letra" class="form-control" value="<?php echo $campo['letra']; ?>">
            </div>

            <div class="mb-3">
                <input type="number" name="paginas" class="form-control" value="<?php echo $campo['paginas']; ?>">
            </div>

            <!-- Autores seleccionados-->
            <div class="mb-3">
                <?php
                $usuarios = mysqli_query($conexion, "SELECT * FROM usuarios");
                $seleccionados = explode(" - ", $campo['autor']);
                while ($fila = mysqli_fetch_assoc($usuarios)) {
                    if (in_array($fila['nombre'], $seleccionados)) {
                        echo '<div class="form-check"><input type="checkbox" name="autor[]" class="form-check-input" id="autor" value="'.$fila['nombre'].'" checked><label class="form-check-label" for="autor">'.$fila['nombre'].'</label></div>';
                    } else {
                        echo '<div class="form-check"><label class="form-check-label"><input type="checkbox" name="autor[]" class="form-check-input" id="autor" value="'.$fila['nombre'].'"><label class="form-check-label" for="autor">'.$fila['nombre'].'</label></div>';
                    }
                }
                ?>
            </div>

            <div class="mb-3">
                <input type="text" name="estado" class="form-control" value="<?php echo $campo['estado']; ?>">
            </div>

            <!-- Tipo seleccionado-->
            <div class="mb-3">
                <select name="tipo" class="form-select">
                    <?php
                    $opciones = array("Comunicación", "Ordenanza", "Resolución", "Declaración");
                    $tipo = $campo['tipo'];
                    foreach ($opciones as $opcion) {
                        echo '<option value="' . $opcion . '"';
                        if ($opcion == $tipo) {
                            echo ' selected';
                        }
                        echo '>' . $opcion . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <input type="submit" value="Actualizar" class="btn btn-primary">
            </div>

        </form>

    </main>
<?php include('../pie.php'); ?>