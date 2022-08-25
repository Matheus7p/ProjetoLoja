<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleIndex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Livraria</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg" style="background-color: #004280;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="color: white;"><b>LIVRARIA</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col">
                <div class="collapse navbar-collapse" id="navbarScroll">

                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div> 
                    <a class="btn btn-outline-light" href="mensagem.php" tabindex="-1" aria-disabled="true" ><b>Reclame Aqui</b></a>
                    <a class="btn btn-outline-light" href="gerenciamento.php" tabindex="-1" aria-disabled="true" style="margin-left: 15px;"><b>Gerenciamento</b></a>
                    <a class=" btn btn-outline-light" aria-current="page" href="Login.php"
                        style="margin-left: 15px;"><b>Login</b></a>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            style="margin-left: 15px;">
                        <button class="btn btn-outline-light" type="submit"><b>Search</b></button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div>
        <ul class="nav justify-content-center" style="background-color: #003567 ; padding: 3px;">
        <div class="col"></div>
            <div class="col">
                <li class="nav-item">
                    <a class="btn btn-outline-light" aria-current="page" href="produto.php"><b>Produto</b></a>
                </li>
            </div>
            <div class="col">
                <li class="nav-item">
                    <a class="btn btn-outline-light" href="cliente.php"><b>Clientes</b></a>
                </li>
            </div>
            <div class="col">
                <li class="nav-item">
                    <a class="btn btn-outline-light" href="genMensagem.php"><b>Mensagens</b></a>
                </li>
            </div>
        </ul>
    </div>

    <div class="container" style="margin-top:20px ; background-color: rgba(0, 53, 103, 0.7); padding: 110px;">
        <div class="overflow-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style='text-align:center; color:white;'><b>CPF</b></th>
                        <th scope="col" style='text-align:center; color:white;'><b>Nome</b></th>
                        <th scope="col" style='text-align:center; color:white;'><b>Cidade</b></th>
                        <th scope="col" style='text-align:center; color:white;'><b>Gênero</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include 'conexao.php';
                        $sql = "select * from cliente";
                        $banco = new conexao();
                        $con = $banco->getConexao();
                        $resultado = $con->query($sql);
                        while($row = $resultado->fetch()){
                            echo "<tr>";
                            echo "<td style='text-align:center; color:white;'>".$row['cpf']."</td>";
                            echo "<td style='text-align:center; color:white;'>".$row['nomeCliente']."</td>";
                            echo "<td style='text-align:center; color:white;'>".$row['cidade']."</td>";
                            echo "<td style='text-align:center; color:white;'>".$row['genero']."</td>";
                            echo "<td> 
                            
                            <a class='btn btn-sm btn-danger'
                            data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
                                    class='bi bi-file-earmark-excel' viewBox='0 0 16 16'>
                                    <path
                                        d='M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z' />
                                    <path
                                        d='M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z' />
                                </svg>
                            </a>
                            <div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                              <div class='modal-content'>
                                <div class='modal-header'>
                                  <h5 class='modal-title' id='staticBackdropLabel'>Excluir Cesta</h5>
                                  <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                <p>Deseja Realmente excluir este Cliente?</p>
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                                  <a class='btn btn-danger' href='deleteCliente.php?codCliente=$row[codCliente]'>Confirmar</a>
                                </div>
                              </div>
                            </div>
                          </div>
                            
                            </td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>



</body>

</html>