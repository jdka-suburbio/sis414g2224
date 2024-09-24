<?php
include 'db.php';

$stmt = $pdo->query("SELECT * FROM plants");
$plants = $stmt->fetchAll();

function renderTable($plants) {
    $html = '<h1>Lista de Plantas</h1>';
    $html .= '<table>';
    $html .= '<tr><th>Nombre</th><th>Altura</th><th>Tipo</th><th>Riego</th></tr>';
    foreach ($plants as $plant) {
        $html .= '<tr>';
        $html .= '<td>' . htmlspecialchars($plant['nombre']) . '</td>';
        $html .= '<td>' . htmlspecialchars($plant['altura']) . ' m</td>';
        $html .= '<td>' . htmlspecialchars($plant['tipo']) . '</td>';
        $html .= '<td>' . htmlspecialchars($plant['riego']) . '</td>';
        $html .= '</tr>';
    }
    $html .= '</table>';
    $html .= '<a href="add_plant.php">Añadir Planta</a>';
    return $html;
}

echo renderTable($plants);
?>
