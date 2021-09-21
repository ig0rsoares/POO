<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
</head>
<body>
<pre>
<?php

require_once 'Mamifero.php';
require_once 'Reptil.php';
require_once 'Peixe.php';
require_once 'Ave.php';
require_once 'Canguru.php';
require_once 'Cachorro.php';
require_once 'Tartaruga.php';
require_once 'Goldfish.php';
require_once 'Arara.php';

$m = new Mamifero;
$m->setidade(4);
$m->locomover();
$a = new Ave;
$a->locomover();
$r = new Reptil;
$r->locomover();
$p = new Peixe;
$p->locomover();
$k = new Canguru;
$k->locomover();
$t = new Tartaruga;
$t->locomover();
$ca = new Canguru;
$ca->usarBolsa();
$c = new Cachorro;
$c->emitirSom();
$m->emitirSom();






?>   
 </pre>   
</body>
</html>