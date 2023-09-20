<?php include('../conexion.php'); ?>
<a href="nuevo">Agregar nuevo expediente</a>
<table border="1" cellpadding="7">
    <tr>
        <th>Expte</th>
        <th>Autor</th>
        <th>Texto</th>
        <th>Creado</th>
        <th>Funciones</th>
    </tr>
    <?php
    $consulta = mysqli_query($conexion, "SELECT * FROM mesa ORDER BY id DESC");
    while ($campo = mysqli_fetch_assoc($consulta)) {
    ?>
        <tr>
            <td><?php echo $campo['expte']; ?></td>
            <td><?php echo $campo['autor']; ?></td>
            <td><?php echo $campo['texto']; ?></td>
            <td><?php echo $campo['creado']; ?></td>
            <td><a href="editar?id=<?php echo $campo['id']; ?>">Editar</a> | <a href="eliminar?id=<?php echo $campo['id']; ?>" onclick="return confirm('¿Desea eliminar el expediente <?php echo $campo['expte']; ?>?')">Eliminar</a></td>
        </tr>
    <?php
    }
    ?>
</table>