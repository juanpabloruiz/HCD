<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../conexion.php');
$expte = $_POST['expte'];
$extracto = $_POST['extracto'];
$letra = $_POST['letra'];
$paginas = $_POST['paginas'];
$autor = $_POST['autor'];
$autores = implode(" - ", $autor);
$creado = $_POST['creado'];
mysqli_query($conexion, "INSERT INTO mesa (expte, extracto, letra, paginas, autor, creado) VALUES ('$expte', '$extracto', '$letra', '$paginas', '$autores', '$creado')");
header('Location:./');
?>