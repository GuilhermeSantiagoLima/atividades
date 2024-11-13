<?php

$notas = array(
    "João" => 8.5,
    "Maria" => 9.5,
    "Pedro" => 7.5
);

$soma = 0;

echo "Notas:<br>";
foreach ($notas as $aluno => $nota) {
    echo "Aluno: $aluno, Nota: $nota<br>";
    $soma += $nota;
}

$media = $soma / count($notas);

echo "Média da turma: $media<br>";
