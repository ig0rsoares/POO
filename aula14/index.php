<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula14</title>
</head>
<body>
<pre>
<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';
require_once 'Visualizacao.php';

$v[0] = new Video('Aula 1 de POO');
$v[1] = new Video('Aula 12 de PHP');
$v[2] = new Video('Aula 15 de HTML 5');

$g[0] = new Gafanhoto('Igor', 25, 'M', 'iss');
$g[1] = new Gafanhoto('Anny', 25, 'F', 'accsr');


$vis[0] = new Visualizacao($g[0], $v[0]);
$vis[0] = new Visualizacao($g[0], $v[0]);
$vis[0]->avaliarNota(50);

print_r($vis);











?>
</pre>
</body>
</html>