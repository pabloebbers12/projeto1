<?php

   session_start();
  
    
	include_once("conexao.php");
 	$id = $_POST['id'];
	$email = $_POST['email'];
	$pass = $_POST['senha'];
	$nm = $_POST['nome'];
	$log = $_POST['log'];
	
     $query = "UPDATE USUARIOS SET email='$email',
												senha='$pass',
												nome='$nm',
												login='$log'
												WHERE idUsuarios = $id";

     $resultado_usuario = mysqli_query($conn, $query);
	 
 echo ("<script>
        window.alert('Usuario Alterado com Sucesso!')
        window.location.href='../listar_user.php';
    </script>");
	
?>



    
	
	
	
							

	
	
	
	