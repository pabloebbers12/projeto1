<?php

   session_start();
   $id = $_GET['id'];
    
	include_once("conexao.php");
	
     $query = "delete from clientes where idClientes = '$id'";

     $resultado_usuario = mysqli_query($conn, $query);
	 
 echo ("<script>
        window.alert('Cliente Excluido com Sucesso!')
        window.location.href='../listar_clientes2.php';
    </script>");
	
?>



    
	
	
	
							

	
	
	
	