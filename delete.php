<?php
require_once("crud.php");

$id = $_GET["id"];

deleteData('books', $id);
?>