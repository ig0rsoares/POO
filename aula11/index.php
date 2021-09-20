<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
</head>
<body>
<pre>
 <?php
 
 require_once 'Pessoa.php';
 require_once 'Visitante.php';
 require_once 'Aluno.php';
 require_once 'Bolsista.php';

//  $p1 = new Pessoa();
 $v1 = new Visitante();
 $a1 = new Aluno();
 $b1 = new Bolsista();
 $b1->setNome('Anny');
 $b1->setBolsa(12.5);
 $b1->pagarMensalidade();

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 ?>   
</pre>  
</body>
</html>