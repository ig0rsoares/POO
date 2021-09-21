<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo
{

    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

    public function __construct($t)
    {
        $this->setTitulo($t);
        $this->setAvaliacao(1);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }

    public function play()
    {
        $this->setReproduzindo(true);
        $this->setViews($this->getViews() +1);
    }

    public function pause()
    {
        $this->setReproduzindo(false);
    }

    public function like()
    {
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($t)
    {
        $this->titulo = $t;
    }

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function setAvaliacao($a)
    {
        $v = $this->views;
        $media = ($this->avaliacao + $a) / 2 ;
        $this->avaliacao = $media;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function setViews($v)
    {
        $this->views = $v;
    }

    public function getCurtidas()
    {
        return $this->curtidas;
    }

    public function setCurtidas($c)
    {
        $this->curtidas = $c;
    }

    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    public function setReproduzindo($r)
    {
        $this->reproduzindo = $r;
    }
}
