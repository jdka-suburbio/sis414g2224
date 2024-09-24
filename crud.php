<?php
require_once("connection.php");

// Leer datos (Read)
function getData() {
    global $conn;
    $query = "SELECT * FROM atributos"; // Seleccionamos todo de la tabla 'atributos'
    $result = mysqli_query($conn, $query);
    
    $data = [];
    
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    return $data;
}

// Insertar datos (Create)
function setData($material, $modelo, $almacenamiento, $sistema_operativo) {
    global $conn;
    $query = "INSERT INTO atributos (material, modelo, almacenamiento, sistema_operativo) VALUES ('$material', '$modelo', '$almacenamiento', '$sistema_operativo')";
    if (mysqli_query($conn, $query)) {
        echo "Datos insertados correctamente.<br>";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conn) . "<br>";
    }
}

// Eliminar datos (Delete)
function deleteData($id) {
    global $conn;
    $query = "DELETE FROM atributos WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        echo "Registro eliminado correctamente.<br>";
    } else {
        echo "Error al eliminar: " . mysqli_error($conn) . "<br>";
    }
}
?>
