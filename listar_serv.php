

<?php
 
  include_once("./Controller/conexao.php");
  include_once("./View/menu.php");
  $query = "SELECT * FROM servicos order by 'idServicos'";
?>

<section class="content-header">
      <h1>
        Lista de Serviços
        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Serviços</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Descrição</th>
				  <th>Preço</th>
                  
                 
                </tr>
				
				
				
				
				<tbody>
                <tr>
				
				<?php 
				
				     /* $conn vem da conexao.php*/
					if ($result = $conn->query($query)) {

						/* linhas = array */
						while ($row = $result->fetch_assoc()) {
						echo "<tr>";
							echo "<td>".$row["idServicos"]."</td>";
							echo "<td>".$row['nome']."</td>";
							echo "<td>".$row['descricao']."</td>";
							echo "<td> R$".$row['preco']."</td>";

							
				?>
                 




				<td>
  
 							<a href='alt_serv.php?id=<?php echo $row['idServicos']; ?>'><button type="button" class="btn btn-warning">Editar</button></a>
							<a href='./Controller/delete_serv.php?id=<?php echo $row['idServicos']; ?>'><button type="button" class="btn btn-danger">Excluir</button>
							</td> 
                 
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