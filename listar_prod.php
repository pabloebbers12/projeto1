


<?php
 
  include_once("./Controller/conexao.php");
  include_once("./View/menu.php");
  $query = "SELECT * FROM produtos order by 'idProdutos'";
?>
<meta charset="utf-8">
<section class="content-header">
      <h1>
        Lista de Produtos
        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Produtos</h3>
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
							echo "<td>".$row["idProdutos"]."</td>";
							echo "<td>".$row['nome']."</td>";
							echo "<td>".$row['descricao']."</td>";
							echo "<td> R$".$row['precoVenda']."</td>";

							
				?>
                 




				<td>
  
 							<a href='alt_prod.php?id=<?php echo $row['idProdutos']; ?>'><button type="button" class="btn btn-warning">Editar</button></a>
							<a href='./Controller/deletar_prod.php?id=<?php echo $row['idProdutos']; ?>'><button type="button" class="btn btn-danger">Excluir</button>
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