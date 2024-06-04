<?php
 
  include_once("./Controller/conexao.php");
  include_once("./View/menu.php");
  $query = "SELECT * FROM usuarios order by 'idUsuarios'";
?>

<section class="content-header">
      <h1>
        Lista de Usuarios
        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Email</th>
				  <th>Login</th>
                  <th>Senha</th>
                  
                 
                </tr>
				
				
				
				
				<tbody>
                <tr>
				
				<?php 
				
				     /* $conn vem da conexao.php*/
					if ($result = $conn->query($query)) {

						/* linhas = array */
						while ($row = $result->fetch_assoc()) {
						echo "<tr>";
							echo "<td>".$row["idUsuarios"]."</td>";
							echo "<td>".$row['nome']."</td>";
							echo "<td>".$row['email']."</td>";
							echo "<td>".$row['login']."</td>";
							echo "<td>".$row['senha']."</td>";

							
				?>
                 




				<td>
                            <a href= 'view_user.php?id=<?php echo $row['idUsuarios']; ?>' target="_blank"><button type="button" class="btn btn-sucess">Mais Info</button></a>
 							<a href='alt_user.php?id=<?php echo $row['idUsuarios']; ?>'><button type="button" class="btn btn-warning">Editar</button></a>
							<a href='./Controller/deletar_User.php?id=<?php echo $row['idUsuarios']; ?>'><button type="button" class="btn btn-danger">Excluir</button>
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