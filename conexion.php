<?php
session_start();
$conexion = new mysqli('localhost', 'usuario', 'clave', 'base');
mysqli_set_charset($conexion, 'utf8');
?>