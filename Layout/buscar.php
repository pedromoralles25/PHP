<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="_css/perfil.css" />
    <link rel="stylesheet" href="_css/form.css" />

    <title>Buscar</title>
  </head>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Admin</div>
            <div class="list-group list-group-flush my-3">
              <a href="perfil.html" class="list-group-item list-group-item-action bg-transparent  second-text active"><i
                 class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
              <a href="servicos.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                 class="fas fa-hospital me-2"></i>Serviços</a>
              <a href="funcionarios.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                 class="fas fa-clipboard me-2"></i>Funcionários</a>
              <a href="clientes.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                 class="fas fa-users me-2"></i>Clientes</a>
              <a href="calendario.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i 
                 class="fas fa-calendar me-2"></i>Calendário</a>
              <a href="index.html" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                 class="fas fa-power-off me-2"></i>Sair</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link second-text fw-bold" href="perfil.html" id="navbarDropdown"
                          role="button"  aria-expanded="false">
                          <i class="fas fa-arrow-left me-2"></i>Voltar
                      </a>
                        </li>
                    </ul>
                </div>
            </nav>
            
                        
                        
                <div class="block">
                    <div class='container'>
                        <h1>Tabela Paciente</h1>
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>CPF
                                    <th>Telefone</th>
                                    <th>Data de Nascimento</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                
                                $operacao = $_REQUEST ["operacao"]
                                
                                if($operacao== "buscar"){
                                    $nome = $_POST["nome"];
                                    $sql= "SELECT * FROM cliente WHERE nome like '%$nome%';";
                                    $res= mysqli_query($mysqli,$sql);
                                    $linhas= mysqli_num_rows($res);

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
                                        }
                                        ?>
                            </tbody>
                            </table>
                    </div>
                </div>
            </body>
            </html>
