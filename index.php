<?php
require_once(".\crud.php");
getdata('personas');
//INSERTAR PERSONA****
$data = ["ci" => "8245668", "nombres" => "Pedro", "apellidos" => "Mamani"];
setdata('personas', $data);
//INSERTAR PRODUCTO
$dataProduto = ["nombre" => "Monitor", "precio" => 200];
setdata('producto', $dataProduto);

// *********TAREA **************Modificar el nombre y apellido del producto con ci *********TAREA**********************-----------

$updateData = ["nombres" => "Juan", "apellidos" => "Perez"];
updateData('personas', $updateData, "ci='8245668'");

// *********TAREA **************Modificar el nombre y precio del producto con id *********TAREA**********************-----------
$updateDataProducto = ["nombre" => "tv","precio" => 250];
updateData('producto', $updateDataProducto, "id=1");

//*******ELIMINAR PERSONA********
deleteDataPERSONAS('personas', '8245668');
 //**********ELIMINAR PRODUCTO***
deleteDataPRODUCTO('producto',1 );
?>