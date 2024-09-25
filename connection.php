<?php
$host = "sql106.ezyro.com";
$userDB = "ezyro_37386388";
$passDB = "dd30f7666b7";
try
{
    $conn = mysqli_connect($host, $userDB, $passDB);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    echo "Conexión exitosa";

    $dbName = "ezyro_37386388_library";
    try
    {
        $db = mysqli_select_db($conn, $dbName);
        echo "Base de datos seleccionada correctamente";
    }
    catch(Exception $e)
    {
        print("Error DB: " . $e->getMessage());
        return;    
    }
}
catch(Exception $e)
{
    print("Error conexión: " . $e->getMessage());
    return;
}

?>