<?php

class Animal {

private $nome, $especie;

public function getNome()
{
    return $this->nome;
}
public function setNome($nome)
{
    $this->nome = $nome;
}

public static function nome($nome)
{
    if ($nome === 'Igor') {
        echo 'Igor é o nome';
    }

    if ($nome === 'Anny') {
        echo 'Anny é o nome';
    }
}


}