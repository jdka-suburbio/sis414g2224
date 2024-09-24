<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $altura = $_POST['altura'];
    $tipo = $_POST['tipo'];
    $riego = $_POST['riego'];

    $stmt = $pdo->prepare("INSERT INTO plantas (nombre, altura, tipo, riego) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nombre, $altura, $tipo, $riego]);
    
    header("Location: index.php");
    exit();
}

function renderForm() {
    $html = '<h1>Añadir Planta</h1>';
    $html .= '<form method="POST">';
    $html .= '<label for="nombre">Nombre:</label>';
    $html .= '<input type="text" name="nombre" required>';
    $html .= '<br>';
    $html .= '<label for="altura">Altura (m):</label>';
    $html .= '<input type="number" step="0.01" name="altura" required>';
    $html .= '<br>';
    $html .= '<label for="tipo">Tipo:</label>';
    $html .= '<input type="text" name="tipo" required>';
    $html .= '<br>';
    $html .= '<label for="riego">Riego:</label>';
    $html .= '<input type="text" name="riego" required>';
    $html .= '<br>';
    $html .= '<button type="submit">Añadir</button>';
    $html .= '</form>';
    $html .= '<a href="index.php">Volver</a>';
    return $html;
}

echo renderForm();
?>
