<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de aberturas de contas</title>
</head>
<body>
<pre>
<?php

require_once 'banco.php';

$p1 = new ContaBanco('cc', 'Igor');
$p2 = new ContaBanco('cp', 'Anny');

$p1->depositar(300);
$p2->depositar(500);
$p1->sacar(350);
$p2->sacar(100);
$p1->pagarMensal();
$p2->pagarMensal();



var_dump($p1);
var_dump($p2);









?>
</pre>
</body>
</html>