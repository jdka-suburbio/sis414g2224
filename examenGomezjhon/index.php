<?php
require_once(".\crud.php");
getdata('cafetera');
$data = ["id"=>"3", "marca" => "Brasilia", "modelo" => "supercafe" ,"tipo de cafe" => "capsula", "capacidad" => "1.5"];
setdata('cafetera', $data); 
$data = ["id"=>"4", "marca" => "Bra", "modelo" => "nexcafe" ,"tipo de cafe" => "capsula", "capacidad" => "1.7"];
setdata('cafetera', $data); 
?>