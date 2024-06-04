<?php

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
	
	include_once("conexao.php");
	
     $query = "Insert into os (dataInicial,dataFinal,garantia,descricaoProduto,defeito,status,observacoes,laudoTecnico,valorTotal,clientes_id,usuarios_id,lancamento,faturado,cpf,andamento)

     VALUES('$dtin','$dtfin','$garan','$dsp','$defeito','$stts','$obs','$laudo','$vl ','$clien','$atd','$lanc','$fatu','$cpf','$and')";

     $resultado_usuario = mysqli_query($conn, $query);
	 
 echo ("<script>
        window.alert('Os Cadastrada com Sucesso!')
        window.location.href='../listar_os.php';
    </script>");
	
	
?>

    
	
	
	
							

	
	
	
	