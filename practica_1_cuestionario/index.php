<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario de Cultura General</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        ol {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        li {
            margin-bottom: 15px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .puntaje {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>

<h1>Cuestionario de Cultura General</h1>

<form method="POST" action="">

    <ol>
        <li>
            <h4>¿Cuál es la capital de Bolivia?</h4>
            <input type="radio" name="pregunta1" value="10">Sucre <br>
            <input type="radio" name="pregunta1" value="0">La Paz <br>
            <input type="radio" name="pregunta1" value="0">Santa Cruz <br>
        </li>

        <li>
            <h4>¿Cuál es el río más largo del mundo?</h4>
            <select name="pregunta2">
                <option value="10">Amazonas</option>
                <option value="0">Nilo</option>
                <option value="0">Yangtsé</option>
            </select>
        </li>

        <li>
            <h4>Complete la oración</h4>
            <p>El lago <input type="text" name="pregunta3"> es el lago navegable más alto del mundo</p>
        </li>

        <li>
            <h4>¿Cuál es la fórmula química del agua?</h4>
            <input type="radio" name="pregunta4" value="0">HO <br>
            <input type="radio" name="pregunta4" value="10">H<sub>2</sub>O <br>
            <input type="radio" name="pregunta4" value="0">HO2
        </li>

        <li>
            <h4>¿En qué departamento se encuentra el Cerro Rico?</h4>
            <select name="pregunta5">
                <option value="0">Oruro</option>
                <option value="0">La Paz</option>
                <option value="10">Potosí</option>
            </select>
        </li>

        <li>
            <h4>¿Selecciona las provincias que no existían cuando nació Bolivia</h4>
            <input type="checkbox" name="pregunta6[]" value="0">Potosí <br>
            <input type="checkbox" name="pregunta6[]" value="2">Tarija <br>
            <input type="checkbox" name="pregunta6[]" value="2">Chuquisaca <br>
            <input type="checkbox" name="pregunta6[]" value="2">Beni <br>
            <input type="checkbox" name="pregunta6[]" value="0">Charcas <br>
            <input type="checkbox" name="pregunta6[]" value="2">Pando <br>
            <input type="checkbox" name="pregunta6[]" value="2">Oruro
        </li>

        <li>
            <h4>¿Cuál es la fecha exacta en la que Bolivia pasó a ser un estado Plurinacional?</h4>
            <input type="date" name="pregunta7">
        </li>

        <li>
            <h4>¿Quién fue el primer presidente de Bolivia?</h4>
            <input type="radio" name="pregunta8" value="0">Antonio José de Sucre <br>
            <input type="radio" name="pregunta8" value="10">Simón Bolivar <br>
            <input type="radio" name="pregunta8" value="0">Andrés de Santa Cruz <br>
            <input type="radio" name="pregunta8" value="0">José Ballivián
        </li>

        <li>
            <h4>En Bolivia existen <input type="number" name="pregunta9" min="0" max="50"> pueblos indígenas reconocidos</h4>
        </li>

        <li>
            <h4>¿Cuáles eran los colores de la primera bandera de Bolivia?</h4>
            <input type="checkbox" name="pregunta10[]" value="Rojo">Rojo <br>
            <input type="checkbox" name="pregunta10[]" value="Amarillo">Amarillo <br>
            <input type="checkbox" name="pregunta10[]" value="Verde">Verde <br>
            <input type="checkbox" name="pregunta10[]" value="Blanco">Blanco
        </li>
    </ol>

    <button type="submit">Enviar</button>

</form>

<?php
$puntaje = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['pregunta1'])) {
        $puntaje += intval($_POST['pregunta1']);
    }

    if (isset($_POST['pregunta2'])) {
        $puntaje += intval($_POST['pregunta2']);
    }

    if (isset($_POST['pregunta3']) && strtolower(trim($_POST['pregunta3'])) == "titicaca") {
        $puntaje += 10;
    }

    if (isset($_POST['pregunta4'])) {
        $puntaje += intval($_POST['pregunta4']);
    }

    if (isset($_POST['pregunta5'])) {
        $puntaje += intval($_POST['pregunta5']);
    }

    if (isset($_POST['pregunta6'])) {
        foreach ($_POST['pregunta6'] as $valor) {
            $puntaje += intval($valor);
        }
    }

    if (isset($_POST['pregunta7']) && $_POST['pregunta7'] == "2010-01-22") {
        $puntaje += 10;
    }

    if (isset($_POST['pregunta8'])) {
        $puntaje += intval($_POST['pregunta8']);
    }

    if (isset($_POST['pregunta9']) && intval($_POST['pregunta9']) == 36) {
        $puntaje += 10;
    }

    $colores_correctos = ['Rojo', 'Verde'];
    $colores_seleccionados = $_POST['pregunta10'] ?? [];
    if (array_intersect($colores_correctos, $colores_seleccionados) == $colores_correctos) {
        $puntaje += 10;
    }

    echo "<div class='puntaje'>Puntaje: $puntaje</div>";
}
?>

</body>
</html>
