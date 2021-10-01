<?php

require_once 'Cliente.php';

class Pedido
{

    private $cliente, $numero;

    public function __construct(Cliente $c, $n)
    {
        $this->setCliente($c);
        $this->setNumero($n);
    }


    public function getCliente()
    {
        return $this->cliente;
    }


    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }


    public function getNumero()
    {
        return $this->numero;
    }


    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}
