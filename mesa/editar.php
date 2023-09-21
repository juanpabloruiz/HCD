<?php include('../cabecera.php'); ?>
<?php
$id = $_GET['id'];
$consulta = mysqli_query($conexion, "SELECT * FROM mesa WHERE id = '$id'");
$campo = mysqli_fetch_assoc($consulta);
?>
<form method="post" action="actualizar" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $campo['id']; ?>">
    <input type="file" name="archivo"><br>
    <input type="text" name="expte" value="<?php echo $campo['expte']; ?>"><br>
    <input type="text" name="adjunto" value="<?php echo $campo['adjunto']; ?>"><br>
    <textarea name="extracto" cols="30" rows="10"><?php echo $campo['extracto']; ?></textarea><br>
    <input type="text" name="letra" value="<?php echo $campo['letra']; ?>"><br>
    <input type="number" name="paginas" value="<?php echo $campo['paginas']; ?>"><br>

    <!-- Autores seleccionados-->
    <?php
	$usuarios = mysqli_query($conexion, "SELECT * FROM usuarios");
    $seleccionados = explode(" - ", $campo['autor']);
    while ($fila = mysqli_fetch_assoc($usuarios)) {
        if (in_array($fila['nombre'], $seleccionados)) {
            echo '<label><input type="checkbox" name="autor[]" value="'.$fila['nombre'].'" checked> '.$fila['nombre'].'</label><br>';
        } else {
            echo '<label><input type="checkbox" name="autor[]" value="'.$fila['nombre'].'"> '.$fila['nombre'].'</label><br>';
        }
    }
    ?>

    <input type="text" name="estado" value="<?php echo $campo['estado']; ?>"><br>
    
    <!-- Tipo seleccionado-->
    <select name="tipo">
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
    <br>
    <input type="submit" value="Actualizar">
</form>
<?php include('../pie.php'); ?>