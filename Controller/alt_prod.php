<?php

   session_start();
  
    
	include_once("conexao.php");
 	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$ds = $_POST['ds'];
	$preco= $_POST['preco'];
	
     $query = "UPDATE produtos SET 
												nome='$nome',
												descricao='$ds',
												precoVenda='$preco'
												WHERE idProdutos= $id";

     $resultado_usuario = mysqli_query($conn, $query);
	 
 echo ("<script>
        window.alert('Produto Alterado com Sucesso!')
        window.location.href='../listar_prod.php';
    </script>");
	
?>



    
	
	
	
							

	
	
	
	