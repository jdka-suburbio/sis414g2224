<?php
include 'connection.php';

if (isset($_POST['add_user'])) {
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $correo = $_POST['correo'];
    $fecha = $_POST['fecha'];
    $codigo = $_POST['codigo'];

    $sql = "INSERT INTO usuarios (Nombre, Sexo, correo, Fecha, Codigo) VALUES ('$nombre', '$sexo', '$correo', '$fecha', '$codigo')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); 
        exit();
    } else {
        echo "Error al añadir usuario: " . $conn->error;
    }
}

if (isset($_POST['edit_user'])) {
    $id_usuario = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $correo = $_POST['correo'];
    $fecha = $_POST['fecha'];
    $codigo = $_POST['codigo'];

    $sql = "UPDATE usuarios SET Nombre='$nombre', Sexo='$sexo', correo='$correo', Fecha='$fecha', Codigo='$codigo' WHERE id_usuario=$id_usuario";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); 
        exit();
    } else {
        echo "Error al actualizar usuario: " . $conn->error;
    }
}

if (isset($_POST['delete_user'])) {
    $id_usuario = $_POST['id_usuario'];

    $sql = "DELETE FROM usuarios WHERE id_usuario=$id_usuario";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); 
        exit();
    } else {
        echo "Error al eliminar usuario: " . $conn->error;
    }
}

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>
