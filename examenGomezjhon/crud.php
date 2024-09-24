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
    //print('$json');
}

function setData($table, $data)
{
    global $conn;   
    $fields = "";
    $values = "";
    foreach($data as $key => $value)
    {
        $fields = $fields.$key.",";
        $values = $values."\"".$value."\"".",";
    }
    $fields = rtrim($fields,',');
    $values = rtrim($values,',');
    $query = "INSERT INTO $table ($fields) VALUES ($values);";
    print($query);
    //print(json_encode($data));
    try
    {
        $q = mysqli_query($conn, $query);    
    }
    catch(Exception $e)
    {
        print("Error Query Insert");
        return;
    }
    http_response_code(201);
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
function updateData($table, $data, $id)
{
    global $conn;   
    $fields = "";
    foreach($data as $key => $value)
    {
        $fields .= "$key=\"$value\",";
    }
    $fields = rtrim($fields,',');
    $query = "UPDATE $table SET $fields WHERE id = $id";
    print($query); // Puedes eliminar este print una vez verificado
    
    try
    {
        $q = mysqli_query($conn, $query);
        if($q) {
            return "Registro actualizado exitosamente";
        } else {
            return "Error al actualizar el registro";
        }
    }
    catch(Exception $e)
    {
        print("Error Query Update");
        return;
    }
}

?>