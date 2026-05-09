<?php

   namespace DAL; 

   include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst226/DAL/conexao.php";
   include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst226/MODEL/agricultor.php";  

   class Agricultor{
       
       public function Select() {

          $sql = "Select * from agricultor;";
          $con = Conexao::conectar(); 
          $registros = $con->query($sql);  
          $con = Conexao::desconectar(); 

          foreach ($registros as $linha){
              $agricultor = new \MODEL\Agricultor();
              $agricultor->setId($linha['id']); 
              $agricultor->setNome($linha['nome']); 
              $agricultor->setBairro($linha['bairro']); 
              $agricultor->setCidade($linha['cidade']);  
              $agricultor->setIdade($linha['idade']);
              
              $lstAgricultor[] = $agricultor; 
          }

          return $lstAgricultor; 
       }

       public function Insert(\MODEL\Agricultor $agricultor)
   {
      $sql = "INSERT INTO agricultor (nome, cidade, bairro, idade)
           VALUES ('{$agricultor->getNome()}', '{$agricultor->getCidade()}', '{$agricultor->getBairro()}', '{$agricultor->getIdade()}');";

      $con = Conexao::conectar();
      $result = $con->query($sql);
      $con = Conexao::desconectar();

      echo $result->errorCode();

      return $result;
   }


   }



?>