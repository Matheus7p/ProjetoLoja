<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="produto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Livraria</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg" style="background-color: #004280;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php" style="color: white;"><b>LIVRARIA</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col">
                <div class="collapse navbar-collapse" id="navbarScroll">

                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <a class="btn btn-outline-light" href="../Mensagem/mensagem.php" tabindex="-1" aria-disabled="true"><b>Reclame
                            Aqui</b></a>
                    <a class="btn btn-outline-light" href="../../gerenciamento.php" tabindex="-1" aria-disabled="true"
                        style="margin-left: 15px;"><b>Gerenciamento</b></a>
                    <a class=" btn btn-outline-light" aria-current="page" href="../../Login.php"
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
                    <a class="btn btn-outline-light" href="../Cliente/cliente.php"><b>Clientes</b></a>
                </li>
            </div>
            <div class="col">
                <li class="nav-item">
                    <a class="btn btn-outline-light" href="../Mensagem/genMensagem.php"><b>Mensagens</b></a>
                </li>
            </div>
        </ul>
    </div>

<br>
    <div class="container" style="background-color: rgba(0, 53, 103, 0.7); padding: 90px;">
        <h1 id="titleMensagem" style="color: white; margin-left: 400px; margin-bottom: 50px; "><b>Cadastrar Produto</b></h1>
        <form action="controleProduto.php" method="GET" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="number" class="inputCadProd" name="codProd" placeholder="Codigo do Produto">
            </div>
            <div class="mb-3">
                <input type="text" name="descProd" class="inputCadProd" placeholder="Descri????o do Produto">
            </div>
            <div class="mb-3">
                <input type="number" name="valor" class="inputCadProd" placeholder="Valor do Produto">
            </div>
            <div class="mb-3">
                <input type="file" name="arquivo">
            </div>
            <div class="row m-auto"  >
                <button type="submit" class="btn btn-outline-light" style="font: size 20px;" value="enviar"
                    name="botao">Enviar</button>
            </div>
            <br>

            <div class="row m-auto">
                                    <button type="button" class="btn btn-outline-light"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        style="font: size 20px;">
                                        Deletar
                                    </button>
                                </div>
                            </form>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action='controleProduto.php' method='GET'>
                                                <div class="form-floating mt-3 mb-3">
                                                    <input type="number" class="form-control"
                                                        placeholder="deletarCodigo" name='codProd' min="0" required>
                                                    <label>Insira o Codigo</label>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-dark"
                                                data-bs-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-outline-dark" value="deletar"
                                                name="botao">Apagar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
    </div>
    </form>


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