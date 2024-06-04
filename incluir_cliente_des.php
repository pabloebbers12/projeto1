<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php
	include_once 'conexao.php';
	
	$nm = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
		$rua = $_POST['rua'];
			$num = $_POST['numero'];
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
	
	$stmt = $con->prepare("INSERT INTO clientes (nomeCliente,
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
											'1')");
	$stmt -> execute();

	 echo ("<script>
        window.alert('Orçamento criado com Sucesso! Em breve entraremos em contato $nm ! ')
        window.location.href='orc1.html';
    </script>");
?>

