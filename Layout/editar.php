<!-- <?php 
     include "conecta_mysql.inc"; 
     $cod_usuario = $_GET ["cod_usuario"];
     $sql= "SELECT * FROM cliente WHERE cod_usuario = $cod_usuario;";
     $res= mysqli_query($mysqli,$sql);
     $usuario = mysqli_fetch_array ($res);
?>

<html>
    <head>
        <title>Edição de Usuário</title>
        <meta charset="UTF-8">
    </head>
    <body>
        
        <h1>Edição de Usuário</h1>
        <form action="pagina_extra.php" method="POST"> 
            <input type="hidden" name="operacao" value="editar">
            <input type="hidden" name="cod_cliente" value="<?php echo $cod_usuario?>">
            <p>Nome: <input type="text" name="nome" value="<?php echo $usuario['nome']?>"></p>
            <p>CPF <input type="text" name="cpf" value="<?php echo $usuario['cpf']?>"></p>
            <p>Data de Nascimento: <input type="date" name="data_nasc" value="<?php echo $usuario['data_nasc']?>"></p>
            <p>Telefone: <input type="text" name="telefone" value="<?php echo $usuario['telefone']?>"></p>
            <p>Email <input type="text" name="email" value="<?php echo $usuario['email']?>"></p>
            <p>Senha <input type="text" name="senha" value="<?php echo $usuario['senha']?>"></p>
            <p><input type="submit" value="Editar"></p> 
        </form>

    </body>
</html>

<?php mysqli_close($mysqli); ?>