<?php
   
  include_once("./Controller/conexao.php");
  include_once("./View/menu.php");
   $id = $_GET['id'];
  $query = "SELECT * FROM clientes where idClientes = '$id'";
?>

<section class="content-header">
      <h1>
        Lista de Clientes
        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Clientes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<div style="overflow-x:auto;">
              <table id="example2" class="table table-bordered table-hover" >
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Cpf</th>
				  <th>Telefone</th>
                  <th>Celular</th>
                    <th>Email</th>
                      <th>Data de Cadastro</th>
                        <th>Endereço</th>
                          <th>Número</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Cep</th>
                            <th>Mensagem</th>
                            <th>Equipamento</th>
                            <th>Número de Série</th>
                            <th>Modelo</th>
                            <th>Cor</th>
                            <th>Descrição</th>
                            <th>Tensão</th>
                            <th>Potência</th>
                            <th>Voltagem</th>
                            <th>Data dem Fabricação</th>

                 
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
							echo "<td>".$row['dataCadastro']."</td>";
							echo "<td>".$row['rua']."</td>";
							echo "<td>".$row['numero']."</td>";
							echo "<td>".$row['bairro']."</td>";
							echo "<td>".$row['cidade']."</td>";
							echo "<td>".$row['estado']."</td>";
							echo "<td>".$row['cep']."</td>";
							echo "<td>".$row['msg']."</td>";
							echo "<td>".$row['equip']."</td>";
							echo "<td>".$row['num_serie']."</td>";
							echo "<td>".$row['model']."</td>";
							echo "<td>".$row['cor']."</td>";
							echo "<td>".$row['descri']."</td>";
							echo "<td>".$row['tens']."</td>";
							echo "<td>".$row['pot']."</td>";
							echo "<td>".$row['volt']."</td>";
							echo "<td>".$row['dtfab']."</td>";

						
					
					}

					   /* fechando conexao */
						$result->close();
                   }
			
					    ?>	
				
				</tbody>
				
				</tfoot>
              </table>
            </div>
            <div style="overflow-x:auto;">
            <!-- /.box-body -->
          </div>
		  
		  </section>
		  

		  

    
		  
<?php
  include_once("./View/footer.php");
?>