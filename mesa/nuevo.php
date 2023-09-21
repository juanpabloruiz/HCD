<?php include('../cabecera.php'); ?>
<?php include('../menu.php'); ?>
    <main class="container my-5">

        <form method="post" action="insertar" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label for="archivo">Ingresar archivo</label>
                <input type="file" name="archivo" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="expte">Expediente:</label>
                <input type="text" name="expte" class="form-control" id="expte" placeholder="Expediente">
            </div>

            <div class="mb-3">
                <label for="adjunto">Adjunto:</label>
                <input type="text" name="adjunto" class="form-control" id="adjunto" placeholder="Adjunto">
            </div>

            <div class="mb-3">
                <label for="extracto">Extracto:</label>
                <textarea name="extracto" class="form-control" id="extracto" cols="30" rows="10" placeholder="Extracto..."></textarea>
            </div>

            <div class="mb-3">
                <label for="letra">Letra:</label>
                <input type="text" name="letra" class="form-control" id="letra" placeholder="Letra">
            </div>

            <div class="mb-3">
                <label for="paginas">Páginas:</label>
                <input type="number" name="paginas" class="form-control" id="paginas" placeholder="Páginas">
            </div>

            <div class="mb-3">
                <label for="autores">Autores:</label>
                <?php
                $consulta = mysqli_query($conexion, "SELECT * FROM usuarios ORDER BY nombre");
                while ($campo = mysqli_fetch_assoc($consulta)) {
                    echo '<div class="form-check"><input type="checkbox" name="autor[]" class="form-check-input" id="autor" value="'.$campo['nombre'].'"><label class="form-check-label" for="autor">'.$campo['nombre'].'</label></div>';
                }
                ?>
            </div>

            <div class="mb-3">
                <label for="estado">Estado:</label>
                <input type="text" name="estado" class="form-control" id="estado" placeholder="Estado">
            </div>

            <div class="mb-3">
                <label for="tipo">Tipo:</label><br>
                <select name="tipo" class="form-select" id="tipo">
                    <option disabled selected>Elegir tipo</option>
                    <option value="Comunicación">Comunicación</option>
                    <option value="Ordenanza">Ordenanza</option>
                    <option value="Resolución">Resolución</option>
                    <option value="Declaración">Declaración</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="fecha">Fecha:</label><br>
                <input type="date" name="creado" class="form-control" id="creado">
            </div>

            <div class="mb-3">
                <input type="submit" value="Crear" class="btn btn-primary">
            </div>
        </form>

    </main>
<?php include('../pie.php'); ?>