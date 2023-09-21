<?php
include('../conexion.php');
$id = $_GET['id'];
mysqli_query($conexion, "DELETE FROM mesa WHERE id = '$id'");
header('Location:./');
?>