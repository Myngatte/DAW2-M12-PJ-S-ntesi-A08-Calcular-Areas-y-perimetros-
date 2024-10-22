<?php
class FiguraGeometrica {
    private $tipoFigura;
    private $lado1;

    // Construct
    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    // Destruct
    public function __destruct() {
        // echo "Destruïdo: " . $this->tipoFigura . "\n";
    }

    // Getters
    public function getTipoFigura() {
        return $this->tipoFigura;
    }

    public function getLado1() {
        return $this->lado1;
    }

    // Setters
    public function setTipoFigura($tipoFigura) {
        $this->tipoFigura = $tipoFigura;
    }

    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }

    // Calcular area (sera sobreescrito)
    public function calcularArea() {
        return 0;
    }
}
?>
