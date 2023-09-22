<?php include('../cabecera.php'); ?>

<?php
// Selección del registro a editar
$id = $_GET['id'];
$consulta = mysqli_query($conexion, "SELECT * FROM mesa WHERE id = '$id'");
$campo = mysqli_fetch_assoc($consulta);
?>

    <!-- Contenedor -->
    <main class="container my-3">

        <!-- Formulario -->
        <form method="post" action="actualizar" enctype="multipart/form-data">

            <!-- Fila -->
            <div class="row">

                <!-- Columna izquierda -->
                <div class="col-md">

                    <input type="hidden" name="id" value="<?php echo $campo['id']; ?>">
           
                    <div class="mb-3">
                        <input type="file" name="archivo" class="form-control">
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="expte" class="form-control" id="expte" value="<?php echo $campo['expte']; ?>">
                        <label for="expte">Expedientes</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="adjunto" class="form-control" id="adjunto" value="<?php echo $campo['adjunto']; ?>">
                        <label for="adjunto">Adjunto</label>
                    </div>

                    <div class="mb-3">
                        <textarea name="extracto" class="form-control" cols="30" rows="10"><?php echo $campo['extracto']; ?></textarea>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="letra" class="form-control" value="<?php echo $campo['letra']; ?>">
                        <label for="letra">Letra</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" name="paginas" class="form-control" id="paginas" value="<?php echo $campo['paginas']; ?>">
                        <label for="paginas">Páginas</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="estado" class="form-control" value="<?php echo $campo['estado']; ?>">
                        <label for="estado">Estado</label>
                    </div>

                    <!-- Tipo seleccionado-->
                    <div class="mb-3">
                        <h4>Seleccionar documento</h4>
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

                </div>
                <!-- /Columna izquierda -->
                
                <!-- Columna derecha -->
                <div class="col-md">

                    <!-- Autores seleccionados-->
                    <div class="mb-3">
                        <h4>Seleccionar autores</h4>
                        <?php
                        $usuarios = mysqli_query($conexion, "SELECT * FROM usuarios WHERE categoria = 'autor' ORDER BY nombre ASC");
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
                        <input type="submit" value="Actualizar" class="btn btn-primary">
                    </div>
                
                </div>
                <!-- /Columna derecha -->

            </div>
            <!-- /Fila -->

        </form>
        <!-- /Formulario -->

    </main>
    <!-- /Contenedor -->

<?php include('../pie.php'); ?>