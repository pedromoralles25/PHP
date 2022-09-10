<html>
    <head>
        <title>Idade selecionada</title>
        <meta charset = "UTF-8">
    </head>
<body>

    <h1>Idade Selecionada</h1>

<?php
 
if (isset ($_POST ["idade"])){
    echo $_POST ["idade"];
}
else{
    echo "A idade não foi selecionada";
}

?>

</body>
</html>