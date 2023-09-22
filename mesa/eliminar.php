<?php
include('../conexion.php');
$id = $_GET['id'];
mysqli_query($conexion, "DELETE FROM mesa WHERE id = '$id'");
mysqli_query($conexion, "DELETE FROM secretaria WHERE id = '$id'");
mysqli_query($conexion, "DELETE FROM presidencia WHERE id = '$id'");
mysqli_query($conexion, "DELETE FROM labor WHERE id = '$id'");
mysqli_query($conexion, "DELETE FROM prosecretaria WHERE id = '$id'");
mysqli_query($conexion, "DELETE FROM comisiones WHERE id = '$id'");
header('Location:./');
?>