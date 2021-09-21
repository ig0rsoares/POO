<?php

require_once 'Animal.php';

class Peixe extends Animal{

private $corEscama;

public function getCorEscama()
{
    return $this->corEscama;
}

public function setCorEscama($ce)
{
    $this->corEscama = $ce;
}

public function locomover()
{
    echo "<br>Nadando";
}

public function alimentar()
{
    echo "<br>Comendo substancias";
}

public function emitirSom()
{
    echo "<br>Peixe não faz som";
}

public function soltarBolha()
{
    echo "<br>Soltou uma bolha!";
}




}