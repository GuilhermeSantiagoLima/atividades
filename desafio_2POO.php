<?php

class ContaBancaria {
    private $saldo;

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$conta = new ContaBancaria();
$conta->depositar(500);
echo $conta->getSaldo();
