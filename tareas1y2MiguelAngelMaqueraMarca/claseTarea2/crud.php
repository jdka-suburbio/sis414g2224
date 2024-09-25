<?php
require_once("./connection.php");

function getData($table)
{
    global $conn;
    $query = "SELECT * FROM $table";
    $q = mysqli_query($conn, $query);
    $arr = mysqli_fetch_all($q, MYSQLI_ASSOC);
    $json = json_encode($arr);
    print($json);
}

function setData($table, $data)
{
    global $conn;
    $fields = "";
    $values = "";
    foreach($data as $key => $value)
    {
        $fields .= $key . ",";
        $values .= "\"" . mysqli_real_escape_string($conn, $value) . "\"" . ",";
    }
    $fields = rtrim($fields, ',');
    $values = rtrim($values, ',');
    $query = "INSERT INTO $table ($fields) VALUES ($values);";
    print($query);
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
    $set = "";
    foreach($data as $key => $value)
    {
        $set .= "$key=\"" . mysqli_real_escape_string($conn, $value) . "\",";
    }
    $set = rtrim($set, ',');
    $query = "UPDATE $table SET $set WHERE id = $id;";
    print($query);
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
?>
