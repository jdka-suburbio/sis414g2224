<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica N1 - SIS414 G2</title>
</head>
<body>
    <!-- Verificamos si el formulario ha sido enviado -->
    <?php
    $respuestas_correctas = array(
        "q1" => "b", 
        "q2" => "1825-08-06", 
        "q3" => "ESTADO PLURINACIONAL DE BOLIVIA", 
        "q4" => "b", 
        "q5" => array("Madera", "De La Plata"), 
        "q6" => "SAJAMA", 
        "q7" => "5", 
        "q8" => "c", 
        "q9" => "LIDIA GUEILER", 
        "q10" => "VICTOR PAZ ESTENSSORO"
    );
    $puntuacion = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($respuestas_correctas as $pregunta => $respuesta_correcta) {
            if (isset($_POST[$pregunta]) && $_POST[$pregunta] == $respuesta_correcta) {
                $puntuacion += 10; // Sumar 10 puntos por cada respuesta correcta
            }
        }
        echo "<h2>Tu puntuación final es: $puntuacion / 100</h2>";
    }
    ?>

    <!-- Formulario que envía los datos a la misma página -->
    <form method="POST" action="">
    <h1>CULTURA GENERAL: BOLIVIA</h1>
        <ol>
            <li>
                <label for="q1" class="question">¿Cuál es la extensión territorial de Bolivia?</label><br>
                <input type="radio" name="q1" id="q1-1" value="a" class="checkbox">
                <!-- este es el correcto -->
                <label for="q1-1">1.098.581 km<sup>2</sup></label><br>
                <input type="radio" name="q1" id="q1-2" value="b" class="checkbox">
                <label for="q1-2">1.098.582 km<sup>2</sup></label><br>
                <input type="radio" name="q1" id="q1-3" value="c" class="checkbox">
                <label for="q1-3">1.000.581 km<sup>2</sup></label><br>
                <input type="radio" name="q1" id="q1-4" value="d" class="checkbox">
                <label for="q1-4">1.098.682 km<sup>2</sup></label><br>
            </li>
            <li>
                <label for="q2" class="question">¿Cuál es el año de independencia de Bolivia?</label><br>
                <input type="date" name="q2" id="q2">
            </li>
            <li>
                <label for="q3" class="question">¿Cuál es el nombre completo de Bolivia?</label><br>
                <input type="text" name="q3" id="q3" class="textfield">
            </li>
            <li>
                <label for="q4" class="question">¿Cuál fue el nombre con el que nació Bolivia?</label><br>
                <input type="radio" name="q4" id="q4-1" value="a" class="checkbox">
                <label for="q4-1">República de Bolivia</label><br>
                <input type="radio" name="q4" id="q4-2" value="b" class="checkbox">
                <label for="q4-2">República de Bolivar</label><br>
                <input type="radio" name="q4" id="q4-3" value="c" class="checkbox">
                <label for="q4-3">República Bolivariana</label><br>
                <input type="radio" name="q4" id="q4-4" value="d" class="checkbox">
                <label for="q4-4">Estado Plurinacional de Bolivia</label><br>
            </li>
            <li>
                <label for="q5" class="question">Marque en las casillas los ríos pertenecientes a Bolivia</label><br>
                <input type="checkbox" name="q5" id="q5" value="Siete Puntas" class="checkbox">
                <label for="q5-1">Río Siete Puntas</label><br>
                <input type="checkbox" name="q5" id="q5" value="Madera" class="checkbox">
                <label for="q5-1">Río Madera</label><br>
                <input type="checkbox" name="q5" id="q5" value="De La Plata" class="checkbox">
                <label for="q5-1">Río de la Plata</label><br>
                <input type="checkbox" name="q5" id="q5" value="Ninguno" class="checkbox">
                <label for="q5-1">Ninguno</label><br>
            </li>
            <li>
                <label for="q6" class="question">¿Cuál es montaña más alta de Bolivia?</label><br>
                <p class="hint">Solo escribir el nombre</p>
                <input type="text" name="q6" id="q6" class="textfield">
            </li>
            <li>
                <label for="q7" class="question">¿Con cuántos departamentos nació Bolivia?</label><br>
                <input type="number" name="q7" id="q7" class="textfield">
            </li>
            <li>
                <label for="q8" class="question">La primera bandera tenía los colores rojo, verde y rojo sucesivamente. ¿Cúantas estrellas tenía en el medio?</label><br>
                <input type="radio" name="q8" id="q8-1" value="a" class="checkbox">
                <label for="q8-1">3</label><br>
                <input type="radio" name="q8" id="q8-2" value="b" class="checkbox">
                <label for="q8-2">9</label><br>
                <input type="radio" name="q8" id="q8-3" value="c" class="checkbox">
                <label for="q8-3">5</label><br>
                <input type="radio" name="q8" id="q8-4" value="d" class="checkbox">
                <label for="q8-4">No tenía</label><br>
            </li>
            <li>
                <label for="q9" class="question">¿Quién fue la primera mujer presidente de Bolivia?</label><br>
                <p class="hint">Escribir el nombre y apellido paterno de la misma</p>
                <input type="" name="q9" id="q9" class="textfield">
            </li>
            <li>
                <label for="q10" class="question">¿Qué presidente realizó la reforma agraria de 1953?</label><br>
                <p class="hint">Escribir el nombre completo</p>
                <input type="text" name="q10" id="q10" class="textfield">
            </li>
        </ol>
        <div id="submit">
            <button>Enviar</button>
        </div>
    </form>
</body>
</html>