<?php
include('../conexion.php');
$expte = $_POST['expte'];
$extracto = $_POST['extracto'];
$letra = $_POST['letra'];
$paginas = $_POST['paginas'];
$autor = $_POST['autor'];
$arreglo = implode(' - ', $autor);
$fecha = $_POST['fecha'];
mysqli_query($conexion, "INSERT INTO mesa (expte, extracto, letra, paginas, autor, fecha) VALUES ('$expte', '$extracto', '$letra', '$paginas', '$arreglo', '$fecha')");
//mysqli_query($conexion, "INSERT INTO secretaria (expte) VALUES ('$expte')");
//mysqli_query($conexion, "INSERT INTO presidencia (expte) VALUES ('$expte')");
//mysqli_query($conexion, "INSERT INTO labor (expte) VALUES ('$expte')");
//mysqli_query($conexion, "INSERT INTO prosecretaria (expte) VALUES ('$expte')");
//mysqli_query($conexion, "INSERT INTO comisiones (expte) VALUES ('$expte')");
header('Location:./');
?>