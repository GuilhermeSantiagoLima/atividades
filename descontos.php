<?php
$preco = 200;
$percentualDesconto = 15;

$desconto = ($preco * $percentualDesconto) / 100;
$precoFinal = $preco - $desconto;

echo "Preço original: R$ $preco<br>";
echo "Desconto: R$ $desconto<br>";
echo "Preço final com desconto: R$ $precoFinal<br>";
