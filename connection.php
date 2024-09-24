<?php
$host = "localhost";
$userDB = "root";
$passDB = "";
$dbName = "smartphone"; 

try {
    $conn = mysqli_connect($host, $userDB, $passDB, $dbName);
    if (!$conn) {
        throw new Exception("Error en la conexión broooo");
    }
} catch (Exception $e) {
    die($e->getMessage()); 
}
?>
