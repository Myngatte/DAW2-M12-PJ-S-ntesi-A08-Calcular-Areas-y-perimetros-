<?php
class Rectangulo extends FiguraGeometrica {
    private $lado2; 

    // Constructor
    public function __construct($tipoFigura, $lado1, $lado2) {
        parent::__construct($tipoFigura, $lado1); 
        $this->lado2 = $lado2; 
    }

    // Destructor
    public function __destruct() {
        // echo "Destruir rectángulo";
    }

    // Getters i Setters
    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    // Area
    public function calcularArea() {
        return $this->getLado1() * $this->lado2; 
    }

    // Perimetre
    public function calcularPerimetre() {
        return 2 * ($this->getLado1() + $this->lado2);
    }

    // Metodo magico
    public function __toString() {
        return "Figura: " . $this->getTipoFigura() . "\n" .
               "Lados: " . $this->getLado1() . ", " . $this->lado2 . "\n" .
               "Área: " . $this->calcularArea() . "\n" .
               "Perímetre: " . $this->calcularPerimetre() . "\n";
    }
}
?>
