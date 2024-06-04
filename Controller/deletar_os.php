<?php

   session_start();
   $id = $_GET['id'];
    
	include_once("conexao.php");
	
     $query = "delete from os where idOs = '$id'";

     $resultado_usuario = mysqli_query($conn, $query);
	 
 echo ("<script>
        window.alert('Os Excluida com Sucesso!')
        window.location.href='../listar_os.php';
    </script>");
	
?>



    
	
	
	
							

	
	
	
	