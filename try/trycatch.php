<?php

class Newsletter
{


    public function cadastrarEmail($email)

    {


        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Email inválido", 666);
        } else {
            echo "Email cadastrado com sucesso";
        }
    }
}

$ns = new Newsletter;

try {
    $ns->cadastrarEmail('igor@outlook.com');
} catch (Exception $e) {

    echo $e->getMessage() . "<br>";
    echo $e->getCode() . "<br>";
} finally {

    echo "<br> Passou pelo bloco do try";
}
