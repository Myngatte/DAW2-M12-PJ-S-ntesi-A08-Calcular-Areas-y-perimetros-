<?php
class Cuadrado extends FiguraGeometrica {
    public function __construct($tipoFigura, $lado1) {
        parent::__construct($tipoFigura, $lado1);
    }

    // Destructor
    public function __destruct() {
        // echo "Destruir cuadrado";
    }

    // Area
    public function calcularArea() {
        return $this->getLado1() * $this->getLado1(); 
    }

    // perimetro
    public function calcularPerimetre() {
        return 4 * $this->getLado1();
    }

    // Metodo magico
    public function __toString() {
        return "Figura: " . $this->getTipoFigura() . "<br>" .
               "Lado: " . $this->getLado1() . "<br>" .
               "Área: " . $this->calcularArea() . "<br>" .
               "Perímetre: " . $this->calcularPerimetre() . "<br>";
    }
}
?>
