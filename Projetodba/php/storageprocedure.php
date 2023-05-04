<!DOCTYPE html>
<html>
   <head>
       <title>PROCEDURE</title>
	   <meta charset="utf-8">
   </head>
	   <body>
		   <?php
		   include 'conexao.php';
		   
		   if (isset($_POST['QTDE'])){
		   $qtde = $_POST['QTDE'];
		   $produtos = '';
		   
			$result= mysqli_query($conexao,"CALL SP_SelecioneProdutos('".$qtde. "');")
		   or die ("Erro ao Executar a querry".mysqli_error());
		   
			   print "<h2>Resultado</h2>";
			   print"<br>";
		   
		   while($linha = mysqli_fetch_assoc($result)){
				print $linha["id"] ."-". $linha["descricao"];
				print"<br>";
		   }
			   
		   }
		   
		   ?>
	   </body>
</html>