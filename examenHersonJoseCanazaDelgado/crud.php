<?php
require_once(".\\connection.php");

// Obtener todas las sillas en formato JSON
function getData() {
    global $conn;
    $query = "SELECT * FROM silla";
    $result = mysqli_query($conn, $query);
    $sillas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($sillas);
}

// Insertar una nueva silla a partir de un JSON
function setData($data) {
    global $conn;
    $material = $data['material'];
    $dimensiones = $data['dimensiones'];
    $peso = $data['peso'];
    $uso = $data['uso'];

    $query = "INSERT INTO silla (material, dimensiones, peso, uso) VALUES ('$material', '$dimensiones', '$peso', '$uso')";
    if (mysqli_query($conn, $query)) {
        echo json_encode(["message" => "Silla añadida exitosamente"]);
    } else {
        echo json_encode(["error" => "Error al añadir la silla"]);
    }
}

// Actualizar una silla existente
function updateData($id, $data) {
    global $conn;
    $material = $data['material'];
    $dimensiones = $data['dimensiones'];
    $peso = $data['peso'];
    $uso = $data['uso'];

    $query = "UPDATE silla SET material = '$material', dimensiones = '$dimensiones', peso = '$peso', uso = '$uso' WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        echo json_encode(["message" => "Silla actualizada exitosamente"]);
    } else {
        echo json_encode(["error" => "Error al actualizar la silla"]);
    }
}

// Eliminar una silla por su ID
function deleteData($id) {
    global $conn;
    $query = "DELETE FROM silla WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        echo json_encode(["message" => "Silla eliminada exitosamente"]);
    } else {
        echo json_encode(["error" => "Error al eliminar la silla"]);
    }
}
?>
