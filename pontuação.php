<?php

$pontuacao = 100;

$vitorias = 3;
$derrotas = 2;

echo "Pontuação inicial: $pontuacao pontos<br>";

$pontuacao += $vitorias * 20;
$pontuacao -= $derrotas * 15;

echo "Pontuação final: $pontuacao pontos<br>";
