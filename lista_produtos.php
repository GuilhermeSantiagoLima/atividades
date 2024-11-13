<?php

$produtos = array(
    "Produto A" => 25.99,
    "Produto B" => 40.50,
    "Produto C" => 17.75
);

foreach ($produtos as $nome => $preco) {
    echo "Produto: $nome, Preço: R$ $preco<br>";
}

