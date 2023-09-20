<?php include('../conexion.php'); ?>
<form method="post" action="insertar">
    <input type="text" name="expte" placeholder="Expediente"><br>
    <textarea name="extracto" cols="30" rows="10" placeholder="Extracto..."></textarea><br>
    <input type="text" name="letra" placeholder="Letra"><br>
    <input type="number" name="paginas" placeholder="Páginas"><br>
    <?php
    $consulta = mysqli_query($conexion, "SELECT * FROM usuarios ORDER BY nombre");
    while ($campo = mysqli_fetch_assoc($consulta)) {
    ?>
        <input type="checkbox" name="autor[]" value="<?php echo $campo['nombre']; ?>"> <?php echo $campo['nombre']; ?><br>
    <?php
    }
    ?>
    <br>
    <select name="tipo">
        <option disabled selected>Elegir tipo</option>
        <option value="Ordenanza">Ordenanza</option>
        <option value="Resolución">Resolución</option>
        <option value="Declaración">Declaración</option>
    </select>
    <br>
    <input type="datetime-local" name="fecha"><br>
    <input type="submit" value="Crear">
</form>