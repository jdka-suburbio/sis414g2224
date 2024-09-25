<?php
require_once(".\crud.php");
require_once(".\connection.php");

getData('perfume');
$data = ["Marca:" => "chanel", "Nombre:" => "No. 5", "Notas" => "floral, vainilla", "tamaño:" => "100ml"];
setData('perfume', $data);

?>
