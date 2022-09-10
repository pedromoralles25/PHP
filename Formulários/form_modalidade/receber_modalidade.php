<html>
    <head>
        <title> Modalidades Selecionadas</title>
        <meta charset "UTF-8">

    </head>
<body>
    <h1>Modalidades Escolhidas</h1>

<?php
 
$var1 = 0;
$var2= 0;
$var3 = 0;
$var4 = 0;


if (isset ($_POST ["natacao"])){
    $var1= 1;
}

if (isset ($_POST ["volei"])){
    $var2 = 1;
}

if (isset ($_POST ["futebol"])){
    $var3 = 1;
}

if (isset ($_POST ["tenis"])){
    $var4 = 1;
}

if ($var1 == 1){
    echo "Natação <br>";
}

if ($var2 == 1){
    echo "Volêi <br>";

}

if ($var3 == 1){
    echo "Futebol <br>";

}

if ($var4 == 1){
    echo "Tênis";

}

if ($var1== 0 and $var2 == 0 and $var3 == 0 and $var4 == 0){
    echo "Você não selecionou uma modalidade";
}

?>
</body>
</html>