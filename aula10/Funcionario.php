<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa {

private $setor, $trabalhando;

public function mudarTrabalho($t)
{
    $this->setTrabalhando($t);
}

public function getSetor()
{
    return $this->setor;
}

public function setSetor($s)
{
    $this->setor = $s;
}

public function getTrabalhando()
{
    return $this->trabalhando;
}

public function setTrabalhando($t)
{
    $this->trabalhando = $t;
}


































}
