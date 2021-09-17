<?php

require_once 'Carro.php';

class Volks extends Carro {

private $modelo;

public function getModelo()
{
    return $this->modelo;
}

public function setModelo($m)
{
    $this->modelo = $m;
}


}
