<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10</title>
</head>
<body>
<pre>
<?php

    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Funcionario.php';
    require_once 'Professor.php';



    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();
    

    $p1->setNome('Igor');
    $p1->setIdade(25);
    $p1->setSexo('M');
    $p1->fazerAniv();
    $p2->setNome('Anny');
    $p2->setMatr(true);
    $p2->setCurso('Arquitetura');
    $p3->setNome('Pedro');
    $p3->setSalario(2500.50);
    $p3->receberAum(1000);
    $p4->setNome('isabela');

   

    var_dump($p3);

    
    
    
    
    
    
    
    

    





















    
?>
</pre>
</body>
</html>