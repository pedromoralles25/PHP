 <?php
            
            $operacao = $_REQUEST ["operacao"]

            if($operacao== "buscar"){
            $nome = $_POST["nome"];
            $sql= "SELECT * FROM cliente WHERE nome like '%$nome%';";
            $res= mysqli_query($mysqli,$sql);
            $linhas= mysqli_num_rows($res);
            ?>
            
            <div class="block">
                <div class='container'>
                    <h1>Tabela Paciente</h1>
                    <table class='table'>
                    <thead>
                    <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>CPF
                    <th>Telefone</th>
                    <th>Data de Nascimento</th>
                    <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>

              <?php

                $sql= "SELECT * FROM paciente";
                $res= mysqli_query($mysqli,$sql);
                $linhas= mysqli_num_rows($res);

                for ($i = 0; $i < $linhas; $i++){
                    $paciente = mysqli_fetch_array ($res);
                    
                    echo"
                        <tr>
                        <td>".$paciente['nome']."</td>
                        <td>".$paciente['cpf']."</td>
                        <td>".$paciente['telefone']."</td>
                        <td>".$paciente['data_nasc']."</td>
                        <td>".$paciente['email']."</td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
