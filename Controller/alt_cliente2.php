
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
													  equip = '$equip',
													  num_serie = '$numserie',
													  model = '$mod',
													  cor = '$cor',
													  descri = '$ds',
													  tens = '$tens',
													  pot = '$pot',
													  volt = '$voltg',
													  dtfab = '$dtfab'
													  
													  WHERE idClientes = $id";


								 
     $resultado_usuario = mysqli_query($conn, $query);

 echo ("<script>
        window.alert('Cliente Alterado com Sucesso!')
        window.location.href='../listar_clientes2.php';
    </script>");
	
?>
