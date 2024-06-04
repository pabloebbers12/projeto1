

<?php
  include_once("./View/menu.php");
?>

<section class="content-header">
       <section class="content-header">
      <h1>
        Cadastro de Produtos
       
      </h1>
	  
	  <form method="POST" action="./Controller/cad_prod.php">
	  
	   <div class="box box-info">
           
			 <div class="box-body">
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                <input type="text" name="nome" class="form-control" placeholder="Nome"  >
              </div>
              <br>

			
          
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <input type="text" name="ds" class="form-control" placeholder="Descrição"  >
              </div>
              <br>

             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                <input type="text" name="preco" class="form-control" placeholder="Preço" >
              </div>
              <br>       

			 
			 <input type="submit" value="Cadastrar"/>
			 </a>
			  
			
			  </form>
      
    </section>

  
<?php
  include_once("./View/footer.php");
?>			  