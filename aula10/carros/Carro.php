<?php

class Carro {

private $portas, $motor, $categoria, $cambio, $preco, $ano;

public function getPortas()
{
    return $this->portas;
}

public function setPortas($p)
{
    $this->portas = $p;
}

public function getMotor()
{
    return $this->motor;
}

public function setMotor($m)
{
    $this->motor = $m;
}

public function getCategoria()
{
    return $this->categoria;
}

public function setCategoria($c)
{
    $this->categoria = $c;
}
public function getCambio()
{
    return $this->cambio;
}

public function setCambio($c)
{
    $this->cambio = $c;
}

public function getPreco()
{
    return $this->preco;
}

public function setPreco($pr)
{
    $this->preco = $pr;
}

public function getAno()
{
    return $this->ano;
}

public function setAno($a)
{
    $this->ano = $a;
}


































}
