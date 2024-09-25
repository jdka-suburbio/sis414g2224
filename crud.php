<?php
require_once('./connection.php');

function createRefrigerador($marca, $modelo) {
    $mysql = getConnection();
    $stmt = $mysql->prepare("INSERT INTO refrigeradores (marca, modelo) VALUES (?, ?)");
    $stmt->bind_param("ss", $marca, $modelo);
    $stmt->execute();
    $stmt->close();
    $mysql->close();
}

function getRefrigeradores() {
    $mysql = getConnection();
    $result = $mysql->query("SELECT * FROM refrigeradores");
    $data = [];

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    $mysql->close();
    return $data;
}

function updateRefrigerador($id, $marca, $modelo) {
    $mysql = getConnection();
    $stmt = $mysql->prepare("UPDATE refrigeradores SET marca = ?, modelo = ? WHERE id = ?");
    $stmt->bind_param("ssi", $marca, $modelo, $id);
    $stmt->execute();
    $stmt->close();
    $mysql->close();
}

function deleteRefrigerador($id) {
    $mysql = getConnection();
    $stmt = $mysql->prepare("DELETE FROM refrigeradores WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    $mysql->close();
}
?>
