<?php
class Cuadrado extends FiguraGeometrica {
    public function __construct($tipoFigura, $lado) {
        parent::__construct($tipoFigura, $lado);
    }

    // Destructor
    public function __destruct() {
        echo "Destruir cuadrado\n";
    }

    // Area
    public function calcularArea() {
        return $this->getLado1() * $this->getLado1(); 
    }

    // perimetro
    public function calcularPerimetre() {
        return 4 * $this->getLado1(); // Perímetre = 4 * costat
    }

    // Metodo magico
    public function __toString() {
        return "Figura: " . $this->getTipoFigura() . "\n" .
               "Lado: " . $this->getLado1() . "\n" .
               "Área: " . $this->calcularArea() . "\n" .
               "Perímetre: " . $this->calcularPerimetre() . "\n";
    }
}
?>
