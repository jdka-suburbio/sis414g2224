<?php
require_once(".\crud.php");
getdata('personas');
$data = ["ci" => "8245667", "nombres" => "Pedro", "apellidos" => "Mamani"];
setdata('personas', $data);

$dataProduto = ["nombre" => "Monitor", "precio" => 200];
setdata('producto', $dataProduto);

deleteData('producto', 2);

?>