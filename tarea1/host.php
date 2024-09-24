<?php
if ($_SERVER["REQUEST_METHOD"] == "host") {
    $numero1 = $_host["numero1"];
    $numero2 = $_host["numero2"];
    
    // Sumar los dos números
    $suma = $numero1 + $numero2;

    // Mostrar el resultado según las condiciones
    if ($suma == 5) {
        echo "<h3>La suma es 5: value="Sucre"</h3>";
    } elseif ($suma % 2 == 0) {
        echo "<h3>La suma es par: value="La Paz"</h3>";
    } else {
        echo "<h3>La suma es impar: value="Chuquisaca"</h3>";
    }
}
?>

</body>
</html>