
<!DOCTYPE html>
<form method="post" action="test.php">

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas sobre Bolivia - Mejorado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .question {
            margin-bottom: 20px;
        }
        input[type="radio"], input[type="checkbox"] {
            margin-right: 10px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .text-answer {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
        }
        .slider {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Preguntas sobre Bolivia</h1>
        <form method="post" action="test.php">

            <div class="question">
                <p>1. ¿Cuál es la capital de Bolivia?</p>
                <input type="radio" name="q1" value="0"> Santa Cruz<br>
                <input type="radio" name="q1" value="0"> Cochabamba<br>
                <input type="radio" name="q1" value="1"> Sucre<br>
                <input type="radio" name="q1" value="0"> La Paz<br>
            </div>

            <div class="question">
                <p>2. Escribe el nombre del río más largo de Bolivia:</p>
                <input type="text" class="text-answer" name="q2">
            </div>

            <div class="question">
                <p>3. ¿Cuál es el plato tradicional de Potosi</p>
                <select name="q3">
                    <option value="0">Ceviche</option>
                    <option value="1">Salteñas</option>
                    <option value="0">Tamales</option>
                    <option value="0">Arepas</option>
                </select>
            </div>

            <div class="question">
                <p>4. Selecciona todos los idiomas indígenas que se hablan en Bolivia:</p>
                <input type="checkbox" name="q4[]" value="1"> Quechua<br>
                <input type="checkbox" name="q4[]" value="1"> Aymara<br>
                <input type="checkbox" name="q4[]" value="0"> Nahuatl<br>
                <input type="checkbox" name="q4[]" value="0"> Mapudungun<br>
            </div>

            <div class="question">
                <p>5. ¿En qué año se fundó la ciudad de La Paz?</p>
                <input type="number" name="q5" min="1500" max="1600">
            </div>

            <div class="question">
                <p>6. ¿Qué tan satisfecho estás con tu conocimiento sobre Bolivia? (1-10)</p>
                <input type="range" name="q6" min="1" max="10" class="slider">
            </div>

            <div class="question">
                <p>7. ¿Cuál es la montaña más alta de Bolivia?</p>
                <input type="radio" name="q7" value="1"> Sajama<br>
                <input type="radio" name="q7" value="0"> Illimani<br>
                <input type="radio" name="q7" value="0"> Huayna Potosí<br>
            </div>

            <div class="question">
                <p>8. ¿Qué famoso evento cultural se celebra en Oruro?</p>
                <input type="text" class="text-answer" name="q8">
            </div>

            <div class="question">
                <p>9. ¿Cuál es el principal recurso mineral exportado por Bolivia?</p>
                <select name="q9">
                    <option value="1">Estaño</option>
                    <option value="0">Oro</option>
                    <option value="0">Plata</option>
                    <option value="0">Zinc</option>
                </select>
            </div>

            <div class="question">
                <p>10. ¿Cuál es el nombre del famoso desfile que se realiza en Santa Cruz de la Sierra?</p>
                <input type="radio" name="q10" value="0"> Fiesta de la Virgen de Cotoca<br>
                <input type="radio" name="q10" value="0"> Festival del Oriente<br>
                <input type="radio" name="q10" value="1"> Carnaval Cruceño<br>
            </div>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
