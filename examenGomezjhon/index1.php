<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador</title>
</head>
<body>
    <h2>Login Administrador</h2>
    <form action="crud.php" method="POST">
        <label for="name">Nombre de Usuario:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>