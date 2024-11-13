<?php

class Livro {
    public $titulo;
    public $autor;
    public $ano;

    public function exibirInformacoes() {
        echo "Título: $this->titulo<br>";
        echo "Autor: $this->autor<br>";
        echo "Ano: $this->ano<br><br>";
    }
}

$livro1 = new Livro;
$livro1->titulo = "O Senhor dos Anéis";
$livro1->autor = "J.R.R. Tolkien";
$livro1->ano = 1954;
$livro1->exibirInformacoes();

$livro2 = new Livro;
$livro2->titulo = "A Batalha do Apocalipse";
$livro2->autor = "Erickson";
$livro2->ano = 2008;
$livro2->exibirInformacoes();
