<?php
require_once(".\connection.php");
function getData($table)
{
    global $conn;
    $query = "SELECT * FROM $table";
    $q = mysqli_query($conn, $query);
    $arr = mysqli_fetch_array($q);
    // format data    
    $json = json_encode($arr);
    //print($json);
}

function setData($table, $data)
{
    global $conn;   
    $fields = "";
    $values = "";
    foreach($data as $key => $value)
    {
        $fields .= $fields.$key.",";
        $values .= $values."\"".$value."\"".",";
    }
    $fields = rtrim($fields,'');
    $values = rtrim($values,'');
    $query = "INSERT INTO $table ($fields) VALUES ($values);";
    print($query);
    try
    {
        $q = mysqli_query($conn, $query);  
        if (!$q) {
            throw new Exception("Error en la consulta: " . mysqli_error($conn)); // Mostrar el error de la consulta
        }  
    }
    catch(Exception $e)
    {
        print("Error Query Insert");
        return;
    }
}

function deleteData($table, $id)
{
    global $conn;   
    $query = "DELETE FROM $table WHERE id = $id";
    try
    {
        $q = mysqli_query($conn, $query);    
    }
    catch(Exception $e)
    {
        print("Error Query Delete");
        return;
    }
}
//actualizar
function updateData($table, $data, $id)
{
    global $conn;
    $fields = "";
    foreach($data as $key => $value)
    {
        $fields .= $key."=\"".$value."\",";
    }
    $fields = rtrim($fields, ',');
    $query = "UPDATE $table SET $fields WHERE id = $id";
    print($query);
    
    try
    {
        $q = mysqli_query($conn, $query);
        if(!$q) {
            throw new Exception("Error en la actualización");
        }
    }
    catch(Exception $e)
    {
        print("Error Query Update");
        return;
    }
}
function authenticateUser($usuario, $contraseña) {
    global $conn;

    // Escapar caracteres especiales para evitar inyecciones SQL
    $username = mysqli_real_escape_string($conn, $usuario);
    
    // Obtener el usuario de la base de datos
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        // Verificar si la contraseña es correcta
        if (contraseña_verify($contraseña, $user['contraseña'])) {
            return $user; // Retornar el usuario encontrado
        }
    }

    return false; // Retornar false si no se encontró el usuario o la contraseña es incorrecta
}
?>