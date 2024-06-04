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
							  $msg = $_POST['msg'];

				$equip = $_POST['equip'];
				$numserie = $_POST['numserie'];
				$mod = $_POST['mod'];
				$cor = $_POST['cor'];
				$ds = $_POST['ds'];
				$tens = $_POST['tens'];			  
				$pot = $_POST['pot'];
				$voltg = $_POST['voltg'];
				$dtfab = $_POST['dtfab'];
	
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
													   tipo,
													    equip,
													     num_serie,
													      model,
													  cor,
													  descri,
													  tens,
													  pot,
													   volt,
													    dtfab)
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
											'2',
											'$equip',
											'$numserie',
										'$mod',
									'$cor',
									'$ds',
									'$tens',
									'$pot',
									'$voltg',
									'$dtfab')");
	$stmt -> execute();

	 echo ("<script>
        window.alert('Orçamento criado com Sucesso! Em breve entraremos em contato $nm ! ')
        window.location.href='orc2.html';
    </script>");
?>

?>

