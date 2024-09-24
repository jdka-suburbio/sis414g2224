<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Automóvil</title>
</head>
<body>
    <h1>Registro de Automóvil</h1>
    <form action="procesar.php" method="POST">
        <!-- Selección de marca -->
        <select name="marca" required>
            <option value="Toyota">Toyota</option>
            <option value="Honda">Honda</option>
            <option value="Ford">Ford</option>
        </select><br><br>
        
        <!-- Campo para el modelo del automóvil -->
        <textarea name="modelo" placeholder="Modelo" required>Corolla</textarea><br><br>
        
        <!-- Campo para seleccionar el año -->
        <select name="anio" required>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
            <option value="2020">2020</option>
        </select><br><br>
        
        <!-- Selección de tipo de combustible -->
        <select name="combustible" required>
            <option value="Gasolina">Gasolina</option>
            <option value="Diésel">Diésel</option>
            <option value="Eléctrico">Eléctrico</option>
        </select><br><br>
        
        <!-- Botón para enviar -->
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
