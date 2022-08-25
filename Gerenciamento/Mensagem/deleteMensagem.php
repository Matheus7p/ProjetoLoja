<?php

 if(!empty($_GET['codMensagem'])){
        include_once('../../conexao.php');
        include_once('../../testeconexao.php');

        $id = $_GET['codMensagem'];
        $sqlSelect = "SELECT * FROM mensagem WHERE codMensagem =$id";
        $result = $conexaoTeste->query($sqlSelect);

        if($result->num_rows > 0){
            $sqlDelete = "DELETE FROM Mensagem WHERE codMensagem=$id";
            $resultDelete = $conexaoTeste->query($sqlDelete);
        }
    } header('location: genMensagem.php');

?>