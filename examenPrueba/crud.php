<?php
require_once 'connection.php';

class SofaCrud {
    private $conn;

    public function __construct() {
        $database = new Connection();
        $this->conn = $database->getConnection();
    }

    public function createSofa($material, $dimensiones, $capacidad, $color) {
        $query = "INSERT INTO sofa (material, dimensiones, capacidad, color) VALUES (:material, :dimensiones, :capacidad, :color)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':material', $material);
        $stmt->bindParam(':dimensiones', $dimensiones);
        $stmt->bindParam(':capacidad', $capacidad);
        $stmt->bindParam(':color', $color);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function readSofas() {
        $query = "SELECT * FROM sofa";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function updateSofa($id, $material, $dimensiones, $capacidad, $color) {
        $query = "UPDATE sofa SET material = :material, dimensiones = :dimensiones, capacidad = :capacidad, color = :color WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':material', $material);
        $stmt->bindParam(':dimensiones', $dimensiones);
        $stmt->bindParam(':capacidad', $capacidad);
        $stmt->bindParam(':color', $color);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function deleteSofa($id) {
        $query = "DELETE FROM sofa WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>