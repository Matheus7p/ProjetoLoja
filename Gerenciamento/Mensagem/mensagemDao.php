<?php
include "../../conexao.php";
class mensagemDAO{
    private $assunto, $obs, $mensagemdata;

    public function getassunto(){
        return $this->assunto;
    }
    public function setassunto($as){
        $this->assunto =$as;
    }
    
    public function getobs(){
        return $this->obs;
    }
    public function setobs($obser){
        $this->obs =$obser;
    }

    public function getmensagemdata(){
        return $this->mensagemdata;
    }
    public function setmensagemdata($dat){
        $this->mensagemdata=$dat;
    }

    public function enviarMens(){
        $sql = 'insert into mensagem (assunto, obs, mensagemdata) values (?,?,?)';

        $banco = new conexao();
        $con = $banco->getConexao();
        $resultado = $con->prepare($sql);
        $resultado->bindValue(1, $this->assunto);
        $resultado->bindValue(2, $this->obs);
        $resultado->bindValue(3, $this->mensagemdata);
        $final = $resultado->execute();

        if($final){
            echo "<script LANGUAGE= 'JavaScript'>
                window.alert('Cadastrado com sucesso');
                window.location.href='mensagem.php';
                </script>";
        }
    }
}


?>