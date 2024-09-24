<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario ya ha iniciado sesión
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $loggedin = true;
} else {
    $loggedin = false;
}

// Procesar el inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if ($usuario === 'admin' && $contrasena === 'admin') {
        $_SESSION['loggedin'] = true; // Establecer sesión
        $loggedin = true; // Cambiar estado de sesión
    }
}

// Redirigir a la página de inicio de sesión si no está logueado
if (!$loggedin) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h2>Iniciar Sesión</h2>
        <form action="" method="POST">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit" name="login">Entrar</button>
        </form>
    </body>
    </html>
    <?php
    exit(); 
}

include 'connection.php';

$sql = "SELECT * FROM reloj";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Relojes</title>
</head>
<body>
    <h1> Relojes</h1>

    <h2>Añadir nuevo reloj</h2>
    <form action="crud.php" method="POST">
        <input type="text" name="marca" placeholder="Marca" required>
        <input type="text" name="modelo" placeholder="Modelo" required>
        <input type="text" name="material_correa" placeholder="Material de Correa" required>
        <input type="text" name="resistencia_agua" placeholder="Resistencia al Agua" required>
        <button type="submit" name="add_reloj">Añadir Reloj</button>
    </form>

    <h2>Lista de Relojes</h2>
    <table border="1">
        <tr>
            <th>Cod. Correa</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Material de Correa</th>
            <th>Resistencia al Agua</th>
            <th>Acciones</th>
        </tr>

        <?php if ($result && $result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['cod_correa']; ?></td>
                <td><?php echo $row['marca']; ?></td>
                <td><?php echo $row['modelo']; ?></td>
                <td><?php echo $row['material_correa']; ?></td>
                <td><?php echo $row['resistencia_agua']; ?></td>
                <td>
                    <form action="crud.php" method="POST" style="display:inline-block;">
                        <input type="hidden" name="cod_correa" value="<?php echo $row['cod_correa']; ?>">
                        <input type="text" name="marca" value="<?php echo $row['marca']; ?>" required>
                        <input type="text" name="modelo" value="<?php echo $row['modelo']; ?>" required>
                        <input type="text" name="material_correa" value="<?php echo $row['material_correa']; ?>" required>
                        <input type="text" name="resistencia_agua" value="<?php echo $row['resistencia_agua']; ?>" required>
                        <button type="submit" name="edit_reloj">Editar</button>
                    </form>

                    <form action="crud.php" method="POST" style="display:inline-block;">
                        <input type="hidden" name="cod_correa" value="<?php echo $row['cod_correa']; ?>">
                        <button type="submit" name="delete_reloj">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No hay relojes existentes.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
