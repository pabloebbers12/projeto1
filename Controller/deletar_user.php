<?php

   session_start();
   $id = $_GET['id'];
    
	include_once("conexao.php");
	
     $query = "delete from usuarios where idUsuarios = '$id'";

     $resultado_usuario = mysqli_query($conn, $query);
	 
 echo ("<script>
        window.alert('Usuario Excluido com Sucesso!')
        window.location.href='../listar_user.php';
    </script>");
	
?>



    
	
	
	
							

	
	
	
	