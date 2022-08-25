<?php
include '../../conexao.php';

class clienteDao{
   private $cpf, $nomeCliente, $cidade, $genero;

   public function getCpf(){
       return $this->cpf;
   }
   public function setCpf($cpf){
       $this->cpf =$cpf;
   }
   
   public function getNomeCliente(){
       return $this->nomeCliente;
   }
   public function setNomeCliente($nc){
       $this->nomeCliente =$nc;
   }

   public function getCidade(){
       return $this->cidade;
   }
   public function setCidade($cid){
       $this->cidade =$cid;
   }

   public function getGenero(){
       return $this->genero;
   }
   public function setGenero($gen){
       $this->genero =$gen;
   }
   
   public function cadastrarNvC(){
       $sql = 'insert into cliente (cpf, nomeCliente, cidade, genero) values (?,?,?,?)';

       $banco = new conexao();
       $con = $banco->getConexao();
       $resultado = $con->prepare($sql);
       $resultado->bindValue(1, $this->cpf);
       $resultado->bindValue(2, $this->nomeCliente);
       $resultado->bindValue(3, $this->cidade);
       $resultado->bindValue(4, $this->genero);
       $final = $resultado->execute();

       if($final){
           echo "<script LANGUAGE= 'JavaScript'>
               window.alert('Cadastrado com sucesso');
               window.location.href='../../index.php';
               </script>";
       }
   }
}

?>