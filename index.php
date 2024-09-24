<?php
require_once("crud.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['material']) && isset($_POST['modelo']) && isset($_POST['almacenamiento']) && isset($_POST['sistema_operativo'])) {
        $material = $_POST['material'];
        $modelo = $_POST['modelo'];
        $almacenamiento = $_POST['almacenamiento'];
        $sistema_operativo = $_POST['sistema_operativo'];
        setData($material, $modelo, $almacenamiento, $sistema_operativo);
    }
}
$data = getData();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Smartphones</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Gestión de Smartphones</h1>
<form method="POST" action="">
    <label for="material">Material:</label>
    <input type="text" name="material" required>
    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" required>
    <label for="almacenamiento">Almacenamiento:</label>
    <input type="text" name="almacenamiento" required>
    <label for="sistema_operativo">Sistema Operativo:</label>
    <input type="text" name="sistema_operativo" required>
    <input type="submit" value="Agregar Smartphone">
</form>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Material</th>
            <th>Modelo</th>
            <th>Almacenamiento</th>
            <th>Sistema Operativo</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $row): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['material']; ?></td>
                <td><?php echo $row['modelo']; ?></td>
                <td><?php echo $row['almacenamiento']; ?></td>
                <td><?php echo $row['sistema_operativo']; ?></td>
                <td><a href="index.php?action=delete&id=<?php echo $row['id']; ?>">Eliminar</a></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No hay registros en la base de datos.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</body>
</html>
<?php
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteData($id);
    header("Location: index.php");
    exit;
}
?>
