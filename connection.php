<?php
$host = "localhost";
$userDB = "root";
$passDB = "";
$dbName = "test";

$conn = mysqli_connect($host, $userDB, $passDB);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

$db = mysqli_select_db($conn, $dbName);
if (!$db) {
    die("Error al seleccionar la base de datos: " . mysqli_error($conn));
}
?>