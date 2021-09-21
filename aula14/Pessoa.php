<?php

abstract class Pessoa {

protected $nome, $idade, $sexo, $experiencia;

public function __construct($n, $i, $s)
{
    $this->setNome($n);
    $this->setIdade($i);
    $this->setSexo($s);
    $this->setExperiencia(0);


}

protected function ganharExp()
{
    $this->setExperiencia($this->getExperiencia() +1);
}

public function getNome()
{
    return $this->nome;
}

public function setNome($n)
{
    $this->nome = $n;
}

public function getIdade()
{
    return $this->idade;
}

public function setIdade($i)
{
    $this->idade = $i;
}

public function getSexo()
{
    return $this->sexo;
}

public function setSexo($s)
{
    $this->sexo = $s;
}

public function getExperiencia()
{
    return $this->experiencia;
}

public function setExperiencia($e)
{
    $this->experiencia = $e;
}
}