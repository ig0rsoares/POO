<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';


class Livro implements Publicacao{

private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;

public function detalhes()
{
    echo "<br>Livro: " . $this->getTitulo();
    echo "<br>Autor: " . $this->getAutor();
    echo "<br>Total de páginas: " . $this->getTotPaginas();
    echo "<br>Sendo lido por: " . $this->getLeitor()->getNome();
    echo "<br>Página Atual: " . $this->getPagAtual();
    
}

public function __construct($t, $a, $tp, $l)
{
    $this->setTitulo($t);
    $this->setAutor($a);
    $this->setAberto(false);
    $this->setPagAtual(0);
    $this->setTotPaginas($tp);
    $this->setLeitor($l);
}

public function getTitulo()
{
    return $this->titulo;
}

public function setTitulo($t)
{
    $this->titulo = $t;
}
public function getAutor()
{
    return $this->autor;
}

public function setAutor($a)
{
    $this->autor = $a;
}
public function getTotPaginas()
{
    return $this->totPaginas;
}

public function setTotPaginas($tp)
{
    $this->totPaginas = $tp;
}
public function getPagAtual()
{
    return $this->pagAtual;
}

public function setPagAtual($pa)
{
    $this->pagAtual = $pa;
}

public function getAberto()
{
    return $this->aberto;
}

public function setAberto(bool $ab)
{
    $this->aberto = $ab;
}

public function getLeitor()
{
    return $this->leitor;
}

public function setLeitor($l)
{
    $this->leitor = $l;
}

public function abrir()
{
    $this->setAberto(true);
}

public function fechar()
{
    $this->setAberto(false);
}

public function folhear($p)
{
    if ($this->getAberto() === false) {
        
        echo "<br>O Livro não está aberto";
    }else { 
        if ($p > $this->getTotPaginas()) {
        echo "<br>Essa página não existe";
     } else {
         $this->setPagAtual($p);
     }
     }
   
}

public function avancarPag()
{
    $this->setPagAtual($this->getPagAtual()+1);
}

public function voltaPag()
{
    $this->setPagAtual($this->getPagAtual()-1);
}













}
































?>