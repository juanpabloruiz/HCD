<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../conexion.php');
$id = $_POST['id'];
$informe = $_POST['informe'];
$firma = $_FILES['firma']['name'];
move_uploaded_file($_FILES['firma']['tmp_name'], '../firmas/' . $firma);
$lugar_fecha = $_POST['lugar_fecha'];
mysqli_query($conexion, "UPDATE secretaria SET
informe = '$informe',
firma = '$firma',
lugar_fecha = '$lugar_fecha',
WHERE id = '$id'");
header('Location:./');
?>