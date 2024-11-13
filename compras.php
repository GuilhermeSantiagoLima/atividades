<?php

$produtos = array(15.99, 24.99, 12.99, 7.99, 3.99);

$total = 0;

foreach ($produtos as $valor) {
    $total += $valor;
}

echo "Total da compra: R$ $total";
