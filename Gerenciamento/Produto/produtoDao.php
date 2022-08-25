<?php
include "../../conexao.php";
class produtoDAO{
    private $codProd, $descProd, $valor;

    public function getCodProd(){
        return $this->codProd;
    }
    public function setCodProd($cd){
        $this->codProd =$cd;
    }
    
    public function getdescProd(){
        return $this->descProd;
    }
    public function setdescProd($ds){
        $this->descProd =$ds;
    }

    public function getValor(){
        return $this->valor;
    }
    public function setValor($val){
        $this->valor =$val;
    }


    public function cadastrarNvP(){


        $sql = 'insert into produto (codProd, descProd, valor ) values (?,?,?)';

        $banco = new conexao();
        $con = $banco->getConexao();
        $resultado = $con->prepare($sql);
        $resultado->bindValue(1, $this->codProd);
        $resultado->bindValue(2, $this->descProd);
        $resultado->bindValue(3, $this->valor);
        $final = $resultado->execute();

        if($final){
            echo "<script LANGUAGE= 'JavaScript'>
                window.alert('Cadastrado com sucesso');
                window.location.href='produto.php';
                </script>";
        }
    }
    public function deletarNvP(){
        $sql1 = 'delete from produto where codProd =?';
        $banco = new conexao();
        $con = $banco->getConexao();
        $resultado = $con->prepare($sql1);
        $resultado->bindValue(1, $this->getCodProd()); 
        $final = $resultado->execute();
        if($final){
            echo "<script LANGUAGE='JavaScript'>
            window.alert('Produto deletado com sucesso');
            window.location.href='produto.php';
            </script>";
        }
    }
}


?>