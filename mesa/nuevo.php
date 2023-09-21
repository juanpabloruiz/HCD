<?php include('../conexion.php'); ?>
<form method="post" action="insertar" enctype="multipart/form-data">

    <label for="archivo">Ingresar archivo</label><br>
    <input type="file" name="archivo"><br>

    <label for="expte">Expediente:</label><br>
    <input type="text" name="expte" id="expte" placeholder="Expediente"><br>

    <label for="adjunto">Adjunto:</label><br>
    <input type="text" name="adjunto" id="adjunto" placeholder="Adjunto"><br>

    <label for="extracto">Extracto:</label><br>
    <textarea name="extracto" id="extracto" cols="30" rows="10" placeholder="Extracto..."></textarea><br>
   
    <label for="letra">Letra:</label><br>
    <input type="text" name="letra" id="letra" placeholder="Letra"><br>

    <label for="paginas">Páginas:</label><br>
    <input type="number" name="paginas" id="paginas" placeholder="Páginas"><br>
    
    <label for="autores">Autores:</label><br>
    <?php
    $consulta = mysqli_query($conexion, "SELECT * FROM usuarios ORDER BY nombre");
    while ($campo = mysqli_fetch_assoc($consulta)) {
        echo '<input type="checkbox" name="autor[]" id="autores" value="'.$campo['nombre'].'"> '.$campo['nombre'].'<br>';
    }
    ?>

    <label for="estado">Estado:</label><br>
    <input type="text" name="estado" id="estado" placeholder="Estado"><br>
    
    <label for="tipo">Tipo:</label><br>
    <select name="tipo" id="tipo">
        <option disabled selected>Elegir tipo</option>
        <option value="Comunicación">Comunicación</option>
        <option value="Ordenanza">Ordenanza</option>
        <option value="Resolución">Resolución</option>
        <option value="Declaración">Declaración</option>
    </select>
    <br>

    <label for="fecha">Fecha:</label><br>
    <input type="date" name="creado" id="creado"><br>

    <input type="submit" value="Crear">
</form>