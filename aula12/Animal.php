<?php

abstract class Animal{

protected $peso, $idade, $membros;

abstract public function locomover();
abstract public function alimentar();
abstract public function emitirSom();

public function getPeso()
{
   return $this->peso;
}

public function setPeso($p)
{
   $this->peso = $p;
}

public function getIdade()
{
   return $this->idade;
}

public function setidade($i)
{
   $this->idade = $i;
}
public function getMembros()
{
   return $this->membros;
}

public function setMembros($m)
{
   $this->membros = $m;
}

}