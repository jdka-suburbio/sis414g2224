<?php
$host = "localhost";
$userDB = "root";
$passDB = "";
try
{
    $conn = mysqli_connect($host, $userDB, $passDB);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
}
catch(Exception $e)
{
    print("Error conexion");
    return;
}

$dbName = "test";
try
{
    $db = mysqli_select_db($conn, $dbName);
}
catch(Exception $e)
{
    print("Error DB");
    return;    
}

?>