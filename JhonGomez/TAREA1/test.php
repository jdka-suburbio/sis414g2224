/*<?php 
     $puntos= 0;
   
  /*  if(isset($_POST["numero"])){
        $varR= $_POST["numero"];
     if($varR==10){
        $puntos=$puntos+10;
     }
     $varC =$_POST["capital"];
     if($varR==10){
        $puntos=$puntos+10;
     }
     $varD =$_POST["mujer"];
     if($varR==10){
        $puntos=$puntos+10;
     }
     $varE =$_POST["1826"];
     if($varR==10){
        $puntos=$puntos+10;
   }
   $varF =$_POST["19deabril"];
   if($varR==10){
      $puntos=$puntos+10;
 }
 $varT =$_POST["8"];
 if($varR==10){
    $puntos=$puntos+10;
}
$varA =$_POST["madrid"];
 if($varR==10){
    $puntos=$puntos+10;
}
$varQ =$_POST["numero1"];
 if($varR==10){
    $puntos=$puntos+10;
}
$vark =$_POST["rojo,amarillo,azul"];
 if($varR==10){
    $puntos=$puntos+10;
}


     
     
     print "nota final".$puntos;
     }
     else{
        print"error no exiten datos";
     }
    
    
?>   
*/



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (isset($_POST['q1']) && $_POST['q1'] == '4') {
        $puntos += 10;
    }

    
    if (isset($_POST['q2']) && $_POST['q2'] == 'php') {
        $puntos += 10;
    }

    
    if (isset($_POST['q3']) && $_POST['q3'] == 'sucre') {
        $puntos += 10;
    }
    if (isset($_POST['q4']) && $_POST['q4'] == 'marzo') {
      $puntos += 10;
  }
    if (isset($_POST['q5']) && $_POST['q5'] == '1826') {
   $puntos += 10;
}
   if (isset($_POST['q6']) && $_POST['q6'] == 'abril') {
   $puntos += 10;
}
   if (isset($_POST['q7']) && $_POST['q7'] == '8') {
   $puntos += 10;
}
   if (isset($_POST['q8']) && $_POST['q8'] == '25') {
   $puntos += 10;
}
if (isset($_POST['q9']) && $_POST['q9'] == 'rojoamarilloazul') {
   $puntos += 10;
}
if (isset($_POST['q10']) && $_POST['q10'] == '365') {
   $puntos += 10;
}
    print "nota final".$puntos;
     }
     else{
        print"error no exiten datos";
     }

?>  