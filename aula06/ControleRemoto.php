<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador
{

    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    private function getVolume()
    {
        return $this->volume;
    }

    private function setVolume(int $v)
    {
        $this->volume = $v;
    }

    private function getLigado()
    {
        return $this->ligado;
    }

    private function setLigado(bool $l)
    {
        $this->ligado = $l;
    }

    private function getTocando()
    {
        return $this->tocando;
    }

    private function setTocando(bool $t)
    {
        $this->tocando = $t;
    }

    public function ligar()
    {

        $this->setLigado(true);
    }
    public function desligar()
    {

        $this->setLigado(false);
    }
    public function abrirMenu()
    {

        echo "<br>Está Ligado?:" . ($this->getLigado() ? "SIM" : "NÃO");
        echo "<br>Está Tocando?:" . ($this->getTocando() ? "SIM" : "NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        }
    }
    public function fecharMenu()
    {
        echo "Fechando menu...";
    }
    public function maisVolume()
    {

        if ($this->getLigado() == true) {

            $this->setVolume($this->getVolume() + 1);
        }
    }
    public function menosVolume()
    {

        if ($this->getLigado() == true) {

            $this->setVolume($this->getVolume() - 1);
        }
    }
    public function ligarMudo()
    {

        if ($this->getLigado() == true && $this->getVolume() > 0) {

            $this->setVolume(0);
        }
    }
    public function desligarMudo()
    {


        if ($this->getLigado() == true && $this->getVolume() == 0) {

            $this->setVolume(50);
        }
    }
    public function play()
    {

        if ($this->getLigado() == true && !($this->getTocando() == true)) {

            $this->setTocando(true);
        }
    }
    public function pause()
    {

        if ($this->getLigado() == true && $this->getTocando() == true) {

            $this->setTocando(false);
        }
    }
}
