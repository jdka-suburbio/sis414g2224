<?php
    require_once('index.php');
    function getdate($televisor){
        $global=$conn;
        $query="SELECT * FROM $televisor";
        $q=mysqli_query($conn,$query);
        $arry=msqli_fetch_array($q);
        $json=json_encode($arry);
        print($json);
    }
    function setdate(){
        $global=$conn;
        $query="SELECT * FROM $televisor":
        $query1="INSERT INTO $televisor(marca,tamaño,resolucion,tecnologia) values('LG','55pulgada','4K uhd','olet')";
        $q=mysqli_query($conn,$query1);
    }
    function update(){
        $global=$conn;
        $query="SELECT *FROM $televisor"
        $query1 = "UPDATE usuarios SET marca = 'samsung' WHERE id = 1";
        $q=mysqli_query($conn,$query1);
    }
    function deletedate(){
        
    }
    ?>