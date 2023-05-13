<?php
function updateData($id, $newData) {
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Eval02";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    // Consulta para actualizar el registro
    $sql = "UPDATE Producto SET campo1 = '{$newData['campo1']}', campo2 = '{$newData['campo2']}' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
}

// Llamada a la función para actualizar un registro específico
$dataToUpdate = array(
    'campo1' => 'nuevo_valor1',
    'campo2' => 'nuevo_valor2'
);
updateData(1, $dataToUpdate);
?>
