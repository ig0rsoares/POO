<?php

require_once 'Animal.php';

class Mamifero extends Animal
{

    protected $corPelo;

    public function emitirSom()
    {
        echo "<br>Som de mamífero";
    }

    public function getCorPelo()
    {
        return $this->corPelo;
    }

    public function setCorPelo($cp)
    {
        $this->corPelo = $cp;
    }
}
