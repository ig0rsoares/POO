<?php

abstract class Pessoa {

private $nome, $idade, $sexo;

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

 public final function fazerAniv()
{
    $this->setIdade($this->getIdade() +1);
}


}



























?>