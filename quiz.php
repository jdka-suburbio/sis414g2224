<?php
session_start();

// Cargar preguntas
$_SESSION['preguntas'] = require 'questions.php';

// Procesar las respuestas
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $respuestas_usuario = $_POST['respuestas'];
    $puntos = 0;

    foreach ($_SESSION['preguntas'] as $index => $pregunta) {
        if (isset($respuestas_usuario[$index]) && $respuestas_usuario[$index] == $pregunta['respuesta_correcta']) {
            $puntos += 10; // Sumar 10 puntos por respuesta correcta
        }
    }

    echo "<h2>Resultado:</h2>";
    echo "Has obtenido $puntos puntos.";
    session_destroy(); // Limpiar la sesión después de mostrar el resultado
    exit;
}
?>