<?php
class Triangulo extends FiguraGeometrica {
    private $lado2;
    private $lado3;

    public function __construct($tipoFigura, $lado1, $lado2, $lado3)  {
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    // Destructor
    public function __destruct() {
        // echo "Destruir triangulo";
    }

    // Getters i Setters 
    public function getLado2() {
        return $this->lado2;
    }

    public function getLado3() {
        return $this->lado3;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function setLado3($lado3) {
        $this->lado3 = $lado3;
    }

    // Area
    public function calcularArea() {
        $lado1 = $this->getLado1();
        $lado2 = $this->lado2;
        $lado3 = $this->lado3;
        $semiperimetro = ($lado1 + $lado2 + $lado3) / 2;
        $area = sqrt($semiperimetro * ($semiperimetro - $lado1) * ($semiperimetro - $lado2) * ($semiperimetro - $lado3));
        return $area;
    }

    // Perimetro
    public function calcularPerimetre() {
        $lado1 = $this->getLado1();
        $lado2 = $this->lado2;
        $lado3 = $this->lado3;
        return $lado1 + $lado2 + $lado3;
    }

    // Metodo magico
    public function __toString() {
        return "Figura: " . $this->getTipoFigura() . "\n" .
                "Lados: " . $this->getLado1() . ", " . $this->lado2 . ", " . $this->lado3 . "\n" .
                "Área: " . $this->calcularArea() . "\n" .
                "Perímetre: " . $this->calcularPerimetre() . "\n";
    }


}