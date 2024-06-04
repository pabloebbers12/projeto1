<?php

   session_start();
   $id = $_GET['id'];
    
	include_once("conexao.php");
	
     $query = "delete from produtos where idProdutos = '$id'";

     $resultado_usuario = mysqli_query($conn, $query);
	 
 echo ("<script>
        window.alert('Produto Excluido com Sucesso!')
        window.location.href='../listar_prod.php';
    </script>");
	
?>



    
	
	
	
							

	
	
	
	