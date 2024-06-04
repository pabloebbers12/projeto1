<meta charset="utf-8">
<?php
  $id = $_GET['id'];
  include_once("./Controller/conexao.php");
  include_once("./View/menu.php");
    $query = "SELECT * FROM os where idOs = '$id'";
?>

<section class="content-header">
      <h1>
        Ordens de Serviço
        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ordens de Serviço</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<div style="overflow-x:auto;">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Entrada</th>
                  <th>Data Final</th>
				  <th>Garantia</th>
                  <th>Descrição</th>
                  <th>Defeito</th>
                   <th>Status</th>
				   <th>Andamento</th>
                    <th>Observações</th> 
                    <th>Laudo Técnico</th> 
                    <th>Valor Total</th>
                    <th>Id Cliente</th>
                    <th>CPF Cliente</th>					
                    <th>Id Usuário</th>
                    <th>Id Lançamento</th>     
                    <th>Faturado</th>                 
                 
                </tr>
				
				
				
				
				<tbody>
                <tr>
				
				<?php 
				
				     /* $conn vem da conexao.php*/
					if ($result = $conn->query($query)) {

						/* linhas = array */
						while ($row = $result->fetch_assoc()) {
						echo "<tr>";
							echo "<td>".$row["idOs"]."</td>";
							echo "<td>".$row['dataInicial']."</td>";
							echo "<td>".$row['dataFinal']."</td>";
							echo "<td>".$row['garantia']."</td>";
							echo "<td>".$row['descricaoProduto']."</td>";
							echo "<td>".$row['defeito']."</td>";
							echo "<td>".$row['status']."</td>";
							echo "<td>".$row['andamento']."%</td>";
							echo "<td>".$row['observacoes']."</td>";
							echo "<td>".$row['laudoTecnico']."</td>";
							echo "<td>".$row['valorTotal']."</td>";
							echo "<td>".$row['clientes_id']."</td>";
							echo "<td>".$row['cpf']."</td>";
							echo "<td>".$row['usuarios_id']."</td>";
							echo "<td>".$row['lancamento']."</td>";
							echo "<td>".$row['faturado']."</td>";

							
				?>
                      Progresso de <?php echo $row['andamento'];?>%<br>
				<progress max="100" value="<?php echo $row['andamento'];?>"></progress>
                 
                </tr>

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
  include_once("./View/footer.php");
?>