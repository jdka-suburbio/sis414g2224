<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados del Cuestionario</title>
</head>
<body>
    <h1>Resultados del Cuestionario</h1>
    <?php
    $respuestas = [
        'math1' => 4,
        'geo1' => 'Salar de Uyuni, Bolivia',
        'info1' => 'Gestionar los recursos del sistema',
        'math2' => 19,
        'geo2' => 'Cochabamba',
        'info2' => 'Un conjunto de instrucciones para resolver un problema',
        'math3' => 40,
        'geo3' => 'Río Mamoré',
        'info3' => 'Un programa que se replica y causa daño',
        'math4' => 11,
        'geo4' => 'Potosí',
        'info4' => 'Hardware es la parte física, software es la parte lógica',
        'math5' => 16,
        'geo5' => 'Nevado Sajama',
        'info5' => 'Un programa para navegar por internet',
        'math6' => 4,
        'geo6' => 'Boliviano',
        'info6' => 'Un sistema para almacenar y gestionar datos',
        'math7' => 27,
        'geo7' => 'Español y otros 36 idiomas oficiales'
    ];

    foreach ($_POST as $pregunta => $respuesta) {
        echo "<p><strong>$pregunta:</strong> $respuesta - ";
        if ($respuesta == $respuestas[$pregunta]) {
            echo "Correcto</p>";
        } else {
            echo "Incorrecto. La respuesta correcta es: " . $respuestas[$pregunta] . "</p>";
        }
    }
    ?>
</body>
</html>
