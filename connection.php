<?php
function getConnection() {
    $host = 'localhost';
    $user = 'tu_usuario'; 
    $pass = 'tu_contraseña'; 
    $db = 'examen';

    $connection = mysqli_connect($host, $user, $pass, $db);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $connection;
}
?>
