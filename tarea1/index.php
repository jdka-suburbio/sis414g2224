<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
</head>
<body>
    <br>    
    <h2>Formulario en PHP</h2>
    <form action="host.php" method="">
    <label for="numero1">Número 1:</label>
    <input type="number" id="numero1" name="numero1" required>

    <label for="numero2">Número 2:</label>
    <input type="number" id="numero2" name="numero2" required>
    </br>
    <br>
    <label>En Bolivia :</label> 
    <select name="capital">  
    <option value="l">La Paz</option>
    <option value="s">Sucre</option>
    <option value="c">Chuquisaca</option>
    </select>
    <br>
    <br>
    <label>Es :</label> 
    <select name="capital">  
    <option value="l">Cede de Gobierno</option>
    <option value="s">Capital</option>
    <option value="c">Departamento</option>
    </select>
    <br>
    <br>
    <input type="submit" name="submit" value="Respuesta">
    </form>
    </br>
</body>
</html>
