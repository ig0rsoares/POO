<?php

class Pedal
{

    private $horario;
    private $local;
    private $duracao;
    private $acompanhamento;

    public function __construct($h, $l, $d, $a)

    {
        $this->setHorario($h);
        $this->setLocal($l);
        $this->setDuracao($d);
        $this->setAcompanhamento($a);
    }


    public function setHorario($hora)
    {
        switch ($hora) {
            case 'manha':
                $this->horario = 'manha';
                break;

            case 'tarde':
                $this->horario = 'tarde';
                break;

            case 'noite':
                $this->horario = 'noite';
                break;
        }
    }


    public function setLocal($loc)
    {
        switch ($loc) {
            case 'plano':
                $this->local = 'plano';
                break;


            case 'subida':
                $this->local = 'subida';
                break;


            case 'descida':
                $this->local = 'descida';
                break;
        }
    }


    public function setDuracao($dur)
    {
        switch ($dur) {
            case 'curta':
                $this->duracao = 'curta';
                break;


            case 'media':
                $this->duracao = 'media';
                break;


            case 'longa':
                $this->duracao = 'longa';
                break;
        }
    }


    public function setAcompanhamento(string $cia)
    {
        if ($cia === 'S') {
            $this->acompanhamento = true;
        }

        if ($cia === 'N') {
            $this->acompanhamento = false;
        }
    }


    public function getHorario()
    {
        echo "Você está pedalando de" . " $this->horario.";
        echo "<br>";
    }


    public function getLocal()
    {
        echo "Você está pedalando em " . "$this->local.";
        echo "<br>";
    }


    public function getDuracao()
    {
        echo "Você está em um pedal de" . " $this->duracao duração.";
        echo "<br>";
    }


    public function getAcompanhamento()
    {
        if ($this->acompanhamento === false) {
            echo "Você está pedalando sozinho. ";
            echo "<br>";
        }

        if ($this->acompanhamento === true) {
            echo "Você está pedalando com amigos.";
            echo "<br>";
        }
    }

    /*
    public function manha()
    {
        $this->horario = 'manha';
        echo "Você está pedalando de $this->horario";
        echo "<br>";
    }

    public function tarde()
    {
        $this->horario = 'tarde';
        echo "Você está pedalando de $this->horario";
        echo "<br>";
    }

    public function noite()
    {
        $this->horario = 'noite';
        echo "Você está pedalando de $this->horario";
        echo "<br>";
    }


    public function intensidadeSubindo()
    {
        $this->local = 'morro';
        echo "Você está subindo um" .  " $this->local. " .  "É recomendavel não pedalar com instensidade alta!";
        echo "<br>";
    }

    public function intensidadeDescendo()
    {
        $this->local = 'descida';
        echo "Você está em uma" . " $this->local. " . "Aproveite para descansar";
        echo "<br>";
    }

    public function intensidadePlano()
    {
        $this->local = 'plano';
        echo "Você está em um local" . " $this->local. " . "Aproveite para aumentar a intensidade!";
        echo "<br>";
    }

    public function duracaoCurta()
    {
        $this->duracao = 'curta';
        echo "Você está em um pedal de " . " $this->duracao " . "duração";
        echo "<br>";
    }

    public function duracaoMedia()
    {
        $this->duracao = 'media';
        echo "Você está em um pedal de" . " $this->duracao " . "duração";
        echo "<br>";
    }

    public function duracaoLonga()
    {
        $this->duracao = 'longa';
        echo "Você está em um pedal de " . " $this->duracao " . "duração";
        echo "<br>";
    }

    public function companhia(bool $cia)
    {
        if ($cia === true) {

            echo 'Você está em um pedal com amigos!';
            echo "<br>";
        } else {

            echo 'Você está pedalando sozinho!';
            echo "<br>";
        }
    }
    */
}
