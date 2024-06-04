<?php
include_once("conexao.php");
	$id = $_POST['id'];
    $dtin  = $_POST['dtin'];
	$dtfin = $_POST['dtfin'];
	$garan = $_POST['garan'];
	$dsp = $_POST['dsp'];
    $defeito  = $_POST['defeito'];
	$stts = $_POST['stts'];
	$obs = $_POST['obs'];
	$laudo = $_POST['laudo'];
    $vl  = $_POST['vl'];
	$clien = $_POST['clien'];
	$atd = $_POST['atd'];
	$lanc = $_POST['lanc'];
	$fatu= $_POST['fatu'];
	$cpf= $_POST['cpf'];
	$and= $_POST['and'];
	
	
	
     $query = "UPDATE os SET dataInicial = '$dtin',
      dataFinal = '$dtfin',
         garantia = '$garan',
              descricaoProduto = '$dsp',
     defeito = '$defeito',
     status = '$stts',
     observacoes = '$obs',
     laudoTecnico = '$laudo',
     valorTotal = '$vl',
     clientes_id = '$clien',
     usuarios_id = '$atd',
     lancamento = '$lanc',
     faturado = '$fatu',
	 cpf = '$cpf',
	 andamento = '$and'
	 

     WHERE idOs = $id";


     $resultado_usuario = mysqli_query($conn, $query);

var_dump($query);




	 
echo ("<script>
        window.alert('Os Alterada com Sucesso!')
       window.location.href='../listar_os.php';
    </script>");
	
	
?>

    
	
	
	
							

	
	
	
	