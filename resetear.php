<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('conexion.php');

// Obtener el nombre de todas las tablas en la base de datos
$sql = "SHOW TABLES";
$result = $conexion->query($sql);


    // Cerrar el resultado de la consulta después de obtener la lista de tablas
    mysqli_free_result($result);

    // Volver a obtener el resultado de la consulta SHOW TABLES
    $result = $conexion->query($sql);

    // Inicializar una cadena para almacenar todas las consultas de reinicio
    $queries = "";

    while ($row = mysqli_fetch_array($result)) {
        $tableName = $row[0]; // Obtener el nombre de la tabla

        // Agregar la consulta de reinicio a la cadena de consultas
        $queries .= "ALTER TABLE $tableName AUTO_INCREMENT = 1;
                     SET @num = 0;
                     UPDATE $tableName SET id = @num := @num + 1; ";
    }

    // Ejecutar todas las consultas de reinicio de una vez
    if ($conexion->multi_query($queries) === TRUE) {
        do {
            // Vaciar los resultados pendientes
            if ($result = $conexion->store_result()) {
                $result->free();
            }
        } while ($conexion->more_results() && $conexion->next_result());
        
        echo "Contadores de autoincremento reiniciados en todas las tablas.";
    } 
?>