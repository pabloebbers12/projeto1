<?php
  include_once("./View/menu.php");
?>

<section class="content-header">
       <section class="content-header">
      <h1>
        Cadastro do Veículo
       
      </h1>
	  
	  <form method="POST" action="./Controller/cad_cliente1.php">
	  
	   <div class="box box-info">
           
			 <div class="box-body">
			<div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="nome" class="form-control" placeholder="Modelo Veículo"  >
              </div>
              <br>
			
          
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                <input type="text" name="cpf" class="form-control" placeholder="Placa Veículo"  >
              </div>
              
              <br>
         


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list-ol"></i></span>
                <input type="text" name="qtd" class="form-control" placeholder="Catégoria do Veículo" >
              </div>
              <br>       


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                <input type="text" name="seg" class="form-control" placeholder="Segmento" >
              </div>
              <br>       
  

     
			  
			 
			 <input type="submit" value="Cadastrar"/>
			 </a>
			  
			
			  </form>
      
    </section>

  
<?php
  include_once("./View/footer.php");
?>			                                                                                                                                    