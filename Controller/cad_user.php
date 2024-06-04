<?php

    $nome  = $_POST['nome'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	
	include_once("conexao.php");
	
     $query = "Insert into usuarios (email,senha,nome,login)
     VALUES('$email','$senha','$nome','$login')";

     $resultado_usuario = mysqli_query($conn, $query);
	 
 echo ("<script>
        window.alert('Usuario Cadastrado com Sucesso!')
        window.location.href='../listar_user.php';
    </script>");
	
	
?>

    
	
	
	
							

	
	
	
	