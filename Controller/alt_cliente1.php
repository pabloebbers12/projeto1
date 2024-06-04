
<?php


	include_once 'conexao.php';
	
	$id = $_POST['id'];
	$nm = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
		$rua = $_POST['rua'];
			$num = $_POST['num'];
				$bairro = $_POST['bairro'];
					$uf = $_POST['uf'];
						$cidade = $_POST['cidade'];
							$cep = $_POST['cep'];
							  $cel = $_POST['cel'];
							  $tel = $_POST['tel'];
							  $serv = $_POST['servico'];
							  $msg = $_POST['msg'];
							  	  $servico = $_POST['servico'];
							  	  	  $qtd = $_POST['qtd'];
							  	  	  	  $seg = $_POST['seg'];
	
	$query = "UPDATE clientes SET nomeCliente = '$nm',
													  cpf  = '$cpf',
													   email = '$email',
													  telefone  = '$tel',
													  celular = '$cel',
													   rua = '$rua',
													  numero = '$num',
													  bairro = '$bairro',
													  cidade = '$cidade',
													  estado = '$uf',
													  cep = '$cep',
													  msg = '$msg',
													   serv = '$servico',
													  qtd = '$qtd',
													  seg = '$seg'
													  WHERE idClientes = $id";
										 
     $resultado_usuario = mysqli_query($conn, $query);

 echo ("<script>
        window.alert('Cliente Alterado com Sucesso!')
        window.location.href='../listar_clientes1.php';
    </script>");
	
?>
