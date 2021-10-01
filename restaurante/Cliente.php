<?php

class Cliente
{

    private $nome, $endeço, $idade;

    public function __construct($n, $e)
    {
        $this->setNome($n);
        $this->setEndeço($e);
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getEndeço()
    {
        return $this->endeço;
    }


    public function setEndeço($endeço)
    {
        $this->endeço = $endeço;
    }


    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
}
