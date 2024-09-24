<?php
require_once('./crud.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['create'])) {
        createRefrigerador($_POST['marca'], $_POST['modelo']);
    } elseif (isset($_POST['update'])) {
        updateRefrigerador($_POST['id'], $_POST['marca'], $_POST['modelo']);
    } elseif (isset($_POST['delete'])) {
        deleteRefrigerador($_POST['id']);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refrigeradores</title>
</head>
<body>
    <h1>Refrigeradores</h1>

    <h2>Agregar Refrigerador</h2>
    <form method="post">
        <input type="text" name="marca" placeholder="Marca" required>
        <input type="text" name="modelo" placeholder="Modelo" required>
        <button type="submit" name="create">Agregar</button>
    </form>

    <h2>Lista de Refrigeradores</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($refrigeradores as $refrigerador): ?>
        <tr>
            <td><?php echo $refrigerador['id']; ?></td>
            <td><?php echo $refrigerador['marca']; ?></td>
            <td><?php echo $refrigerador['modelo']; ?></td>
            <td>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $refrigerador['id']; ?>">
                    <input type="text" name="marca" placeholder="Nueva Marca" required>
                    <input type="text" name="modelo" placeholder="Nuevo Modelo" required>
                    <button type="submit" name="update">Actualizar</button>
                </form>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $refrigerador['id']; ?>">
                    <button type="submit" name="delete">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
