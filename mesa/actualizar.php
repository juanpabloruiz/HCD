<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../conexion.php');
$id = $_POST['id'];
$archivo = $_POST['archivo'];
$expte = $_POST['expte'];
$adjunto = $_POST['adjunto'];
$extracto = $_POST['extracto'];
$letra = $_POST['letra'];
$paginas = $_POST['paginas'];
$autores = implode(' - ', $_POST['autor']);
$estado = $_POST['estado'];
$tipo = $_POST['tipo'];
mysqli_query($conexion, "UPDATE mesa SET
expte = '$expte',
adjunto = '$adjunto',
extracto = '$extracto',
letra = '$letra',
paginas = '$paginas',
autor = '$autores',
estado = '$estado',
tipo = '$tipo',
editado = NOW()
WHERE id = '$id'");
header('Location:./');
?>