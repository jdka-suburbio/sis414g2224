<?php
session_start();

// Cargar preguntas
if (!isset($_SESSION['preguntas'])) {
    $_SESSION['preguntas'] = require 'questions.php';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #4CAF50;
            margin-bottom: 20px;
        }
        .cuestionario {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 0 auto;
            max-width: 600px;
        }
        .pregunta {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            display: block;
            margin: 5px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: background 0.3s;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        label:hover {
            background: #f1f1f1;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Cuestionario</h1>
    <div class="cuestionario">
        <form action="quiz.php" method="POST">
            <?php foreach ($_SESSION['preguntas'] as $index => $pregunta): ?>
                <div class="pregunta">
                    <p><?php echo ($index + 1) . ". " . $pregunta['pregunta']; ?></p>
                    <?php foreach ($pregunta['opciones'] as $key => $opcion): ?>
                        <label>
                            <input type="radio" name="respuestas[<?php echo $index; ?>]" value="<?php echo $key; ?>">
                            <?php echo $key . ") " . $opcion; ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
            <button type="submit">Enviar respuestas</button>
        </form>
    </div>
</body>
</html>