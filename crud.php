<?php
session_start(); 


include 'connection.php'; 


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_reloj'])) {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $material_correa = $_POST['material_correa']; 
    $resistencia_agua = $_POST['resistencia_agua'];

   
    $sql = "INSERT INTO reloj (marca, modelo, `material_correa`, resistencia_agua) VALUES ('$marca', '$modelo', '$material_correa', '$resistencia_agua')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Reloj añadido exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if (isset($_POST['edit_reloj'])) {
    $cod_correa = $_POST['cod_correa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $material_correa = $_POST['material_correa']; 
    $resistencia_agua = $_POST['resistencia_agua'];

    $sql = "UPDATE reloj SET marca='$marca', modelo='$modelo', `material_correa`='$material_correa', resistencia_agua='$resistencia_agua' WHERE cod_correa='$cod_correa'";

    if ($conn->query($sql) === TRUE) {
        echo "Reloj actualizado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if (isset($_POST['delete_reloj'])) {
    $cod_correa = $_POST['cod_correa'];

    $sql = "DELETE FROM reloj WHERE cod_correa='$cod_correa'";

    if ($conn->query($sql) === TRUE) {
        echo "Reloj eliminado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close(); 
?>
