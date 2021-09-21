<?php

require_once 'Lobo.php';

class Cachorro extends Lobo
{


    public function emitirSom()
    {
        echo "<br>Au! Au! Au!";
    }

    public function reagirFrase($frase)
    {
        if ($frase === "toma comida" || $frase === "Olá") {
            echo "<br>Abanar e latir!";
        } else {
            echo "<br>Rosnar!";
        }
    }
    public function reagirHora($hora, $min)
    {
        if ($hora < 12) {
            echo "<br>Abanar!";
        } elseif ($hora >= 18) {
            echo "<br>Igornar!";
        } else {
            echo "<br>Abanar e Latir";
        }
    }
    public function reagirDono($dono)
    {
        if ($dono === true) {
            echo "<br>Abanar!";
        } else {
            echo "<br>Rosnar e latir!";
        }
    }
    public function reagirIdadePeso($idade, $peso)
    {
        if ($idade < 5) {

            if ($peso < 10) {
                echo "<br>Abanar!";
            } else {
                echo "<br>Latir!";
            }
        } else {
            if ($peso < 10) {
                echo "<br>Rosnar!";
            } else {
                echo "<br>Ignorar";
            }
        }
    }
}
