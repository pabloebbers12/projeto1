<?php

   session_start();
   $id = $_GET['id'];
    
	include_once("conexao.php");
	
     $query = "delete from servicos where idServicos = '$id'";

     $resultado_usuario = mysqli_query($conn, $query);
	 
 echo ("<script>
        window.alert('Serviço Excluido com Sucesso!')
        window.location.href='../listar_serv.php';
    </script>");
	
?>



    
	
	
	
							

	
	
	
	