<?php

interface FormaGeometrica {
    public function calcularArea();
    public function calcularPerimetro();
}

class Quadrado implements FormaGeometrica {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }

    public function calcularPerimetro() {
        return 4 * $this->lado;
    }
}

class Circulo implements FormaGeometrica {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return 3.14 * $this->raio * $this->raio;
    }

    public function calcularPerimetro() {
        return 2 * 3.14 * $this->raio;
    }
}

$quadrado = new Quadrado(5);
echo "Área do quadrado: " . $quadrado->calcularArea() . "<br>";
echo "Perímetro do quadrado: " . $quadrado->calcularPerimetro() . "<br>";
$circulo = new Circulo(3);
echo "Área do círculo: " . $circulo->calcularArea() . "<br>";
echo "Perímetro do círculo: " . $circulo->calcularPerimetro() . "<br>";
