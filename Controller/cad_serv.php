			

<?php

   include_once("conexao.php");
 	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$ds = $_POST['ds'];
	$preco= $_POST['preco'];
	
     $query = "Insert into servicos (nome,descricao,preco)
     VALUES('$nome','$ds','$preco')";

     $resultado_usuario = mysqli_query($conn, $query);
	 
 echo ("<script>
        window.alert('Serviço Cadastrado com Sucesso!')
        window.location.href='../listar_serv.php';
    </script>");
	
	
?>

    
	
	
	
							

	
	
	
	