<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo CRUD en PHP</title>
</head>
<body>
    <?php
    include_once 'functions.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["create"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            echo createRecord($name, $email);
        } elseif (isset($_POST["update"])) {
            $id = $_POST["id"];
            $name = $_POST["name"];
            $email = $_POST["email"];
            echo updateRecord($id, $name, $email);
        } elseif (isset($_POST["delete"])) {
            $id = $_POST["id"];
            echo deleteRecord($id);
        }
    }

    $result = readRecords();
    ?>

    <h2>Crear un nuevo registro</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nombre: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit" name="create" value="Crear">
    </form>

    <h2>Registros existentes</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"]. "</td>
                    <td>" . $row["name"]. "</td>
                    <td>" . $row["email"]. "</td>
                    <td>
                        <form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]). "'>
                            <input type='hidden' name='id' value='" . $row["id"]. "'>
                            <input type='text' name='name' value='" . $row["name"]. "'>
                            <input type='email' name='email' value='" . $row["email"]. "'>
                            <input type='submit' name='update' value='Actualizar'>
                            <input type='submit' name='delete' value='Eliminar'>
                        </form>
                    </td>
                </tr>";
            }
        } else {
            echo "No se encontraron registros.";
        }
        ?>
    </table>
</body>
</html>