<?php
  include_once("./View/menu.php");
 include_once("./Controller/conexao.php");
      
      $codigo = $_GET['id'];
          
      $query= "Select * from produtos WHERE idProdutos= $codigo";
      //var_dump($query);


?>

<section class="content-header">
       <section class="content-header">
      <h1>
        Alterar Produtos
       
      </h1>
	  
	  <form method="POST" action="./Controller/alt_prod.php">
	  
	   <div class="box box-info">
           
			 <div class="box-body">


          <?php 
        
             /* $conn vem da conexao.php*/
          if ($result = $conn->query($query)) 
            
            /* linhas = array */
            while ($row = $result->fetch_assoc()) 
            {
              //echo $row['nome'];
              //var_dump($row);
        ?>

  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                <input type="text" readonly="true" name="id" class="form-control" placeholder="ID"  value="<?php echo $row['idProdutos'];?>">
              </div>
              <br>

			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                <input type="text"  name="nome" class="form-control" placeholder="Nome"  value="<?php echo $row['nome'];?>">
              </div>
              <br>
			
          
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <input type="text" name="ds" class="form-control" placeholder="Descrição"  value="<?php echo $row['descricao'];?>">
              </div>
              <br>

             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money "></i></span>
                <input type="text" name="preco" class="form-control" placeholder="Preço"  value="<?php echo $row['precoVenda'];?>">
              </div>
              <br>       
			  
			 
			 <input type="submit" value="Alterar"/>
			 </a>
			  
			
			  </form>
      <?php }
      ?>
    </section>

  
<?php
  include_once("./View/footer.php");
?>			  