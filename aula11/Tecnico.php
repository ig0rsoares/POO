<?php

require_once 'Aluno.php';

class Tecnico extends Aluno {

    private $registroProfissional;

    public function praticar()
    {
        echo $this->getNome() . "Está praticando!";
    }

    public function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional($r)
    {
        $this->registroProfissional = $r;
    }










}