<?php
class Maleta {
    public $marca;
    public $dimensiones;
    public $material;
    public $tipo;

    public function __construct($marca, $dimensiones, $material, $tipo) {
        $this->marca = $marca;
        $this->dimensiones = $dimensiones;
        $this->material = $material;
        $this->tipo = $tipo;
    }

    public function mostrarInformacion() {
        echo "<h2>Detalles de la Maleta</h2>";
        echo "Marca: " . $this->marca . "<br>";
        echo "Dimensiones: " . $this->dimensiones . "<br>";
        echo "Material: " . $this->material . "<br>";
        echo "Tipo: " . $this->tipo . "<br>";
    }
}

$miMaleta = new Maleta("Samsonite", "55 x 40 x 20 cm", "Poliéster", "Equipaje de mano");

$miMaleta->mostrarInformacion();
?>
