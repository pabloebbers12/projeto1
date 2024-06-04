<?php

   session_start();
  
    
	include_once("conexao.php");
 	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$ds = $_POST['ds'];
	$preco= $_POST['preco'];
	
     $query = "UPDATE servicos SET 
												nome='$nome',
												descricao='$ds',
												preco='$preco'
												WHERE idServicos = $id";

     $resultado_usuario = mysqli_query($conn, $query);
	 
 echo ("<script>
        window.alert('Serviço Alterado com Sucesso!')
        window.location.href='../listar_serv.php';
    </script>");
	
?>



    
	
	
	
							

	
	
	
	