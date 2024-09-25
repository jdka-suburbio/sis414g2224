
<?php
$host = "localhost";
$userDB = "root";
$passDB = "";
$dbname = "sillas_db";
try {
    $conn = mysqli_connect($host, $userDB, $passDB);
} catch(Exception $e) {
    print("Error conexion");
    return;
}

$dbName = "sillas_db";  // Base de datos actualizada para "sillas"
try {
    $db = mysqli_select_db($conn, $dbName);
} catch(Exception $e) {
    print("Error DB");
    return;    
}
?>