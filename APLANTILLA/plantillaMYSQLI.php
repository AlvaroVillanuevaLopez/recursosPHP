<?php
// 1. Datos de conexión
$host = "localhost";
$usuario = "mi_usuario";
$pass = "mi_password";
$bd = "mi_empresa";

// 2. Apertura de conexión y selección de BD [cite: 663]
// Se usa el operador @ para suprimir warnings y manejar el error manualmente
$mysqli = @new mysqli($host, $usuario, $pass, $bd);

// 3. Validar los punteros de conexión (Errores) 
if ($mysqli->connect_errno) {
    die("Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

// 4. Establecer codificación (Charset) [cite: 738]
if (!$mysqli->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
}

// 5. Ejecución de transacciones: Desactivar autocommit [cite: 746]
$mysqli->autocommit(FALSE);

try {
    // --- INSERCIÓN DE FILAS Y ESCAPADO ---

    // Datos de entrada simulados (con comillas peligrosas)
    $nombre_sucio = "O'Connor";
    $cargo_sucio = "Gerente";

    // Escape de caracteres [cite: 686]
    $nombre = $mysqli->real_escape_string($nombre_sucio);
    $cargo = $mysqli->real_escape_string($cargo_sucio);

    // Ejecución de consulta INSERT [cite: 683, 283]
    $sql_insert = "INSERT INTO empleados (nombre, cargo) VALUES ('$nombre', '$cargo')";

    if (!$mysqli->query($sql_insert)) {
        throw new Exception("Error en INSERT: " . $mysqli->error);
    }

    echo "Fila insertada. ID generado: " . $mysqli->insert_id . "<br>"; // [cite: 581]

    // --- ACTUALIZACIÓN DE FILAS ---

    $sql_update = "UPDATE empleados SET salario = salario + 100 WHERE cargo = '$cargo'";
    if (!$mysqli->query($sql_update)) {
        throw new Exception("Error en UPDATE: " . $mysqli->error);
    }
    echo "Filas actualizadas: " . $mysqli->affected_rows . "<br>"; // [cite: 194]

    // --- LECTURA Y MOSTRADO DE DATOS ---

    $sql_select = "SELECT id, nombre, cargo, salario FROM empleados";

    // Ejecutar consulta de lectura [cite: 683]
    if ($resultado = $mysqli->query($sql_select)) {

        echo "<h3>Listado de Empleados (Total: " . $resultado->num_rows . ")</h3>"; // [cite: 690]

        // Recorrer resultados con fetch_assoc [cite: 697, 714]
        while ($fila = $resultado->fetch_assoc()) {
            echo "ID: " . $fila['id'] . " | Nombre: " . $fila['nombre'] . " | Cargo: " . $fila['cargo'] . "<br>";
        }

        // Liberar memoria asociada [cite: 674]
        $resultado->free_result();
    } else {
        throw new Exception("Error en SELECT: " . $mysqli->error);
    }

    // --- ELIMINACIÓN DE FILAS ---

    // Borramos el ejemplo creado
    $sql_delete = "DELETE FROM empleados WHERE nombre = '$nombre'";
    if (!$mysqli->query($sql_delete)) {
        throw new Exception("Error en DELETE: " . $mysqli->error);
    }
    echo "Filas eliminadas: " . $mysqli->affected_rows . "<br>";

    // Si todo ha ido bien, hacemos COMMIT de la transacción [cite: 741]
    $mysqli->commit();
    echo "<p>Transacción completada con éxito.</p>";
} catch (Exception $e) {
    // Si hubo error, deshacemos cambios (ROLLBACK) y mostramos error [cite: 743]
    $mysqli->rollback();
    echo "<p>Error detectado. Se ha hecho Rollback. Detalle: " . $e->getMessage() . "</p>";
}

// 6. Cerrar conexiones [cite: 672]
$mysqli->close();
