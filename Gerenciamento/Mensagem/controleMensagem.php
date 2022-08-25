<?php
$assunto = filter_input(INPUT_GET,'assunto');
$obs = filter_input(INPUT_GET,'obs');
$mensagemdata = filter_input(INPUT_GET,'mensagemdata');
$botao =  filter_input(INPUT_GET,'botao');

include 'mensagemDAO.php';
$novaMensagem = new mensagemDAO();

$novaMensagem->setassunto($assunto);
$novaMensagem->setobs($obs);
$novaMensagem->setmensagemdata($mensagemdata);


if($botao=='enviar'){
        $novaMensagem->enviarMens();
    }else{

    }

?>