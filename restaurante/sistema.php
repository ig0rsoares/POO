<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
<pre>
 <?php
 
require_once 'Cliente.php';
require_once 'Pedido.php';

 $c1 = new Cliente('Igor Soares', 'Rua 106, 130');
 $c2 = new Cliente('Anny', 'Rua 27 de Dezembro, 247');
 $p1 = new Pedido($c1, 1);
 $p2 = new Pedido($c2, 2 );

 var_dump($p1);

 
 
 
 
 
 
 
 
 ?>   
</pre>
</body>
</html>