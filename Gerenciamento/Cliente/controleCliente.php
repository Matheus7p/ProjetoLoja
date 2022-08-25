<?php
$cpf = filter_input(INPUT_GET,'cpf');
$nomeCliente = filter_input(INPUT_GET,'nomeCliente');
$cidade = filter_input(INPUT_GET,'cidade');
$genero = filter_input(INPUT_GET,'genero'); 
$botao =  filter_input(INPUT_GET,'botao');

include 'clienteDao.php';
$novoCliente = new clienteDao();

$novoCliente->setCpf($cpf);
$novoCliente->setNomeCliente($nomeCliente);
$novoCliente->setCidade($cidade);
$novoCliente->setGenero($genero);



if($botao=='cadastrar'){
        $novoCliente->cadastrarNvC();
    }else{

    }

?>