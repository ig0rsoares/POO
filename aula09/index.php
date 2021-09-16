<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <pre> -->
    <?php
    require_once 'Livro.php';
    require_once 'Pessoa.php';

    $p[0] = new Pessoa('Igor',25,'Masculino');
    $p[1] = new Pessoa('Anny', 24, 'Feminino');
    $l[0] = new Livro('PHP Básico','Jose',300,$p[0]);
    $l[1] = new Livro('POO com PHP', 'Carlos', 500, $p[1]);
    $l[2] = new Livro('POO Avançado', 'Ana', 800, $p[1]);



    $l[0]->abrir();
    $l[0]->folhear(100);
    $l[0]->avancarPag();
    $l[0]->detalhes();

    
    
    
    
    
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
<!-- </pre> -->
</body>
</html>