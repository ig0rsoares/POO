<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>
<body>
<pre>
<?php

require_once 'Carro.php';
require_once 'Volks.php';

$c1[0] = new Volks;
$c1[1] = new Volks;

$c1[0]->setModelo('Jetta TSI');
$c1[0]->setMotor('2.0 TSI');
$c1[0]->setAno(2017);
$c1[0]->setCategoria('Sedan');
$c1[1]->setModelo('Golf GTI');
$c1[1]->setMotor('2.0 TSI');
$c1[1]->setAno(2019);
$c1[1]->setCategoria('Hatch');

echo $c1[0]->modelo;
























?>
</pre>
</body>
</html>