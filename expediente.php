<?php include('cabecera.php'); ?>
<?php include('menu.php'); ?>
<?php
$id = $_GET['id'];
$mesa = mysqli_query($conexion, "SELECT * FROM mesa WHERE id = '$id'");
$secretaria = mysqli_query($conexion, "SELECT * FROM secretaria WHERE id = '$id'");
$presidencia = mysqli_query($conexion, "SELECT * FROM presidencia WHERE id = '$id'");
$labor = mysqli_query($conexion, "SELECT * FROM labor WHERE id = '$id'");
$prosecretaria = mysqli_query($conexion, "SELECT * FROM prosecretaria WHERE id = '$id'");
$comisiones = mysqli_query($conexion, "SELECT * FROM comisiones WHERE id = '$id'");

while ($campo = mysqli_fetch_assoc($mesa)) {
    echo 'Expediente: ' . $campo['expte'].'<br>';
}

while ($campo = mysqli_fetch_assoc($secretaria)) {
    echo 'Informe de Secretaría: ' . $campo['informe'].'<br>';
}

while ($campo = mysqli_fetch_assoc($presidencia)) {
    echo 'Informe de Prosecretaría: ' . $campo['informe'].'<br>';
}
?>
<?php include('pie.php'); ?>