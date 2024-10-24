<?php
class Circulo extends FiguraGeometrica {
    private $radio; 

    // Constructor
    public function __construct($tipoFigura, $radio) {
        parent::__construct($tipoFigura, $radio); 
        $this->radio = $radio; 
    }

    // Destructor
    public function __destruct() {
        // echo "Destruir círculo";
    }

    // Getters i Setters 
    public function getRadio() {
        return $this->radio;
    }

    public function setRadio($radio) {
        $this->radio = $radio;
    }

    // Area
    public function calcularArea() {
        return pi() * pow($this->radio, 2); 
    }

    // Perimetre
    public function calcularPerimetre() {
        return 2 * pi() * $this->radio; 
    }

    // Metodo magico
    public function __toString() {
        return "Figura: " . $this->getTipoFigura()  ."<br>" .
               "Radio: " . $this->radio . " Unidades <br>" .
               "Área: " . $this->calcularArea() . " Unidades cuadradas  <br>" .
               "Perímetre: " . $this->calcularPerimetre() . " Unidades <br>";
    }
}
?>
