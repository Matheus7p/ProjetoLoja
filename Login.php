<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Livraria</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg" style="background-color: #004280; ">
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
                    <a class="btn btn-outline-light" href="Gerenciamento/Mensagem/mensagem.php" tabindex="-1" aria-disabled="true" ><b>Reclame Aqui</b></a>
                    <a class="btn btn-outline-light" href="gerenciamento.php" tabindex="-1" aria-disabled="true"
                        style="margin-left: 15px;"><b>Gerenciamento</b></a>
                    <a class="btn btn-outline-light" aria-current="page" href="Login.php"
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


    <br><br>
    <h1 id="indetificacao"><b>IDENTIFICAÇÃO</b></h1>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col" style="background-color: rgba(0, 53, 103, 0.7); padding: 110px;"><br><br>
                <h2 class="titleLogin" style="white-space: nowrap;"><b>JÁ TENHO CADASTRO</b></h2>
            </div>
            <div class="col" id="linha-vertical"></div>
            <div class="col"></div>
            <div class="col" id="divCadastro" style="background-color: rgba(0, 53, 103, 0.7); padding: 160px;">
                <h3 class="titleLogin"><b>CADASTRAR</b></h3>
                <br>
                <form method="GET" action="Gerenciamento/Cliente/controleCliente.php" autocomplete="off">
                    <div class="form-floating mb-3 mt-3">
                        <input type="number" class="inputCad" placeholder="Digite o cpf" required name="cpf"
                            style="outline: none;">
                    </div>
                    <br>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text"  class="inputCad" placeholder="Digite o seu Nome" name='nomeCliente' required
                            style="outline: none;">
                    </div>
                    <br>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="inputCad" placeholder="Cadastrar Cidade" name='cidade' required
                            style="outline: none;">
                    </div>
                    <select class="form-select" name="genero" style="margin-bottom:10px">
                        <option value="Masculino" class="genero" name="genero">Masculino</option>
                        <option value="Feminino" class="genero" name="genero">Feminino</option>
                        <option value="Outros" class="genero" name="genero">Outro</option>
                    </select>
                    <div class="row m-auto">
                        <button type="submit" class="btn btn-outline-light" style="font-size:16px;" value="cadastrar"
                            name="botao">Cadastrar</button>
                    </div>
                </form>

            </div>
            <div class="col"></div>
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