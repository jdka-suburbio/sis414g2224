<?php
require_once("./connection.php");

function login($username, $password)
{
    return $username == "admin" && $password == "admin";
}

function getData($table)
{
    global $conn;
    $query = "SELECT * FROM $table";
    $q = mysqli_query($conn, $query);
    if (!$q) {
        return [];
    }
    return mysqli_fetch_all($q, MYSQLI_ASSOC);
}

function setData($table, $data)
{
    global $conn;   
    $fields = implode(",", array_keys($data));
    $values = '"' . implode('","', array_values($data)) . '"';
    $query = "INSERT INTO $table ($fields) VALUES ($values)";

    if (mysqli_query($conn, $query)) {
        return "Dato insertado exitosamente.";
    } else {
        return "Error al insertar el dato: " . mysqli_error($conn);
    }
}

function updateData($table, $data, $condition)
{
    global $conn;
    $updateFields = [];
    foreach ($data as $key => $value) {
        $updateFields[] = "$key=\"$value\"";
    }
    $updateFieldsString = implode(",", $updateFields);
    $query = "UPDATE $table SET $updateFieldsString WHERE $condition";

    if (mysqli_query($conn, $query)) {
        return "Dato modificado exitosamente.";
    } else {
        return "Error al modificar el dato: " . mysqli_error($conn);
    }
}

function deleteData($table, $condition)
{
    global $conn;   
    $query = "DELETE FROM $table WHERE $condition";

    if (mysqli_query($conn, $query)) {
        return "Dato eliminado exitosamente.";
    } else {
        return "Error al eliminar el dato: " . mysqli_error($conn);
    }
}
?>