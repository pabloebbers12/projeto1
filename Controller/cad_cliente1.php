
<?php
	include_once ("conexao.php");
	
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
							  $msg = $_POST['msg'];
							  	  $servico = $_POST['servico'];
							  	  	  $qtd = $_POST['qtd'];
							  	  	  	  $seg = $_POST['seg'];
	
	$query = "INSERT INTO clientes (nomeCliente,
													  cpf,
													   email,
													  telefone,
													  celular,
													   rua,
													  numero,
													  bairro,
													  cidade,
													  estado,
													  cep,
													  msg,
													   serv,
													  qtd,
													  seg,
													   tipo)
										   VALUES('$nm',
										   		  '$cpf',
										   		'$email',
										          '$tel',
										          '$cel',
										      '$rua',
												  '$num',
												  '$bairro',
												  '$cidade',
												  '$uf',
												'$cep',
												'$msg',
												'$servico',
												'$qtd',
											'$seg',
											'1')";

				     $resultado_usuario = mysqli_query($conn, $query);							
	echo ("<script>
        window.alert('Cliente Cadastrado com Sucesso!')
        window.location.href='../listar_clientes1.php';
    </script>");

