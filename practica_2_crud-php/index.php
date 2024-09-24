<?php
include 'crud.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Usuarios</title>
</head>
<body>
    <h1> Usuarios</h1>

    <h2>Añadir nuevo usuario</h2>
    <form action="crud.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="sexo" placeholder="Sexo" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="date" name="fecha" placeholder="Fecha" required>
        <input type="text" name="codigo" placeholder="Código" required>
        <button type="submit" name="add_user">Añadir Usuario</button>
    </form>

    <h2>Lista de Usuarios</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Correo</th>
            <th>Fecha</th>
            <th>Código</th>
            <th>Acciones</th>
        </tr>

        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id_usuario']; ?></td>
                <td><?php echo $row['Nombre']; ?></td>
                <td><?php echo $row['Sexo']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['Fecha']; ?></td>
                <td><?php echo $row['Codigo']; ?></td>
                <td>
                    <form action="crud.php" method="POST" style="display:inline-block;">
                        <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']; ?>">
                        <input type="text" name="nombre" value="<?php echo $row['Nombre']; ?>" required>
                        <input type="text" name="sexo" value="<?php echo $row['Sexo']; ?>" required>
                        <input type="email" name="correo" value="<?php echo $row['correo']; ?>" required>
                        <input type="date" name="fecha" value="<?php echo $row['Fecha']; ?>" required>
                        <input type="text" name="codigo" value="<?php echo $row['Codigo']; ?>" required>
                        <button type="submit" name="edit_user">Editar</button>
                    </form>

                    <form action="crud.php" method="POST" style="display:inline-block;">
                        <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']; ?>">
                        <button type="submit" name="delete_user">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">No hay usuarios existentes.</td>
            </tr>
        <?php endif; ?>
    </table>
    <p>Nombre: Mario Nicolás Javier Vargas </p>
    <p>CI: 8617274</p>
    <p>RU: 103449</p>


</body>
</html>
