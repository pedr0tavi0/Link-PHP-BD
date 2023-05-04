<?php
  //Conectando com MySQL - localhost
  $conexao = mysqli_connect('localhost','root','');
  mysqli_set_charset($conexao,'utf8');
  
  if(!$conexao){
	  die("ERRO de conexao com o banco, erro ->".mysqli_erro());
   }
   
   //selecionando o banco de dados
   $banco = mysqli_select_db($conexao, 'empresa');
    
   if(!$banco){
	  die("ERRO ao selecionar o banco, erro ->".mysqli_erro());
   }
   
    
	

?>