<?php

$palavras = array("Casa", "Carro", "Computador", "Pessoa", "Cachorro", "Gato", "Elefante");

foreach ($palavras as $palavra) {
    if (strlen($palavra) > 5) {
        echo $palavra . "<br>";
    }
}
