<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>

<body>
    <?php
    require_once 'caneta.php';

    $c1 = new Caneta;
    $c1->modelo = "Bic Cristal";
    $c1->cor = "Azul";
    // $c1->ponta = 0.5;
    // $c1->carga = 99;
    // $c1->tampada = true;
  

    $c1->rabiscar();
    $c1->destampar();

    var_dump($c1);



    ?>
</body>

</html>