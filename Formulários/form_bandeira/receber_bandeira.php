<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data_nasc = $_POST["data_nasc"];
    $bandeira = $_POST["Bandeira"];

    $erro = 0;

    if(empty($nome)){
        echo "Preencha o campo nome <br>";
        $erro = 1;
    }
    if(empty($email)){
        echo "Preencha o campo email <br>";
        $erro = 1;
    }
    if(empty($data_nasc)){
        echo "Preencha a data de nascimento <br>";
        $erro = 1;
    }
    if (empty ($bandeira)){
        echo "Escolha sua bandeira <br>";
        $erro = 1;       
    }

    if(strlen($email) < 10){
        echo "Email deve ter pelo menos 10 caracteres <br>";
        $erro = 1;
    }
    if(strstr($email, "@") == FALSE){
        echo "Esse não é um endereço de email válido <br>";
        $erro = 1;
    }
    if(strstr($nome, " ") == FALSE){
        echo "Digite o nome completo <br>";
        $erro = 1;
    }

    if ($erro == 0){
        echo $nome, "<br>";
        echo $email, "<br>";
        echo $data_nasc, "<br>";
        echo $bandeira, "<br>";
    }
?>