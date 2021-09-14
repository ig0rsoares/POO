<?php

class Lutador {

private $nome;
private $nacionalidade;
private $idade;
private $altura;
private $peso;
private $categoria;
private $vitorias;
private $derrotas;
private $empates;

public function apresentar()
{
    echo "<br>Lutador: " . $this->getNome();
    echo "<br>Origem: " . $this->getNacionalidade();
    echo "<br>Idade:" . $this->getIdade()  . "anos";
    echo "<br>Altura:" . $this->getAltura() . "m de altura";
    echo "<br>Peso: " . $this->getPeso() . "KG";
    echo "<br>Ganhou: " . $this->getVitorias() . " lutas";
    echo "<br>Perdeu: " . $this->getDerrotas() . " lutas";
    echo "<br>Empatou: " . $this->getEmpates() . " lutas";

}

public function status()
{
    echo $this->getNome();
    echo "<br>É um peso: " . $this->getCategoria();
    echo "<br>" . $this->getVitorias() . " Vitórias";
    echo "<br>" . $this->getDerrotas() . " Derrotas";
    echo "<br>" . $this->getEmpates() . " Empates";
    
}

public function ganharLuta()
{
    $this->setVitorias($this->getVitorias() + 1);
    
}

public function perderLuta()
{
    $this->setDerrotas($this->getDerrotas() + 1);
}

public function empatarLuta()
{
    $this->setEmpates($this->getEmpates() + 1);
}


public function __construct(string $no, string $na, int $id, float $al, float $pe, int $vi, int $de, int $em )
{
    $this->setNome($no);
    $this->setNacionalidade($na);
    $this->setIdade($id);
    $this->setAltura($al);
    $this->setPeso($pe);
    $this->setVitorias($vi);
    $this->setDerrotas($de);
    $this->setEmpates($em);

}

public function getNome()
{
   return $this->nome;
}

public function setNome($no)
{
   $this->nome = $no;
}

public function getNacionalidade()
{
   return $this->nacionalidade;
}

public function setNacionalidade($na)
{
   $this->nacionalidade = $na;
}

public function getIdade()
{
   return $this->idade;
}

public function setIdade($id)
{
   $this->idade = $id;
}

public function getAltura()
{
   return $this->altura;
}

public function setAltura($al)
{
   $this->altura = $al;
}

public function getPeso()
{
   return $this->peso;
}

public function setPeso($pe)
{
   $this->peso = $pe;
   $this->setCategoria();
   
}

public function getCategoria()
{
   return $this->categoria;
}

private function setCategoria()
{
   
   if ($this->getPeso() < 52.2) {

      $this->categoria = 'Inválido';
   }  
    elseif ($this->getPeso() <= 70.3) {

      $this->categoria = 'Leve';
    }
    elseif ($this->getPeso() <= 83.9) {

      $this->categoria = 'Médio';
    }

    elseif ($this->getPeso() <= 120.2) {
      $this->categoria = 'Pesado';
    }

    else {
        
      $this->categoria = 'Inválido';

    }

   

}
    
public function getVitorias()
{
  return $this->vitorias;
}

public function setVitorias($vi)
{
    $this->vitorias = $vi;
}

public function getDerrotas()
{
   return $this->derrotas;
}

public function setDerrotas($de)
{
    $this->derrotas = $de;
}

public function getEmpates()
{
   return $this->empates;
}

public function setEmpates($em)
{
    $this->empates = $em;
}



}
