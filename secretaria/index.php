<?php include('../cabecera.php'); ?>

    <main class="container my-3">
        <table class="table">
            <tr>
                <th>Expte</th>
                <th>Informe</th>
                <th>Firma</th>
                <th>Lugar y fecha</th>
                <th>Funciones</th>
            </tr>
            <?php
            $consulta = mysqli_query($conexion, "SELECT mesa.expte, secretaria.* FROM mesa INNER JOIN secretaria ON mesa.id = secretaria.id ORDER BY id DESC");
            while ($campo = mysqli_fetch_assoc($consulta)) {
            ?>
                <tr>
                    <td><?php echo $campo['expte']; ?></td>
                    <td><?php echo $campo['informe']; ?></td>
                    <td><?php echo $campo['firma']; ?></td>
                    <td><?php echo $campo['lugar_fecha']; ?></td>
                    <td><a href="editar?id=<?php echo $campo['id']; ?>">Editar</a></td>
                </tr>
            <?php
            }
            ?>
        </table>

    </main>

<?php include('../pie.php'); ?>