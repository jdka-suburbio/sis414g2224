<?php
require_once("./crud.php");

getData('personas');

$data = ["ci" => "8245667", "nombres" => "Pedro", "apellidos" => "Mamani"];
setData('personas', $data);

$dataProducto = ["nombre" => "Monitor", "precio" => 200];
setData('producto', $dataProducto);

deleteData('producto', 2);
$updateData = ["nombres" => "Juan", "apellidos" => "Pérez"];
updateData('personas', $updateData, 1); 
?>
