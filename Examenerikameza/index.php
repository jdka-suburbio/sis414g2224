<?php
require_once(".\crud.php");
getdata('zapatos');
$data = ["marca" => "nike", "modelo" => "AirMax", "tamaño" => "42"];
setdata('personas', $data);


?>