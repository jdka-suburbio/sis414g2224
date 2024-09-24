<?php

$host = "localhost";
$usuario = "root";  
$password = "";     
$base_datos = "autos_db";

$conexion = new mysqli($host, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$anio = $_POST['anio'];
$combustible = $_POST['combustible'];

$sql = "INSERT INTO automoviles (marca, modelo, anio, combustible) VALUES ('$marca', '$modelo', '$anio', '$combustible')";


if ($conexion->query($sql) === TRUE) {
    echo "Registro guardado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
