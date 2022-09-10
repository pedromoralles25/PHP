<?php
    $nome = $_GET["nome"];
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];
    $n3 = $_GET["nota3"];
    $media = 0;

    $erro = 0;
    
    if(empty($nome)){
        $erro = 1;
    }
    if(empty($n1)){
        $erro = 1;
    }
    if(empty($n2)){
        $erro = 1;
    }
    if(empty($n3)){
        $erro = 1;
    }
    
    if($erro == 1){
        echo "Preencha todos os campos <br>";
    }

    if(is_numeric($n1) == FALSE){
        $erro = 2;
    }
    if(is_numeric($n2) == FALSE){
        $erro = 2;
    }
    if(is_numeric($n3) == FALSE){
        $erro = 2;
    }

    if($erro == 2){
        echo "Apenas números nos campos de nota, por favor!";
    }

    if($erro == 0){
        $media = ($n1 + $n2 + $n3)/3;
        echo "O aluno $nome ficou com média $media";
    }
?>