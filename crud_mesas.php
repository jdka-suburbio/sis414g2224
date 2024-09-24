<?php
$host = 'localhost';
$db = 'mesa';
$user = 'root'; 
$pass = ''; 

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

function getData($conn) {
    $result = $conn->query("SELECT * FROM mesas");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function setData($conn, $material, $dimensiones, $estilo, $color) {
    $stmt = $conn->prepare("INSERT INTO mesas (material, dimensiones, estilo, color) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $material, $dimensiones, $estilo, $color);
    $stmt->execute();
    $stmt->close();
}

function deleteData($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM mesas WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['setData'])) {
        setData($conn, $_POST['material'], $_POST['dimensiones'], $_POST['estilo'], $_POST['color']);
    } elseif (isset($_POST['deleteData'])) {
        deleteData($conn, $_POST['id']);
    }
}

$mesas = getData($conn);
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Mesas</title>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
            float: left;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .eliminar {
            margin-left: 20px;
            float: left;
        }
    </style>
</head>
<body>
    <h1>Gestión de Mesas</h1>

    <h2>Agregar Mesa</h2>
    <form method="POST">
        <input type="text" name="material" placeholder="Material" required>
        <input type="text" name="dimensiones" placeholder="Dimensiones (cm)" required>
        <input type="text" name="estilo" placeholder="Estilo" required>
        <input type="text" name="color" placeholder="Color" required>
        <button type="submit" name="setData">Agregar</button>
    </form>

    <h2>Mesas Actuales</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Material</th>
                <th>Dimensiones (cm)</th>
                <th>Estilo</th>
                <th>Color</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mesas as $mesa): ?>
                <tr>
                    <td><?php echo $mesa['id']; ?></td>
                    <td><?php echo $mesa['material']; ?></td>
                    <td><?php echo $mesa['dimensiones']; ?></td>
                    <td><?php echo $mesa['estilo']; ?></td>
                    <td><?php echo $mesa['color']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="eliminar">
        <h2>Eliminar Mesa</h2>
        <form method="POST">
            <label for="id">ID de la mesa a eliminar:</label>
            <input type="number" name="id" placeholder="ID" required>
            <button type="submit" name="deleteData">Eliminar</button>
        </form>
    </div>
</body>
</html>
