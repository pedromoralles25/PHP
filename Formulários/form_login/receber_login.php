<?php
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    
    $erro = 0;

    if(strlen ($login) < 5){
        echo "Login deve ter pelo menos 5 caracteres <br>";
    }

    if(strlen ($senha) < 8){
        echo "Senha deve ter pelo menos 8 caracteres <br>";
    }

    if($login != "ds302" or $senha != "informática"){
        $erro = 1;
    }
    
    if ($erro == 1){
        echo "Você não tem permissão para visualizar essa página";
    }
    else{
        echo "Autenticação realizada com sucesso";
    }

?>