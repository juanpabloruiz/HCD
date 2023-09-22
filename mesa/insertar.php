<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../conexion.php');
$archivo = $_FILES['archivo']['name'];
move_uploaded_file($_FILES['archivo']['tmp_name'], '../archivos/' . $archivo);
$expte = $_POST['expte'];
$adjunto = $_POST['adjunto'];
$extracto = $_POST['extracto'];
$letra = $_POST['letra'];
$paginas = $_POST['paginas'];
$autor = $_POST['autor'];
$autores = implode(" - ", $autor);
$estado = $_POST['estado'];
$tipo = $_POST['tipo'];
$creado = $_POST['creado'];
mysqli_query($conexion, "INSERT INTO mesa (archivo, expte, adjunto, extracto, letra, paginas, autor, estado, tipo, creado) VALUES ('$archivo', '$expte', '$adjunto', '$extracto', '$letra', '$paginas', '$autores', '$estado', '$tipo', '$creado')");
mysqli_query($conexion, "INSERT INTO secretaria () VALUES ()");
mysqli_query($conexion, "INSERT INTO presidencia () VALUES ()");
mysqli_query($conexion, "INSERT INTO secretaria () VALUES ()");
mysqli_query($conexion, "INSERT INTO labor () VALUES ()");
mysqli_query($conexion, "INSERT INTO prosecretaria () VALUES ()");
mysqli_query($conexion, "INSERT INTO comisiones () VALUES ()");
header('Location:./');
?>