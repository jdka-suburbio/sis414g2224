<?php
session_start();
require_once("./crud.php");

var_dump($_SESSION); // Para depurar

if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {
    $table = "Batería";
    $data = getData($table);

    if (isset($_POST["action"])) {
        $action = $_POST["action"];
        if ($action == "create") {
            $newData = [
                "Tipo" => $_POST["Tipo"],
                "Capacidad" => $_POST["Capacidad"],
                "Voltaje" => $_POST["Voltaje"],
                "Uso" => $_POST["Uso"]
            ];
            $message = setData($table, $newData);
        } elseif ($action == "update") {
            $id = $_POST["id"];
            $updateData = [
                "Tipo" => $_POST["Tipo"],
                "Capacidad" => $_POST["Capacidad"],
                "Voltaje" => $_POST["Voltaje"],
                "Uso" => $_POST["Uso"]
            ];
            $condition = "id=$id";
            $message = updateData($table, $updateData, $condition);
            $data = getData($table);
        } elseif ($action == "delete") {
            $id = $_POST["id"];
            $condition = "id=$id";
            $message = deleteData($table, $condition);
            $data = getData($table);
        }
    }
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = isset($_POST["username"]) ? $_POST["username"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";

        if (login($username, $password)) {
            $_SESSION["loggedIn"] = true;
            header("Location: " . $_SERVER["PHP_SELF"]);
            exit;
        } else {
            $message = "Usuario o contraseña incorrectos.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Baterías</title>
</head>
<body>
    <h1>Gestión de Baterías</h1>

    <?php if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true) { ?>
    <h2>Inicio de sesión</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="username">
        Password: <input type="password" name="password">
        <input type="submit" name="submit" value="Iniciar sesión">
    </form>
    <?php } else { ?>
    <h2>Tabla de Baterías</h2>
    <?php if (isset($message)) { ?>
        <p><?php echo $message; ?></p>
    <?php } ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Capacidad</th>
            <th>Voltaje</th>
            <th>Uso</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($data as $row) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["Tipo"]; ?></td>
            <td><?php echo $row["Capacidad"]; ?></td>
            <td><?php echo $row["Voltaje"]; ?></td>
            <td><?php echo $row["Uso"]; ?></td>
            <td>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                    <input type="submit" name="submit" value="Modificar">
                </form>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                    <input type="submit" name="submit" value="Eliminar">
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
    <h2>Crear nueva batería</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="hidden" name="action" value="create">
        Tipo: <input type="text" name="Tipo">
        Capacidad: <input type="text" name="Capacidad">
        Voltaje: <input type="text" name="Voltaje">
        Uso: <input type="text" name="Uso">
        <input type="submit" name="submit" value="Crear">
    </form>

    <a href="?logout=true">Cerrar sesión</a>
    <?php } ?>
</body>
</html>