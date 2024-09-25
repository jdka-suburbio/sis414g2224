<?php
require_once("connection.php");

function getData($table)
{
    global $conn;
    $query = "SELECT * FROM $table";
    $q = mysqli_query($conn, $query);
    $result = array();
    while ($row = mysqli_fetch_assoc($q)) {
        $result[] = $row;
    }
    return $result;
}

function setData($table, $data)
{
    global $conn;   
    $fields = "";
    $values = "";
    foreach($data as $key => $value)
    {
        $fields .= $key.",";
        $values .= "\"" . $value . "\",";
    }
    $fields = rtrim($fields, ',');
    $values = rtrim($values, ',');
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

function updateData($table, $id, $data)
{
    global $conn;
    $updateFields = "";
    foreach ($data as $key => $value) {
        $updateFields .= $key . "=\"" . $value . "\",";
    }
    $updateFields = rtrim($updateFields, ',');
    $query = "UPDATE $table SET $updateFields WHERE id = $id";
    try {
        $q = mysqli_query($conn, $query);
    } catch (Exception $e) {
        print("Error Query Update");
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
?>