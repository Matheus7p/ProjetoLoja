<?php

 if(!empty($_GET['codCliente'])){
        include_once('../../conexao.php');
        include_once('../../testeconexao.php');

        $id = $_GET['codCliente'];
        $sqlSelect = "SELECT * FROM cliente WHERE codCliente =$id";
        $result = $conexaoTeste->query($sqlSelect);

        if($result->num_rows > 0){
            $sqlDelete = "DELETE FROM cliente WHERE codCliente=$id";
            $resultDelete = $conexaoTeste->query($sqlDelete);
        }
    } header('location: cliente.php');

?>