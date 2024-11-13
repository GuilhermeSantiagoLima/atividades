<?php

class Animal {
    public function fazerSom() {
        echo "O animal está fazendo um som<br>";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "O cachorro está latindo<br>";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "O gato está miando<br>";
    }
}

$cachorro = new Cachorro();
$cachorro->fazerSom();

$gato = new Gato();
$gato->fazerSom();
