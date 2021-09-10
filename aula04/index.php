<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>

<body>

    <pre>
    <?php
    require_once 'caneta.php';

    $c1 = new Caneta('BIC', 'Preta', 0.7);
    $c2 = new Caneta('Faber', 'Azul', 1.0);


    var_dump($c1);
    var_dump($c2);


    ?>
    </pre>
</body>

</html>