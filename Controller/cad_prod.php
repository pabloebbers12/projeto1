			

<?php

   include_once("conexao.php");
 	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$ds = $_POST['ds'];
	$preco= $_POST['preco'];
	
     $query = "Insert into produtos (nome,descricao,precoVenda)
     VALUES('$nome','$ds','$preco')";

     $resultado_usuario = mysqli_query($conn, $query);
	 
 echo ("<script>
        window.alert('Produto Cadastrado com Sucesso!')
        window.location.href='../listar_prod.php';
    </script>");
	
	
?>

    
	
	
	
							

	
	
	
	