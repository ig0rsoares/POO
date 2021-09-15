<?php

require_once 'Lutador.php';

class Luta{

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

 
    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);

        }

    }

    public function lutar()
    {
        if ($this->getAprovada() == true) {
            
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0,2);

         switch ($vencedor) {
             case '0':
                 echo "<br> Empate";
                 $this->getDesafiado()->empatarLuta();
                 $this->getDesafiante()->empatarLuta();
                 break;
             case '1':
                 echo "<br> Vencedor: ". $this->getDesafiado()->getNome();
                 $this->getDesafiado()->ganharLuta();
                 $this->getDesafiante()->perderLuta();
                 break;
             case '2':
                 echo "<br> Vencedor: ". $this->getDesafiante()->getNome();
                 $this->getDesafiante()->ganharLuta();
                 $this->getDesafiado()->perderLuta();
                 break;
        
         }   
        } else {

            echo "<br> A luta não pode acontecer";
        }

    }

    public function __construct()
    {

    }


    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado($ddo)
    {
        $this->desafiado = $ddo;
    }



    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($dte)
    {
        $this->desafiante = $dte;
    }



    public function getRounds()
    {
        return $this->rounds;
    }

    public function setRounds($r)
    {
        $this->rounds = $r;
    }



    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($a)
    {
        $this->aprovada = $a;
    }































}

































?>