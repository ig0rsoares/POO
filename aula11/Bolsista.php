<?php

require_once 'Aluno.php';

class Bolsista extends Aluno {

private $bolsa;

public function getBolsa()
{
    return $this->bolsa;
}

public function setBolsa($b)
{
    $this->bolsa = $b;
}

public function renovarBolsa()
{
    echo "<br> Bolsa renovada.";
}

public function pagarMensalidade()
{
    echo $this->getNome() . " é bolsista";
}



}