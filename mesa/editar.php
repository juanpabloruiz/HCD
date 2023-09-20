<?php
include('../conexion.php');
$id = $_GET['id'];
$consulta = mysqli_query($conexion, "SELECT * FROM mesa WHERE id = '$id'");
$campo = mysqli_fetch_assoc($consulta);
?>
<form method="post" action="actualizar">
    <input type="hidden" name="id" value="<?php echo $campo['id']; ?>">
    <textarea name="texto" cols="30" rows="10"><?php echo $campo['texto']; ?></textarea><br>
    <input type="submit" value="Actualizar">
</form>
