<?php
require_once(".\connection.php");

function getData($table)
{
    global $conn;
    $query = "SELECT * FROM $table";
    $q = mysqli_query($conn, $query);
    $arr = mysqli_fetch_array($q);
    $json = json_encode($arr);
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
    try
    {
        $q = mysqli_query($conn, $query);    
    }
    catch(Exception $e)
    {
        print("Error Query Insert");
        return;
    }
}
// **TAREA****TAREA****TAREA****TAREA****TAREA****TAREA****TAREA****TAREA**
function updateData($table, $data, $condition)
{
    global $conn;
    $updateFields = "";
    foreach($data as $key => $value)
    {
        $updateFields .= "$key=\"$value\",";
    }
    $updateFields = rtrim($updateFields, ",");
    $query = "UPDATE $table SET $updateFields WHERE $condition";
    try
    {
        $q = mysqli_query($conn, $query);
    }
    catch(Exception $e)
    {
        print("Error Query Update");
        return;
    }
}

function deleteDataPERSONAS($table, $id)
{
    global $conn;   
    $query = "DELETE FROM $table WHERE ci = $id";
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
function deleteDataPRODUCTO($table, $id)
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

?>