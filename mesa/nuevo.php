<?php include('../cabecera.php'); ?>
<?php include('../menu.php'); ?>

    <!-- Contenedor -->
    <main class="container my-3">

        <!-- Formulario -->
        <form method="post" action="insertar" enctype="multipart/form-data">
            
            <!-- Fila -->
            <div class="row">
                
                <!-- Columna izquierda -->
                <div class="col-md">
            
                    <div class="mb-3">
                        <h4>Ingresar archivo</h4>
                        <input type="file" name="archivo" class="form-control">
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" name="expte" class="form-control" id="expte" placeholder="Expediente">
                        <label for="expte">Expediente</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="adjunto" class="form-control" id="adjunto" placeholder="Adjunto">
                        <label for="adjunto">Adjunto</label>
                    </div>

                    <div class="mb-3">
                        <textarea name="extracto" class="form-control" id="extracto" rows="10" placeholder="Extracto..."></textarea>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="letra" class="form-control" id="letra" placeholder="Letra">
                        <label for="letra">Letra</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" name="paginas" class="form-control" id="paginas" placeholder="Páginas">
                        <label for="paginas">Páginas</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="estado" class="form-control" id="estado" placeholder="Estado">
                        <label for="estado">Estado</label>
                    </div>

                    <div class="mb-3">
                        <h4>Seleccionar documento</h4>
                        <select name="tipo" class="form-select" id="tipo">
                            <option disabled selected>Elegir tipo</option>
                            <option value="Comunicación">Comunicación</option>
                            <option value="Ordenanza">Ordenanza</option>
                            <option value="Resolución">Resolución</option>
                            <option value="Declaración">Declaración</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <h4>Fecha de creación</h4>
                        <input type="date" name="creado" class="form-control" id="creado">
                    </div>

                </div>
                <!-- /Columna izquierda -->

                <!-- Columna derecha -->
                <div class="col-md">

                    <div class="mb-3">
                        <h4>Seleccionar autores</h4>
                        <?php
                        $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE categoria = 'Autor' ORDER BY nombre");
                        while ($campo = mysqli_fetch_assoc($consulta)) {
                            echo '<div class="form-check"><input type="checkbox" name="autor[]" class="form-check-input" id="autor" value="'.$campo['nombre'].'"><label class="form-check-label" for="autor">'.$campo['nombre'].'</label></div>';
                        }
                        ?>
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Crear Expediente" class="btn btn-primary">
                    </div>
                
                </div>
                <!-- /Columna derecha -->

            </div>
            <!-- /Fila -->

        </form>
        <!-- /Formulario -->

    </main>
    <!-- /Contenedor -->

<?php include('../pie.php'); ?>