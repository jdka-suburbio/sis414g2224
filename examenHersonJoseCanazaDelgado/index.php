<?php
session_start();
require_once(".\\crud.php");

header('Content-Type: application/json');

// Verificar si está autenticado
if (!isset($_SESSION['loggedin'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'admin' && $password == 'admin') {
            $_SESSION['loggedin'] = true;
        } else {
            echo json_encode(["error" => "Usuario o contraseña incorrecta."]);
            exit();
        }
    } else {
        echo json_encode(["error" => "Debe iniciar sesión."]);
        exit();
    }
}

// Procesar las solicitudes CRUD en formato JSON
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Obtener todas las sillas
    getData();
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Leer el cuerpo de la solicitud en formato JSON
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($_GET['id'])) {
        // Si se proporciona un ID, actualizamos
        $id = $_GET['id'];
        updateData($id, $data);
    } else {
        // Si no hay ID, creamos una nueva entrada
        setData($data);
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    // Eliminar una silla
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        deleteData($id);
    } else {
        echo json_encode(["error" => "Debe proporcionar un ID para eliminar"]);
    }
}
?>

