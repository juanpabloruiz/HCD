<?php
include('../conexion.php');
$id = $_POST['id'];
$texto = $_POST['texto'];
mysqli_query($conexion, "UPDATE mesa SET texto = '$texto' WHERE id = '$id'");
header('Location:./');
?>