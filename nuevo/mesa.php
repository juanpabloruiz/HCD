<?php
session_start();
$conexion = new mysqli('localhost', 'usuario', 'clave', 'base');
mysqli_set_charset($conexion, 'utf8');
?>
<link rel="stylesheet" href="estilo.css">
<nav>
    HCD
    <a href="mesa">Inicio</a>
</nav>
<table>
    <tr>
        <th>Id</th>
        <th>Expte</th>
        <th>Extracto</th>
        <th>Creado</th>
        <th>Funciones</th>
    </tr>
    <?php
    $consulta = mysqli_query($conexion, "SELECT * FROM mesa ORDER BY id DESC");
    while ($campo = mysqli_fetch_assoc($consulta)) {
    ?>
    <tr>
        <td><?php echo $campo['id']; ?></td>
        <td><?php echo $campo['expte']; ?></td>
        <td><?php echo $campo['extracto']; ?></td>
        <td><?php echo $campo['creado']; ?></td>
        <td><a href="?editar=<?php echo $campo['id']; ?>">Editar</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<?php
if (isset($_GET['editar'])) {
    $id = $_GET['editar'];
    $consulta = mysqli_query($conexion, "SELECT * FROM mesa WHERE id = '$id'");
    $campo = mysqli_fetch_assoc($consulta);
    echo '<form method="post" enctype="multipart/form-data">';
    echo '<input type="hidden" name="id" value="'.$campo['id'].'">';
    echo '<input type="text" name="expte" value="'.$campo['expte'].'">';
    echo '<input type="file" name="archivo" value="'.$campo['archivo'].'">';
    echo '<input type="text" name="adjunto" value="'.$campo['adjunto'].'">';
    echo '<textarea name="extracto" cols="30" rows="10">'.$campo['extracto'].'</textarea>';
    echo '<input type="text" name="letra" value="'.$campo['letra'].'">';
    echo '<input type="number" name="paginas" value="'.$campo['paginas'].'">';
    echo '<input type="text" name="autor[]" value="'.$campo['autor'].'">';
    echo '<input type="text" name="estado" value="'.$campo['estado'].'">';
    echo '<input type="text" name="tipo" value="'.$campo['tipo'].'">';
    echo '<input type="date" name="creado" value="'.$campo['creado'].'">';
    echo '<input type="submit" name="actualizar" value="Actualizar">';
} else {
    echo '<form method="post" enctype="multipart/form-data">';
    echo '<input type="text" name="expte" placeholder="Expediente">';
    echo '<input type="file" name="archivo">';
    echo '<input type="text" name="adjunto" placeholder="Adjunto">';
    echo '<textarea name="extracto" cols="30" rows="10" placeholder="Extracto aquí..."></textarea>';
    echo '<input type="text" name="letra" placeholder="Letra">';
    echo '<input type="number" name="paginas" placeholder="Páginas">';
    echo '<input type="text" name="autor[]" placeholder="'.$campo['autor'].'">';
    echo '<input type="text" name="estado" placeholder="Estado">';
    echo '<input type="text" name="tipo" placeholder="'.$campo['tipo'].'">';
    echo '<input type="date" name="creado">';
    echo '<input type="submit" name="actualizar" value="Actualizar">';
}
?>