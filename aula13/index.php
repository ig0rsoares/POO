<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula13</title>
</head>

<body>
    <pre>
<?php

require_once 'Animal.php';
require_once 'Mamifero.php';  
require_once 'Lobo.php';
require_once 'Cachorro.php';  

$m = new Mamifero;
$m->emitirSom();
$l = new Lobo;
$l->emitirSom();
$c = new Cachorro;
$c->emitirSom();
$c->reagirIdadePeso(12, 11);
























?>
</pre>
</body>

</html>