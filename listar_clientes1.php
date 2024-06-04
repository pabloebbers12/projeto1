<?php
   
  include_once("./Controller/conexao.php");
  include_once("./View/menu.php");
  $query = "SELECT * FROM clientes where tipo ='1' ";
?>

<section class="content-header">
      <h1>
        Veículos Cadastrados
        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Veículos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<div style="overflow-x:auto;">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Modelo Veículo</th>
                  <th>Cpf</th>
				  <th>Telefone</th>
                  <th>Celular</th>
                    <th>Email</th>
                    <th>Mensagem</th>
                    <th>Serviço</th>
                 
                </tr>
				
				
				
				
				<tbody>
                <tr>
				
				<?php 
				
				     /* $conn vem da conexao.php*/
					if ($result = $conn->query($query)) {

						/* linhas = array */
						while ($row = $result->fetch_assoc()) {
						echo "<tr>";
							echo "<td>".$row["idClientes"]."</td>";
							echo "<td>".$row['nomeCliente']."</td>";
							echo "<td>".$row['cpf']."</td>";
							echo "<td>".$row['telefone']."</td>";
							echo "<td>".$row['celular']."</td>";
							echo "<td>".$row['email']."</td>";
							echo "<td>".$row['msg']."</td>";
							echo "<td>".$row['serv']."</td>";
							
				?>
                 
				<td>
					 <a href= 'view_cliente1.php?id=<?php echo $row['idClientes']; ?>' target="_blank"><button type="button" class="btn btn-sucess">Mais Info</button></a>


							<a href='./alt_cliente1.php?id=<?php echo $row['idClientes']; ?>'><button type="button" class="btn btn-warning">Editar</button></a>

							
							<a href='./Controller/deletar_cliente.php?id=<?php echo $row['idClientes']; ?>'><button type="button" class="btn btn-danger">Excluir</button>
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