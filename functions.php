<?php
include_once 'config.php';

function createRecord($name, $email) {
    global $conn;
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        return "Nuevo registro creado con éxito";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

function readRecords() {
    global $conn;
    $sql = "SELECT id, name, email FROM users";
    $result = $conn->query($sql);
    return $result;
}

function updateRecord($id, $name, $email) {
    global $conn;
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return "Registro actualizado con éxito";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

function deleteRecord($id) {
    global $conn;
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return "Registro eliminado con éxito";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();