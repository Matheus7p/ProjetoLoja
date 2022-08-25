<?php
$codProd = filter_input(INPUT_GET,'codProd');
$descProd = filter_input(INPUT_GET,'descProd');
$valor = filter_input(INPUT_GET,'valor');
$botao =  filter_input(INPUT_GET,'botao');


include 'produtoDAO.php';
$novoProduto = new produtoDAO();

$novoProduto->setCodProd($codProd);
$novoProduto->setdescProd($descProd);
$novoProduto->setvalor($valor);

if($botao=='enviar'){
        $novoProduto->cadastrarNvP();
    }else if($botao=='deletar'){
        $novoProduto->deletarNvP();
    }

?>