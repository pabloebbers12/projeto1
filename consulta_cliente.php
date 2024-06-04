<meta charset="utf-8">
<head> <style type="text/css">
	
</style></head>
<?php

  include_once("./Controller/conexao.php");
include_once("./View/menu1.php");
  $cpf = $_GET['cpf'];

       $query= "SELECT * FROM os join clientes on clientes.idClientes = os.clientes_id  where  os.cpf = '$cpf'" ;
?>

<section class="content-header">
      <h1>
        Ordem de Serviço
        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content" > 
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ordem de Serviço</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<div style="overflow-x:auto;">
              <table id="example2" class="table table-bordered table-hover">

                <thead>
                <tr>
               
                  <th>Entrada</th>
                  <th>Data Final</th>
				  <th>CPF</th>
				  <th>Garantia</th>
				  <th>Valor Total</th> 
                  <th>Descrição</th>
                   <th>Status</th>
                    <th>Observações</th>               
                 
                </tr>
				
				
				
				
				<tbody>
                <tr>
				
				<?php 


				
				
				     /* $conn vem da conexao.php*/
					if ($result = $conn->query($query)) {

						/* linhas = array */
						while ($row = $result->fetch_assoc()) {
						echo "<tr>";
						
							echo "<td>".$row['dataInicial']."</td>";
							echo "<td>".$row['dataFinal']."</td>";
							echo "<td>".$row['cpf']."</td>";
							echo "<td>".$row['garantia']."</td>";
							echo "<td>".$row['valorTotal']."</td>";
							echo "<td>".$row['descricaoProduto']."</td>";
							echo "<td>".$row['status']."</td>";
							echo "<td>".$row['observacoes']."</td>";

		


				?>

	

  <p style="font-size: 30px">Olá,<?php echo $row['nomeCliente'];?><br></p> <p style="font-size: 20px" >Equipamento: <?php echo $row['equip'];?></p> 



  <p style="font-size: 20px"><b>Progresso de <?php echo $row['andamento'];?>%<br>
				<progress  max="100" value="<?php echo $row['andamento'];?>"></progress></p>

               



				<td>



                </tr>

				</div>

				<?php
						
					
					}

					   /* fechando conexao */
						$result->close();
                   }
			
					    ?>	
				
				</tbody>
				
				</tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
		  
		  </section>
		  
		  
<?php
  include_once("./View/footer1.php");
?>
    
		  