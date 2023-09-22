<?php include('../cabecera.php'); ?>

<?php
// Selección del registro a editar
$id = $_GET['id'];
$consulta = mysqli_query($conexion, "SELECT mesa.expte, secretaria.* FROM mesa INNER JOIN secretaria ON mesa.id = secretaria.id WHERE mesa.id = '$id'");
$campo = mysqli_fetch_assoc($consulta);
?>

    <!-- Contenedor -->
    <main class="container my-3">

        <?php echo '<h3>Expediente: ' . $campo['expte'] . '</h3>'; ?>

        <!-- Formulario -->
        <form method="post" action="actualizar" enctype="multipart/form-data">

            <!-- Fila -->
            <div class="row">

                <!-- Columna izquierda -->
                <div class="col-md">

                    <input type="hidden" name="id" value="<?php echo $campo['id']; ?>">
           
                	<!-- Informe -->
                    <h4>Seleccionar Informe</h4>
                    <div class="card text-bg-secondary mb-3">
                        <div class="card-body">
                            <div class="form-check">
                                <input type='radio' name='informe' class='form-check-input' value='Por la presente se remite el Expediente de referencia, para su conocimiento.
                                    <div style="text-indent: 100px;">Sugiriendo salvo mejor criterio el pase a la Dirección de Labor Parlamentaria del HCD en el caso de que considere que corresponda su incorporación al orden del día para ser tratado en Sesión Ordinaria del HCD.</div>
                                    <div style="text-indent: 100px;">Atentamente</div>'
                                    <?php if (strpos($campo['informe'], "Ordinaria") !== false) echo "checked"; ?>>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Por la presente se remite el Expediente de referencia, para su conocimiento.
                                    <div style="text-indent: 100px;">Sugiriendo salvo mejor criterio el pase a la Dirección de Labor Parlamentaria del HCD en el caso de que considere que corresponda su incorporación al orden del día para ser tratado en Sesión Ordinaria del HCD.</div>
                                    <div style="text-indent: 100px;">Atentamente</div>
                                </label>
                            </div>
                        </div>
				    </div>
                    <div class="card text-bg-secondary mb-3">
                        <div class="card-body">
                            <div class="form-check">
                                <input type='radio' name='informe' class='form-check-input' value='Por la presente se remite el Expediente de referencia, para su conocimiento.
                                    <div style="text-indent: 100px;">Sugiriendo salvo mejor criterio el pase a la Dirección de Labor Parlamentaria del HCD en el caso de que considere que corresponda su incorporación al orden del día para ser tratado en Sesión Extraordinaria del HCD.</div>
                                    <div style="text-indent: 100px;">Atentamente</div>'
                                    <?php if (strpos($campo['informe'], "Extraordinaria") !== false) echo "checked"; ?>>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Por la presente se remite el Expediente de referencia, para su conocimiento.
                                    <div style="text-indent: 100px;">Sugiriendo salvo mejor criterio el pase a la Dirección de Labor Parlamentaria del HCD en el caso de que considere que corresponda su incorporación al orden del día para ser tratado en Sesión Extraordinaria del HCD.</div>
                                    <div style="text-indent: 100px;">Atentamente</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card text-bg-secondary mb-3">
                        <div class="card-body">
                            <div class="form-check">
                                <input type='radio' name='informe' class='form-check-input' value='Por la presente se remite el Expediente de referencia, para su conocimiento.
                                    <div style="text-indent: 100px;">Sugiriendo salvo mejor criterio el pase a la Dirección de Labor Parlamentaria del HCD en el caso de que considere que corresponda su incorporación al orden del día para ser tratado en Sesión Especial del HCD.</div>
                                    <div style="text-indent: 100px;">Atentamente</div>'
                                    <?php if (strpos($campo['informe'], "Especial") !== false) echo "checked"; ?>>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Por la presente se remite el Expediente de referencia, para su conocimiento.
                                    <div style="text-indent: 100px;">Sugiriendo salvo mejor criterio el pase a la Dirección de Labor Parlamentaria del HCD en el caso de que considere que corresponda su incorporación al orden del día para ser tratado en Sesión Especial del HCD.</div>
                                    <div style="text-indent: 100px;">Atentamente</div>
                                </label>
                            </div>
                        </div>
                    </div>
				    <!-- /Informe -->

                    <div class="mb-3">
                        <h4>Ingresar archivo de Firma Digital</h4>
                        <input type="file" name="firma" class="form-control">
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="lugar_fecha" class="form-control" id="lugar_fecha" value="<?php echo $campo['lugar_fecha']; ?>">
                        <label for="lugar_fecha">Lugar y Fecha</label>
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Actualizar" class="btn btn-primary">
                    </div>
                
                </div>
                <!-- /Columna izquierda -->

            </div>
            <!-- /Fila -->

        </form>
        <!-- /Formulario -->

    </main>
    <!-- /Contenedor -->

<?php include('../pie.php'); ?>