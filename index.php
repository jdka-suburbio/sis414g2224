<?php
$servidor   = 'localhost';
$usuario    = 'root';
$contrasena = '';
$conn=mysqliconnect($resvidor,$usuario,$contrasena);
if(!$conn){
    print("conexion exitosa");
}else{
    print("conexion denegada");
}
$bdname = 'test';
$BD=mysqli_select_db($conn,$bdname);
if(!$BD){
    print("conectado");
}else{
    print("desconectado");
}
?>