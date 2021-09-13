<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de aberturas de contas</title>
</head>
<body>
<?php

require_once 'banco.php';

$conta1 = new ContaBanco('cp', 'Igor Soares');

// echo $conta1->getSaldo();
echo "<br>";
echo $conta1->getDono();
echo "<br>";
$conta1->pagarMensal();
echo $conta1->getSaldo();
echo "<br>";
$conta1->sacar(200);
echo "<br>";
echo $conta1->getSaldo();
echo "<br>";
// $conta1->setSaldo(-10);
// $conta1->fecharConta();
// $conta1->setStatus(false);
echo $conta1->getSaldo();
echo "<br>";
$conta1->depositar(110);
echo "<br>";
echo $conta1->getSaldo();
echo "<br>";
$conta1->pagarMensal();
echo $conta1->getSaldo();
echo "<br>";











?>
</body>
</html>